<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tubel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        isLoggedIn($this->session->userdata('id'));

        // Load models
        $this->load->model('Model_tubel', 'tubel');
        $this->load->model('Model_jurusan', 'jurusan');
        $this->load->model('Model_jabatan', 'jabatan');
        $this->load->model('Model_dosen', 'dosen'); // Memastikan model dosen di-load
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Manajemen Tubel';
        $data['tubels'] = $this->tubel->getData();

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/topbar');
        $this->load->view('dashboard/tubel/index', $data);
        $this->load->view('layouts/footer');

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('error');
    }

    public function create()
    {
        $data['title'] = 'Manajemen Tubel | Tambah Tubel';
        $data['jurusans'] = $this->jurusan->getData();
        $data['jabatans'] = $this->jabatan->getData();
        $data['dosens'] = $this->dosen->getData(); // Menggunakan model dosen

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/topbar');
        $this->load->view('dashboard/tubel/create', $data);
        $this->load->view('layouts/footer');
    }

    public function store()
    {
        $this->form_validation->set_rules('id_dosen', 'Dosen', 'required|trim', [
            'required' => 'Dosen harus dipilih!',
        ]);

        if ($this->form_validation->run() === false) {
            $data['title'] = 'Manajemen Tubel | Tambah Tubel';
            $data['jurusans'] = $this->jurusan->getData();
            $data['jabatans'] = $this->jabatan->getData();
            $data['dosens'] = $this->dosen->getData(); // Menggunakan model dosen
    
            $data['id_dosen'] = $this->input->post('id_dosen');
            $data['id_jurusan'] = $this->input->post('id_jurusan');
            $data['id_jabatan'] = $this->input->post('id_jabatan');
            $data['no_sk'] = $this->input->post('no_sk');
            $data['mulai_tubel'] = $this->input->post('mulai_tubel');
            $data['univ_tubel'] = $this->input->post('univ_tubel');
            $data['status_pegawai'] = $this->input->post('status_pegawai');
    
            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/sidebar');
            $this->load->view('layouts/topbar');
            $this->load->view('dashboard/tubel/create', $data);
            $this->load->view('layouts/footer');
        } else {
            $data = [
                'id_dosen' => htmlspecialchars($this->input->post('id_dosen')),
                'id_jurusan' => htmlspecialchars($this->input->post('id_jurusan')),
                'id_jabatan' => htmlspecialchars($this->input->post('id_jabatan')),
                'no_sk' => htmlspecialchars($this->input->post('no_sk')),
                'mulai_tubel' => htmlspecialchars($this->input->post('mulai_tubel')),
                'univ_tubel' => htmlspecialchars($this->input->post('univ_tubel')),
                'status_pegawai' => htmlspecialchars($this->input->post('status_pegawai')),
            ];

            $this->tubel->storeData($data);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Berhasil menambah data!');
            redirect('tubel');
        } else {
            $this->session->set_flashdata('error', 'Gagal menambah data!');
            redirect('tubel/create');
        }
        }
    }
    public function edit($id)
    {
        $data['title'] = 'Manajemen Tubel | Update Tubel';
        $data['data'] = $this->tubel->editData($id);
        $data['jurusans'] = $this->jurusan->getData();
        $data['jabatans'] = $this->jabatan->getData();
        $data['dosens'] = $this->dosen->getData();
     

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/topbar');
        $this->load->view('dashboard/tubel/edit', $data);
        $this->load->view('layouts/footer');
    }

    public function update($id)
    {
        $this->form_validation->set_rules('id_dosen', 'Dosen', 'required|trim', [
            'required' => 'Dosen harus dipilih!',
        ]);

        if ($this->form_validation->run() === false) {
            $data['title'] = 'Manajemen Tubel | Edit Data';
            $data['jurusans'] = $this->jurusan->getData();
            $data['jabatans'] = $this->jabatan->getData();
            $data['dosens'] = $this->dosen->getData();
         

            $data['data'] = $this->tubel->getDataById($id);

            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/sidebar');
            $this->load->view('layouts/topbar');
            $this->load->view('dashboard/tubel/edit', $data);
            $this->load->view('layouts/footer');
        } else {
            $data = [
              
                'id_dosen' => htmlspecialchars($this->input->post('id_dosen')),
                'id_jurusan' => htmlspecialchars($this->input->post('id_jurusan')),
                'id_jabatan' => htmlspecialchars($this->input->post('id_jabatan')),
                'no_sk' => htmlspecialchars($this->input->post('no_sk')),
                'mulai_tubel' => htmlspecialchars($this->input->post('mulai_tubel')),
                'univ_tubel' => htmlspecialchars($this->input->post('univ_tubel')),
                'status_pegawai' => htmlspecialchars($this->input->post('status_pegawai')),
              
            ];

            $this->tubel->updateData($id, $data);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Berhasil mengupdate data!');
                redirect('tubel');
            } else {
                $this->session->set_flashdata('error', 'Gagal mengupdate data!');
                redirect('tubel/edit/' . $id);
            }
        }
    }

    public function destroy($id)
    {
        $this->tubel->destroyData($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Berhasil menghapus tubel!');
            redirect('tubel');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus tubel!');
            redirect('tubel');
        }
    }

    public function show($id)
    {
        $data['title'] = 'Manajemen Tubel | Detail Tubel';
        $data['data'] = $this->tubel->showData($id);

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/topbar');
        $this->load->view('dashboard/tubel/show', $data);
        $this->load->view('layouts/footer');
    }
    
}
    
