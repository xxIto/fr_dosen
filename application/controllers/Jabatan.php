<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jabatan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		isLoggedIn($this->session->userdata('id'));
	}

	public function index()
	{
		$data['title'] = 'Manajemen Jabatan';
		$data['jabatans'] = $this->jabatan->getData();

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/topbar');
		$this->load->view('dashboard/jabatan/index', $data);
		$this->load->view('layouts/footer');

		$this->session->unset_userdata('success');
        $this->session->unset_userdata('error');
	}

	public function create()
	{
		$data['title'] = 'Manajemen Jabatan | Tambah Jabatan';

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/topbar');
		$this->load->view('dashboard/jabatan/create', $data);
		$this->load->view('layouts/footer');
	}

	public function store()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
			'required' => 'Nama harus diisi!',			
		]);		

		if ($this->form_validation->run() === false) {

			$data['title'] = 'Manajemen Jabatan | Tambah Jabatan';

			$data['nama'] = $this->input->post('nama');

			$this->load->view('layouts/header', $data);
			$this->load->view('layouts/sidebar');
			$this->load->view('layouts/topbar');
			$this->load->view('dashboard/jabatan/create', $data);
			$this->load->view('layouts/footer');
		} else {

			$nama          	= htmlspecialchars($this->input->post('nama'));

			$data = [
				'nama'         => $nama,
			];

			$this->jabatan->storeData($data);

			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Berhasil menambah jabatan!');
				redirect('jabatan');
			} else {
				$this->session->set_flashdata('error', 'Gagal menambah jabatan!');
				redirect('jabatan');
			}
		}
	}

	public function edit($id)
	{

		$data['title'] = 'Manajemen Jabatan | Update Jabatan';
		$data['jabatans'] = $this->jabatan->editData($id);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/topbar');
		$this->load->view('dashboard/jabatan/edit', $data);
		$this->load->view('layouts/footer');
	}

	public function update($id)
	{

		$this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
			'required' => 'Nama harus diisi!',			
		]);

		if ($this->form_validation->run() === false) {

			$data['title'] = 'Manajemen Jabatan | Edit Jabatan';
			$data['jabatans'] = $this->jabatan->editData($id);

			$this->load->view('layouts/header', $data);
			$this->load->view('layouts/sidebar');
			$this->load->view('layouts/topbar');
			$this->load->view('dashboard/jabatan/edit', $data);
			$this->load->view('layouts/footer');
		} else {

			$nama          	= htmlspecialchars($this->input->post('nama'));

			$data = [
				'nama'         => $nama,
			];

			$this->jabatan->updateData($id, $data);

			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Berhasil mengupdate jabatan!');
				redirect('jabatan');
			} else {
				$this->session->set_flashdata('error', 'Gagal mengupdate jabatan!');
				redirect('jabatan');
			}
		}
	}

	public function destroy($id)
	{
		$this->jabatan->destroyData($id);

		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Berhasil menghapus jabatan!');
			redirect('jabatan/index');
		} else {
			$this->session->set_flashdata('error', 'Gagal menghapus jabatan!');
			redirect('jabatan/index');
		}
	}

	public function show($id)
	{
		$data['title'] = 'Manajemen Jabatan | Detail Jabatan';
		$data['jabatans'] = $this->jabatan->showData($id);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/topbar');
		$this->load->view('dashboard/jabatan/show', $data);
		$this->load->view('layouts/footer');
	}
}
