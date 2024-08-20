<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penempatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        isLoggedIn($this->session->userdata('id'));
    }

    public function index()
    {
        $data['title'] = 'Manajemen Penempatan';
        $data['penempatans'] = $this->penempatan->getData();

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/topbar');
        $this->load->view('dashboard/penempatan/index', $data);
        $this->load->view('layouts/footer');

        // Unset flashdata after it has been displayed
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('error');
    }

    public function create()
    {
        $data['title'] = 'Manajemen Penempatan | Tambah Penempatan';

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/topbar');
        $this->load->view('dashboard/penempatan/create', $data);
        $this->load->view('layouts/footer');
    }

    public function store()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama harus diisi!',
        ]);

        if ($this->form_validation->run() === false) {
            $this->create();
        } else {
            $nama = htmlspecialchars($this->input->post('nama'));

            $data = [
                'nama' => $nama,
            ];

            $this->penempatan->storeData($data);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Berhasil menambah penempatan!');
            } else {
                $this->session->set_flashdata('error', 'Gagal menambah penempatan!');
            }
            redirect('penempatan');
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Manajemen Penempatan | Update Penempatan';
        $data['penempatans'] = $this->penempatan->editData($id);

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/topbar');
        $this->load->view('dashboard/penempatan/edit', $data);
        $this->load->view('layouts/footer');
    }

    public function update($id)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama harus diisi!',
        ]);

        if ($this->form_validation->run() === false) {
            $this->edit($id);
        } else {
            $nama = htmlspecialchars($this->input->post('nama'));

            $data = [
                'nama' => $nama,
            ];

            $this->penempatan->updateData($id, $data);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Berhasil mengupdate penempatan!');
            } else {
                $this->session->set_flashdata('error', 'Gagal mengupdate penempatan!');
            }
            redirect('penempatan');
        }
    }

    public function destroy($id)
    {
        $this->penempatan->destroyData($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Berhasil menghapus penempatan!');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus penempatan!');
        }
        redirect('penempatan');
    }

    public function show($id)
    {
        $data['title'] = 'Manajemen Penempatan | Detail Penempatan';
        $data['penempatans'] = $this->penempatan->showData($id);

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/topbar');
        $this->load->view('dashboard/penempatan/show', $data);
        $this->load->view('layouts/footer');
    }
}
