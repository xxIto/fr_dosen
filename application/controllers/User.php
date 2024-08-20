<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		isLoggedIn($this->session->userdata('id'));
	}

	public function index()
	{
		$data['title'] = 'Manajemen User';
		$data['users'] = $this->user->getData();

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/topbar');
		$this->load->view('dashboard/user/index', $data);
		$this->load->view('layouts/footer');

		$this->session->unset_userdata('success');
        $this->session->unset_userdata('error');
	}

	public function create()
	{
		$data['title'] = 'Manajemen User | Tambah User';

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/topbar');
		$this->load->view('dashboard/user/create', $data);
		$this->load->view('layouts/footer');
	}

	public function store()
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

		if ($this->form_validation->run() === false) {

			$data['title'] = 'Manajemen User | Tambah User';

			$data['email'] = $this->input->post('email');
			$data['username'] = $this->input->post('username');
			$data['nama_depan'] = $this->input->post('nama_depan');
			$data['nama_belakang'] = $this->input->post('nama_belakang');
			$data['nama_lengkap'] = $this->input->post('nama_lengkap');
			$data['no_telepon'] = $this->input->post('no_telepon');

			$this->load->view('layouts/header', $data);
			$this->load->view('layouts/sidebar');
			$this->load->view('layouts/topbar');
			$this->load->view('dashboard/user/create', $data);
			$this->load->view('layouts/footer');
		} else {

			$email          	= htmlspecialchars($this->input->post('email'));
			$username       	= htmlspecialchars($this->input->post('username'));
			$nama_depan         = htmlspecialchars($this->input->post('nama_depan'));
			$nama_belakang          = htmlspecialchars($this->input->post('nama_belakang'));
			$nama_lengkap          = htmlspecialchars($this->input->post('nama_lengkap'));
			$no_telepon          	= htmlspecialchars($this->input->post('no_telepon'));
			$password       	= password_hash($this->input->post('password'), PASSWORD_DEFAULT);
			$role           	= htmlspecialchars($this->input->post('id_role'));

			$data = [
				'email'         => $email,
				'username'      => $username,
				'nama_depan'    => $nama_depan,
				'nama_belakang'     => $nama_belakang,
				'nama_lengkap'     => $nama_lengkap,
				'no_telepon'         => $no_telepon,
				'password'      => $password,
				'id_role'       => $role
			];

			$this->user->storeData($data);

			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Berhasil menambah user!');
				redirect('user');
			} else {
				$this->session->set_flashdata('error', 'Gagal menambah user!');
				redirect('user');
			}
		}
	}

	public function edit($id)
	{

		$data['title'] = 'Manajemen User | Update User';
		$data['users'] = $this->user->editData($id);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/topbar');
		$this->load->view('dashboard/user/edit', $data);
		$this->load->view('layouts/footer');
	}

	public function update($id)
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

		if ($this->form_validation->run() === false) {

			$data['title'] = 'Manajemen User | Edit User';
			$data['users'] = $this->user->editData($id);

			$this->load->view('layouts/header', $data);
			$this->load->view('layouts/sidebar');
			$this->load->view('layouts/topbar');
			$this->load->view('dashboard/user/edit', $data);
			$this->load->view('layouts/footer');
		} else {

			$email          	= htmlspecialchars($this->input->post('email'));
			$username       	= htmlspecialchars($this->input->post('username'));
			$nama_depan         = htmlspecialchars($this->input->post('nama_depan'));
			$nama_belakang          = htmlspecialchars($this->input->post('nama_belakang'));
			$nama_lengkap          = htmlspecialchars($this->input->post('nama_lengkap'));
			$no_telepon          	= htmlspecialchars($this->input->post('no_telepon'));
			$role           	= htmlspecialchars($this->input->post('id_role'));

			$data = [
				'email'         => $email,
				'username'      => $username,
				'nama_depan'    => $nama_depan,
				'nama_belakang'     => $nama_belakang,
				'nama_lengkap'     => $nama_lengkap,
				'no_telepon'         => $no_telepon,
				'id_role'       => $role
			];

			$this->user->updateData($id, $data);

			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Berhasil mengupdate user!');
				redirect('user');
			} else {
				$this->session->set_flashdata('error', 'Gagal mengupdate user!');
				redirect('user');
			}
		}
	}

	public function destroy($id)
	{
		$this->user->destroyData($id);

		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Berhasil menghapus user!');
			redirect('user/index');
		} else {
			$this->session->set_flashdata('error', 'Gagal menghapus user!');
			redirect('user/index');
		}
	}

	public function show($id)
	{
		$data['title'] = 'Manajemen User | Detail User';
		$data['users'] = $this->user->showData($id);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/topbar');
		$this->load->view('dashboard/user/show', $data);
		$this->load->view('layouts/footer');
	}

	public function changePassword()
	{
		$this->form_validation->set_rules('currentpass', 'Password saat ini', 'trim|required', [
			'required' => 'Password saat ini harus diisi!'
		]);

		$this->form_validation->set_rules('newpass', 'Password baru', 'trim|required|min_length[6]', [
			'required' => 'Password baru harus diisi!',
			'min_length' => 'Password baru terlalu pendek!'
		]);

		$this->form_validation->set_rules('confirmpass', 'Ulangi password', 'trim|required|matches[newpass]', [
			'required' => 'Konfirmasi password harus diisi!',
			'matches' => 'Konfirmasi password tidak sama!'
		]);

		if ($this->form_validation->run() === false) {

			$data['title'] = 'Manajemen User | Ubah Password';

			$this->load->view('layouts/header', $data);
			$this->load->view('layouts/sidebar');
			$this->load->view('layouts/topbar');
			$this->load->view('dashboard/user/change-password');
			$this->load->view('layouts/footer');
		} else {
			$id = $this->session->userdata('id');

			$newpass        = $this->input->post('newpass');
			$currentpass    = $this->input->post('currentpass');

			$user = $this->user->showData($id);

			if (password_verify($currentpass, $user['password'])) {
				$hashed = password_hash($newpass, PASSWORD_DEFAULT);
				$this->user->updateData($id, ["password" => $hashed]);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('success', 'Berhasil mengubah password!');
					redirect('dashboard');
				} else {
					$this->session->set_flashdata('error', 'Gagal mengubah password!');
					redirect('dashboard');
				}
			} else {
				$this->session->set_flashdata('error', 'Password saat ini salah!');
				redirect('user/changePassword');
			}
		}
	}
}
