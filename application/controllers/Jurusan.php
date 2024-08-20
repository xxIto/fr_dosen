<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		isLoggedIn($this->session->userdata('id'));
	}

	public function index()
	{
		$data['title'] = 'Manajemen Jurusan';
		$data['jurusans'] = $this->jurusan->getData();

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/topbar');
		$this->load->view('dashboard/jurusan/index', $data);
		$this->load->view('layouts/footer');

		$this->session->unset_userdata('success');
        $this->session->unset_userdata('error');
	}

	public function create()
	{
		$data['title'] = 'Manajemen Jurusan | Tambah Jurusan';

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/topbar');
		$this->load->view('dashboard/jurusan/create', $data);
		$this->load->view('layouts/footer');
	}

	public function store()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
			'required' => 'Nama harus diisi!',			
		]);		

		if ($this->form_validation->run() === false) {

			$data['title'] = 'Manajemen Jurusan | Tambah Jurusan';

			$data['nama'] = $this->input->post('nama');

			$this->load->view('layouts/header', $data);
			$this->load->view('layouts/sidebar');
			$this->load->view('layouts/topbar');
			$this->load->view('dashboard/jurusan/create', $data);
			$this->load->view('layouts/footer');
		} else {

			$nama          	= htmlspecialchars($this->input->post('nama'));

			$data = [
				'nama'         => $nama,
			];

			$this->jurusan->storeData($data);

			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Berhasil menambah jurusan!');
				redirect('jurusan');
			} else {
				$this->session->set_flashdata('error', 'Gagal menambah jurusan!');
				redirect('jurusan');
			}
		}
	}

	public function edit($id)
	{

		$data['title'] = 'Manajemen Jurusan | Update Jurusan';
		$data['jurusans'] = $this->jurusan->editData($id);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/topbar');
		$this->load->view('dashboard/jurusan/edit', $data);
		$this->load->view('layouts/footer');
	}

	public function update($id)
	{

		$this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
			'required' => 'Nama harus diisi!',			
		]);

		if ($this->form_validation->run() === false) {

			$data['title'] = 'Manajemen Jurusan | Edit Jurusan';
			$data['jurusans'] = $this->jurusan->editData($id);

			$this->load->view('layouts/header', $data);
			$this->load->view('layouts/sidebar');
			$this->load->view('layouts/topbar');
			$this->load->view('dashboard/jurusan/edit', $data);
			$this->load->view('layouts/footer');
		} else {

			$nama          	= htmlspecialchars($this->input->post('nama'));

			$data = [
				'nama'         => $nama,
			];

			$this->jurusan->updateData($id, $data);

			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Berhasil mengupdate jurusan!');
				redirect('jurusan');
			} else {
				$this->session->set_flashdata('error', 'Gagal mengupdate jurusan!');
				redirect('jurusan');
			}
		}
	}

	public function destroy($id)
	{
		$this->jurusan->destroyData($id);

		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Berhasil menghapus jurusan!');
			redirect('jurusan/index');
		} else {
			$this->session->set_flashdata('error', 'Gagal menghapus jurusan!');
			redirect('jurusan/index');
		}
	}

	public function show($id)
	{
		$data['title'] = 'Manajemen Jurusan | Detail Jurusan';
		$data['jurusans'] = $this->jurusan->showData($id);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/topbar');
		$this->load->view('dashboard/jurusan/show', $data);
		$this->load->view('layouts/footer');
	}
}
