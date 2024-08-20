<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		isLoggedIn($this->session->userdata('id'));
		$this->load->model('Model_dosen', 'dosen');
		$this->load->model('Model_pppk', 'pppk');
		$this->load->model('Model_tendik', 'tendik');
		$this->load->model('Model_jabatan', 'jabatan');
	}

	public function index()
	{
		$data['title'] = 'Sistem Informasi Dosen';

		$data['total_dosen'] = $this->dosen->getTotalDosen();
		$data['status_pegawai_stats'] = $this->dosen->getStatusPegawaiStatistics();
		$data['jurusan_stats'] = $this->dosen->getJurusanStatusStatistics();
		$data['dosen_sudah_sertifikasi'] = $this->dosen->count_dosen_sudah_sertifikasi();
		$data['total_pppk'] = $this->pppk->countTotalPPPK();
		$data['total_tendik'] = $this->tendik->countTotalTendik();
		$data['dosen_by_jabatan'] = $this->dosen->count_dosen_by_jabatan();
		$data['status_sertifikasi_jurusan'] = $this->dosen->getStatusSertifikasiByJurusan();

		// Kirim data ke view
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/topbar');
		$this->load->view('dashboard/index', $data);
		$this->load->view('layouts/footer');
	}
}
