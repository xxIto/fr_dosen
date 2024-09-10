<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pppk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        isLoggedIn($this->session->userdata('id'));

        // Load models
        $this->load->model('Model_pppk', 'pppk');
        $this->load->model('Model_jurusan', 'jurusan');
        $this->load->model('Model_jabatan', 'jabatan');
        $this->load->model('Model_dosen', 'dosen'); // Memastikan model dosen di-load
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Manajemen pppk';
        $data['pppks'] = $this->pppk->getData();

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/topbar');
        $this->load->view('dashboard/pppk/index', $data);
        $this->load->view('layouts/footer');

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('error');
    }

    public function create()
    {
        $data['title'] = 'Manajemen pppk | Tambah pppk';
        $data['jurusans'] = $this->jurusan->getData();
        $data['jabatans'] = $this->jabatan->getData();
        $data['dosens'] = $this->dosen->getData(); // Menggunakan model dosen

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/topbar');
        $this->load->view('dashboard/pppk/create', $data);
        $this->load->view('layouts/footer');
    }

    public function store()
    {
        $this->form_validation->set_rules('id_dosen', 'Dosen', 'required|trim', [
            'required' => 'Dosen harus dipilih!',
        ]);

        if ($this->form_validation->run() === false) {
            $data['title'] = 'Manajemen pppk | Tambah pppk';
            $data['jurusans'] = $this->jurusan->getData();
            $data['jabatans'] = $this->jabatan->getData();
            $data['dosens'] = $this->dosen->getData(); // Menggunakan model dosen
    
            $data['id_dosen'] = $this->input->post('id_dosen');
            $data['id_jurusan'] = $this->input->post('id_jurusan');
            $data['id_jabatan'] = $this->input->post('id_jabatan');
            $data['status'] = $this->input->post('status');
            $data['status_pegawai'] = $this->input->post('status_pegawai');
            $data['tmt_pppk'] = $this->input->post('tmt_pppk');
            $data['id_jabatan_pppk'] = $this->input->post('id_jabatan_pppk');
            $data['keterangan'] = $this->input->post('keterangan');
    
            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/sidebar');
            $this->load->view('layouts/topbar');
            $this->load->view('dashboard/pppk/create', $data);
            $this->load->view('layouts/footer');
        } else {
            $data = [
                'id_dosen' => htmlspecialchars($this->input->post('id_dosen')),
                'id_jurusan' => htmlspecialchars($this->input->post('id_jurusan')),
                'id_jabatan' => htmlspecialchars($this->input->post('id_jabatan')),
                'status' => htmlspecialchars($this->input->post('status')),
                'status_pegawai' => htmlspecialchars($this->input->post('status_pegawai')),
                'tmt_pppk' => htmlspecialchars($this->input->post('tmt_pppk')),
                'id_jabatan_pppk' => htmlspecialchars($this->input->post('id_jabatan_pppk')),
                'keterangan' => htmlspecialchars($this->input->post('keterangan')),
            ];

            $this->pppk->storeData($data);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Berhasil menambah data!');
            redirect('pppk');
        } else {
            $this->session->set_flashdata('error', 'Gagal menambah data!');
            redirect('pppk/create');
        }
        }
    }
    public function edit($id)
    {
        $data['title'] = 'Manajemen pppk | Update pppk';
        $data['data'] = $this->pppk->editData($id);
        $data['jurusans'] = $this->jurusan->getData();
        $data['jabatans'] = $this->jabatan->getData();
        $data['dosens'] = $this->dosen->getData();
     

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/topbar');
        $this->load->view('dashboard/pppk/edit', $data);
        $this->load->view('layouts/footer');
    }

    public function update($id)
    {
        $this->form_validation->set_rules('id_dosen', 'Dosen', 'required|trim', [
            'required' => 'Dosen harus dipilih!',
        ]);

        if ($this->form_validation->run() === false) {
            $data['title'] = 'Manajemen pppk | Edit Data';
            $data['jurusans'] = $this->jurusan->getData();
            $data['jabatans'] = $this->jabatan->getData();
            $data['dosens'] = $this->dosen->getData();
         

            $data['data'] = $this->pppk->getDataById($id);

            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/sidebar');
            $this->load->view('layouts/topbar');
            $this->load->view('dashboard/pppk/edit', $data);
            $this->load->view('layouts/footer');
        } else {
            $data = [
              
                'id_dosen' => htmlspecialchars($this->input->post('id_dosen')),
                'id_jurusan' => htmlspecialchars($this->input->post('id_jurusan')),
                'id_jabatan' => htmlspecialchars($this->input->post('id_jabatan')),
                'status' => htmlspecialchars($this->input->post('status')),
                'status_pegawai' => htmlspecialchars($this->input->post('status_pegawai')),
                'tmt_pppk' => htmlspecialchars($this->input->post('tmt_pppk')),
                'id_jabatan_pppk' => htmlspecialchars($this->input->post('id_jabatan_pppk')),
                'keterangan' => htmlspecialchars($this->input->post('keterangan')),
            ];

            $this->pppk->updateData($id, $data);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Berhasil mengupdate data!');
                redirect('pppk');
            } else {
                $this->session->set_flashdata('error', 'Gagal mengupdate data!');
                redirect('pppk/edit/' . $id);
            }
        }
    }

    public function destroy($id)
    {
        $this->pppk->destroyData($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Berhasil menghapus pppk!');
            redirect('pppk');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus pppk!');
            redirect('pppk');
        }
    }

    public function show($id)
    {
        $data['title'] = 'Manajemen pppk | Detail pppk';
        $data['data'] = $this->pppk->showData($id);

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/topbar');
        $this->load->view('dashboard/pppk/show', $data);
        $this->load->view('layouts/footer');
    }
    
}
    
