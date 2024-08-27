<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        isLoggedIn($this->session->userdata('id'));
    }

    public function index()
    {
        $data['title'] = 'Manajemen Dosen';
        $data['dosens'] = $this->dosen->getData();

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/topbar');
        $this->load->view('dashboard/dosen/index', $data);
        $this->load->view('layouts/footer');

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('error');
    }

    public function create()
    {
        $data['title'] = 'Manajemen Dosen | Tambah Dosen';

        $data['jurusans'] = $this->jurusan->getData();
        $data['jabatans'] = $this->jabatan->getData();
        $data['pendidikans'] = $this->pendidikan->getData();
       

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/topbar');
        $this->load->view('dashboard/dosen/create', $data);
        $this->load->view('layouts/footer');
    }

    public function store()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama harus diisi!',
        ]);

        if ($this->form_validation->run() === false) {
            $data['title'] = 'Manajemen Dosen | Tambah Dosen';
            $data['jurusans'] = $this->jurusan->getData();
            $data['jabatans'] = $this->jabatan->getData();
            $data['pendidikans'] = $this->pendidikan->getData();
          

            $data['email'] = $this->input->post('email');
            $data['nama'] = $this->input->post('nama');
            $data['nidn'] = $this->input->post('nidn');
            $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
            $data['id_jurusan'] = $this->input->post('id_jurusan');
            $data['id_jabatan'] = $this->input->post('id_jabatan');
            $data['tmt'] = $this->input->post('tmt');
            $data['tmt_golongan'] = $this->input->post('tmt_golongan');
            $data['no_sk'] = $this->input->post('no_sk');
            $data['tahun'] = $this->input->post('tahun');
            $data['dok_pak'] = $this->input->post('dok_pak');
            $data['id_pendidikan'] = $this->input->post('id_pendidikan');
            $data['status'] = $this->input->post('status');
            $data['status_sertifikasi'] = $this->input->post('status_sertifikasi');
            $data['profesi'] = $this->input->post('profesi');
            $data['status_pegawai'] = $this->input->post('status_pegawai');
          

            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/sidebar');
            $this->load->view('layouts/topbar');
            $this->load->view('dashboard/dosen/create', $data);
            $this->load->view('layouts/footer');
        } else {
            $data = [
                'email' => htmlspecialchars($this->input->post('email')),
                'nidn' => htmlspecialchars($this->input->post('nidn')),
                'nama' => htmlspecialchars($this->input->post('nama')),
                'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin')),
                'id_jurusan' => htmlspecialchars($this->input->post('id_jurusan')),
                'id_jabatan' => htmlspecialchars($this->input->post('id_jabatan')),
                'tmt' => htmlspecialchars($this->input->post('tmt')),
                'tmt_golongan' => htmlspecialchars($this->input->post('tmt_golongan')),
                'no_sk' => htmlspecialchars($this->input->post('no_sk')),
                'tahun' => htmlspecialchars($this->input->post('tahun')),
                'dok_pak' => htmlspecialchars($this->input->post('dok_pak')),
                'id_pendidikan' => htmlspecialchars($this->input->post('id_pendidikan')),
                'status' => htmlspecialchars($this->input->post('status')),
                'status_sertifikasi' => htmlspecialchars($this->input->post('status_sertifikasi')),
                'profesi' => htmlspecialchars($this->input->post('profesi')),
                'status_pegawai' => htmlspecialchars($this->input->post('status_pegawai')),
              
            ];

            $this->dosen->storeData($data);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Berhasil menambah data!');
                redirect('dosen');
            } else {
                $this->session->set_flashdata('error', 'Gagal menambah data!');
                redirect('dosen/create');
            }
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Manajemen Dosen | Update Dosen';
        $data['data'] = $this->dosen->editData($id);
        $data['jurusans'] = $this->jurusan->getData();
        $data['jabatans'] = $this->jabatan->getData();
        $data['pendidikans'] = $this->pendidikan->getData();
     

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/topbar');
        $this->load->view('dashboard/dosen/edit', $data);
        $this->load->view('layouts/footer');
    }

    public function update($id)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama harus diisi!',
        ]);

        if ($this->form_validation->run() === false) {
            $data['title'] = 'Manajemen Dosen | Edit Data';
            $data['jurusans'] = $this->jurusan->getData();
            $data['jabatans'] = $this->jabatan->getData();
            $data['pendidikans'] = $this->pendidikan->getData();
         

            $data['data'] = $this->dosen->getDataById($id);

            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/sidebar');
            $this->load->view('layouts/topbar');
            $this->load->view('dashboard/dosen/edit', $data);
            $this->load->view('layouts/footer');
        } else {
            $data = [
                'email' => htmlspecialchars($this->input->post('email')),
                'nidn' => htmlspecialchars($this->input->post('nidn')),
                'nama' => htmlspecialchars($this->input->post('nama')),
                'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin')),
                'id_jurusan' => htmlspecialchars($this->input->post('id_jurusan')),
                'id_jabatan' => htmlspecialchars($this->input->post('id_jabatan')),
                'tmt' => htmlspecialchars($this->input->post('tmt')),
                'tmt_golongan' => htmlspecialchars($this->input->post('tmt_golongan')),
                'no_sk' => htmlspecialchars($this->input->post('no_sk')),
                'tahun' => htmlspecialchars($this->input->post('tahun')),
                'dok_pak' => htmlspecialchars($this->input->post('dok_pak')),
                'id_pendidikan' => htmlspecialchars($this->input->post('id_pendidikan')),
                'status' => htmlspecialchars($this->input->post('status')),
                'status_sertifikasi' => htmlspecialchars($this->input->post('status_sertifikasi')),
                'profesi' => htmlspecialchars($this->input->post('profesi')),
                'status_pegawai' => htmlspecialchars($this->input->post('status_pegawai')),
              
            ];

            $this->dosen->updateData($id, $data);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Berhasil mengupdate data!');
                redirect('dosen');
            } else {
                $this->session->set_flashdata('error', 'Gagal mengupdate data!');
                redirect('dosen/edit/' . $id);
            }
        }
    }

    public function destroy($id)
    {
        $this->dosen->destroyData($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Berhasil menghapus dosen!');
            redirect('dosen');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus dosen!');
            redirect('dosen');
        }
    }

    public function show($id)
    {
        $data['title'] = 'Manajemen Dosen | Detail Dosen';
        $data['data'] = $this->dosen->showData($id);

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/topbar');
        $this->load->view('dashboard/dosen/show', $data);
        $this->load->view('layouts/footer');
    }
    
}
