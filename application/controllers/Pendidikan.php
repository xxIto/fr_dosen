<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendidikan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		isLoggedIn($this->session->userdata('id'));
	}

	public function index()
	{
		$data['title'] = 'Manajemen Pendidikan';
		$data['pendidikans'] = $this->pendidikan->getData();

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/topbar');
		$this->load->view('dashboard/pendidikan/index', $data);
		$this->load->view('layouts/footer');

		$this->session->unset_userdata('success');
        $this->session->unset_userdata('error');
	}

	public function create()
	{
		$data['title'] = 'Manajemen Pendidikan | Tambah Pendidikan';

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/topbar');
		$this->load->view('dashboard/pendidikan/create', $data);
		$this->load->view('layouts/footer');
	}

	public function store()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
			'required' => 'Nama harus diisi!',			
		]);		

		if ($this->form_validation->run() === false) {

			$data['title'] = 'Manajemen Pendidikan | Tambah Pendidikan';

			$data['nama'] = $this->input->post('nama');

			$this->load->view('layouts/header', $data);
			$this->load->view('layouts/sidebar');
			$this->load->view('layouts/topbar');
			$this->load->view('dashboard/pendidikan/create', $data);
			$this->load->view('layouts/footer');
		} else {

			$nama          	= htmlspecialchars($this->input->post('nama'));

			$data = [
				'nama'         => $nama,
			];

			$this->pendidikan->storeData($data);

			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Berhasil menambah pendidikan!');
				redirect('pendidikan');
			} else {
				$this->session->set_flashdata('error', 'Gagal menambah pendidikan!');
				redirect('pendidikan');
			}
		}
	}

	public function edit($id)
	{

		$data['title'] = 'Manajemen Pendidikan | Update Pendidikan';
		$data['pendidikans'] = $this->pendidikan->editData($id);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/topbar');
		$this->load->view('dashboard/pendidikan/edit', $data);
		$this->load->view('layouts/footer');
	}

	public function update($id)
	{

		$this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
			'required' => 'Nama harus diisi!',			
		]);

		if ($this->form_validation->run() === false) {

			$data['title'] = 'Manajemen Pendidikan | Edit Pendidikan';
			$data['pendidikans'] = $this->pendidikan->editData($id);

			$this->load->view('layouts/header', $data);
			$this->load->view('layouts/sidebar');
			$this->load->view('layouts/topbar');
			$this->load->view('dashboard/pendidikan/edit', $data);
			$this->load->view('layouts/footer');
		} else {

			$nama          	= htmlspecialchars($this->input->post('nama'));

			$data = [
				'nama'         => $nama,
			];

			$this->pendidikan->updateData($id, $data);

			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Berhasil mengupdate pendidikan!');
				redirect('pendidikan');
			} else {
				$this->session->set_flashdata('error', 'Gagal mengupdate pendidikan!');
				redirect('pendidikan');
			}
		}
	}

	public function destroy($id)
	{
		$this->pendidikan->destroyData($id);

		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Berhasil menghapus pendidikan!');
			redirect('pendidikan/index');
		} else {
			$this->session->set_flashdata('error', 'Gagal menghapus pendidikan!');
			redirect('pendidikan/index');
		}
	}

	public function show($id)
	{
		$data['title'] = 'Manajemen Pendidikan | Detail Pendidikan';
		$data['pendidikans'] = $this->pendidikan->showData($id);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/topbar');
		$this->load->view('dashboard/pendidikan/show', $data);
		$this->load->view('layouts/footer');
	}
}
