<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		isLoggedIn($this->session->userdata('id'));
		$this->load->model('Model_dosen', 'dosen');
	}

	public function index()
	{
		$data['title'] = 'Sistem Informasi Dosen';

		$data['total_dosen'] = $this->dosen->getTotalDosen();
		$data['status_pegawai_stats'] = $this->dosen->getStatusPegawaiStatistics();
		$data['jurusan_stats'] = $this->dosen->getJurusanStatusStatistics();

		// Kirim data ke view
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/topbar');
		$this->load->view('dashboard/index', $data);
		$this->load->view('layouts/footer');
	}
}
