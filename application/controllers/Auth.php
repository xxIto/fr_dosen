<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	// Deklarasi properti
	public $form_validation;
	public $input;
	public $session;
	public $user;

	public function __construct()
	{
		parent::__construct();
		// Load library dan model yang dibutuhkan
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('user');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim', [
			'required' => 'Username harus diisi!'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]', [
			'required' => 'Password harus diisi!',
			'min_length' => 'Password terlalu pendek!'
		]);

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login';
			$this->load->view('auth/login', $data);
		} else {
			$this->login();
		}
	}

	private function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->user->getDataByUsername($username);

		if ($user) {
			if (password_verify($password, $user['password'])) {
				$data = [
					'id' => $user['user_id'],
					'email' => $user['email'],
					'username' => $user['username'],
					'name' => $user['name'],
					'no_telepon' => $user['no_telepon'],
					'role' => $user['id_role']
				];

				$this->session->set_userdata($data);
				redirect('dashboard');
			} else {
				$this->session->set_flashdata('error', 'Password salah!');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('error', 'Username tidak terdaftar!');
			redirect('auth');
		}
	}

	public function registration()
	{
		$this->form_validation->set_rules('nama_depan', 'Nama depan', 'required|trim|max_length[64]', [
			'required' => 'Nama depan harus diisi!',
			'max_length' => 'Nama depan terlalu panjang!'
		]);
		$this->form_validation->set_rules('nama_belakang', 'Nama belakang', 'required|trim|max_length[64]', [
			'required' => 'Nama belakang harus diisi!',
			'max_length' => 'Nama belakang terlalu panjang!',
		]);
		$this->form_validation->set_rules('nama_lengkap', 'Nama lengkap', 'required|trim|max_length[128]', [
			'required' => 'Nama lengkap harus diisi!',
			'max_length' => 'Nama lengkap terlalu panjang!'
		]);
		$this->form_validation->set_rules('no_telepon', 'Nomer Telepon', 'required|trim|max_length[14]', [
			'required' => 'Nomer telepon harus diisi!',
			'max_length' => 'Nomer telepon terlalu panjang!'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'required' => 'Email harus diisi!',
			'valid_email' => 'Email tidak valid!',
			'is_unique' => 'Email sudah terdaftar!'
		]);
		$this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[4]|max_length[20]|is_unique[user.username]', [
			'is_unique' => 'Username sudah terdaftar!',
			'min_length' => 'Username terlalu pendek!',
			'max_length' => 'Username terlalu panjang!'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[passwordconf]', [
			'matches' => 'Password tidak sama!',
			'min_length' => 'Password terlalu pendek!'
		]);
		$this->form_validation->set_rules('passwordconf', 'Repeat Password', 'required|trim|matches[password]', [
			'matches' => 'Password tidak sama!'
		]);

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Registration';
			$this->load->view('auth/registration', $data);
		} else {
			$this->registration_process();
		}
	}

	private function registration_process()
	{
		$data = [
			'nama_depan'    => htmlspecialchars($this->input->post('nama_depan')),
			'nama_belakang' => htmlspecialchars($this->input->post('nama_belakang')),
			'nama_lengkap'  => htmlspecialchars($this->input->post('nama_lengkap')),
			'username'      => htmlspecialchars($this->input->post('username')),
			'email'         => htmlspecialchars($this->input->post('email')),
			'no_telepon'    => htmlspecialchars($this->input->post('no_telepon')),
			'password'      => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'id_role'       => 2
		];

		$this->user->storeData($data);

		$this->session->set_flashdata('success', 'Berhasil mendaftar, silahkan login!');
		redirect('auth');
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->sess_destroy();

		$this->session->set_flashdata('success', 'Berhasil logout dari sistem');
		redirect('auth');
	}
}
