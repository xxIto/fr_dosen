<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StatusDsn extends CI_Controller
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
		$data['title'] = 'Status Dosen';

		// Array ID jurusan yang diinginkan
		$jurusan_ids = [1, 2, 3, 4, 5, 6];

		// Mendapatkan total dosen per jurusan
		$dosen_per_jurusan = $this->dosen->countDosenPerJurusan($jurusan_ids);

		// Menginisialisasi variabel untuk setiap jurusan
		$data['sisteminformasis'] = 0;
		$data['teknikinformatikas'] = 0;
		$data['elektros'] = 0;
		$data['mesins'] = 0;
		$data['sipils'] = 0;
		$data['arsitekturs'] = 0;

		// Mengisi data berdasarkan ID jurusan
		foreach ($dosen_per_jurusan as $jurusan) {
			switch ($jurusan['id_jurusan']) {
				case 1:
					$data['sisteminformasis'] = $jurusan['total'];
					break;
				case 2:
					$data['teknikinformatikas'] = $jurusan['total'];
					break;
				case 3:
					$data['elektros'] = $jurusan['total'];
					break;
				case 4:
					$data['mesins'] = $jurusan['total'];
					break;
				case 5:
					$data['sipils'] = $jurusan['total'];
					break;
				case 6:
					$data['arsitekturs'] = $jurusan['total'];
					break;
			}
		}

		$data['dosens'] = $this->dosen->getData();
		$data['jurusan_stats'] = $this->dosen->getJurusanStatusStatistics();

		$data['total_pppk'] = $this->pppk->countTotalPPPK();
		$data['total_tendik'] = $this->tendik->countTotalTendik();
		$data['dosen_sudah_sertifikasi'] = $this->dosen->count_dosen_sudah_sertifikasi();

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/topbar');
		$this->load->view('dashboard/statusdsn/index', $data);
		$this->load->view('layouts/footer');

		$this->session->unset_userdata('success');
		$this->session->unset_userdata('error');
	}
}
