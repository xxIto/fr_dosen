<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StatusDsn extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        isLoggedIn($this->session->userdata('id'));
        $this->load->model('Model_dosen', 'dosen');
    }

    public function index()
{
    $data['title'] = 'Status Dosen';
    $data['dosens'] = $this->dosen->getData();
    $data['jurusan_stats'] = $this->dosen->getJurusanStatusStatistics();

    $this->load->view('layouts/header', $data);
    $this->load->view('layouts/sidebar');
    $this->load->view('layouts/topbar');
    $this->load->view('dashboard/statusdsn/index', $data);
    $this->load->view('layouts/footer');

    $this->session->unset_userdata('success');
    $this->session->unset_userdata('error');
}

}
