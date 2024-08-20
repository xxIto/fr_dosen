<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tendik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        isLoggedIn($this->session->userdata('id'));

        // Load models
        $this->load->model('Model_tendik', 'tendik');
        $this->load->model('Model_jabatan', 'jabatan');
        $this->load->model('Model_pendidikan', 'pendidikan');
        $this->load->model('Model_penempatan', 'penempatan');
    }

    public function index()
    {
        $data['title'] = 'Manajemen tendik';
        $data['tendiks'] = $this->tendik->getData();

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/topbar');
        $this->load->view('dashboard/tendik/index', $data);
        $this->load->view('layouts/footer');

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('error');
    }

    public function create()
    {
        $data['title'] = 'Manajemen tendik | Tambah tendik';
        $data['jabatans'] = $this->jabatan->getData();
        $data['pendidikans'] = $this->pendidikan->getData();
        $data['penempatans'] = $this->penempatan->getData();

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/topbar');
        $this->load->view('dashboard/tendik/create', $data);
        $this->load->view('layouts/footer');
    }

    public function store()
    {
        $this->form_validation->set_rules('kode', 'Kode', 'required|trim', [
            'required' => 'Kode harus diisi!',
        ]);

        if ($this->form_validation->run() === false) {
            $data['title'] = 'Manajemen tendik | Tambah tendik';
            $data['jabatans'] = $this->jabatan->getData();
            $data['pendidikans'] = $this->pendidikan->getData();
            $data['penempatans'] = $this->penempatan->getData();

            $data['kode'] = $this->input->post('kode');
            $data['nama'] = $this->input->post('nama');
            $data['id_pendidikan'] = $this->input->post('id_pendidikan');
            $data['id_jabatan'] = $this->input->post('id_jabatan');
            $data['golongan'] = $this->input->post('golongan');
            $data['tmt'] = $this->input->post('tmt');
            $data['ket'] = $this->input->post('ket');
            $data['id_penempatan'] = $this->input->post('id_penempatan');

            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/sidebar');
            $this->load->view('layouts/topbar');
            $this->load->view('dashboard/tendik/create', $data);
            $this->load->view('layouts/footer');
        } else {
            $data = [
                'kode' => htmlspecialchars($this->input->post('kode')),
                'nama' => htmlspecialchars($this->input->post('nama')),
                'id_pendidikan' => htmlspecialchars($this->input->post('id_pendidikan')),
                'id_jabatan' => htmlspecialchars($this->input->post('id_jabatan')),
                'golongan' => htmlspecialchars($this->input->post('golongan')),
                'tmt' => htmlspecialchars($this->input->post('tmt')),
                'ket' => htmlspecialchars($this->input->post('ket')),
                'id_penempatan' => htmlspecialchars($this->input->post('id_penempatan')),
            ];

            $this->tendik->storeData($data);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Berhasil menambah data!');
                redirect('tendik');
            } else {
                $this->session->set_flashdata('error', 'Gagal menambah data!');
                redirect('tendik/create');
            }
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Manajemen tendik | Update tendik';
        $data['data'] = $this->tendik->editData($id);
        $data['jabatans'] = $this->jabatan->getData();
        $data['pendidikans'] = $this->pendidikan->getData();
        $data['penempatans'] = $this->penempatan->getData();

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/topbar');
        $this->load->view('dashboard/tendik/edit', $data);
        $this->load->view('layouts/footer');
    }

    public function update($id)
    {
        $this->form_validation->set_rules('kode', 'Kode', 'required|trim', [
            'required' => 'Kode harus diisi!',
        ]);

        if ($this->form_validation->run() === false) {
            $data['title'] = 'Manajemen tendik | Edit Data';
            $data['jabatans'] = $this->jabatan->getData();
            $data['pendidikans'] = $this->pendidikan->getData();
            $data['penempatans'] = $this->penempatan->getData();
            $data['data'] = $this->tendik->getDataById($id);

            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/sidebar');
            $this->load->view('layouts/topbar');
            $this->load->view('dashboard/tendik/edit', $data);
            $this->load->view('layouts/footer');
        } else {
            $data = [
                'kode' => htmlspecialchars($this->input->post('kode')),
                'nama' => htmlspecialchars($this->input->post('nama')),
                'id_pendidikan' => htmlspecialchars($this->input->post('id_pendidikan')),
                'id_jabatan' => htmlspecialchars($this->input->post('id_jabatan')),
                'golongan' => htmlspecialchars($this->input->post('golongan')),
                'tmt' => htmlspecialchars($this->input->post('tmt')),
                'ket' => htmlspecialchars($this->input->post('ket')),
                'id_penempatan' => htmlspecialchars($this->input->post('id_penempatan')),
            ];

            $this->tendik->updateData($id, $data);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Berhasil mengupdate data!');
                redirect('tendik');
            } else {
                $this->session->set_flashdata('error', 'Gagal mengupdate data!');
                redirect('tendik/edit/' . $id);
            }
        }
    }

    public function destroy($id)
    {
        $this->tendik->destroyData($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Berhasil menghapus tendik!');
            redirect('tendik');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus tendik!');
            redirect('tendik');
        }
    }

    public function show($id)
    {
        $data['title'] = 'Manajemen tendik | Detail tendik';
        $data['data'] = $this->tendik->showData($id);

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/topbar');
        $this->load->view('dashboard/tendik/show', $data);
        $this->load->view('layouts/footer');
    }
}
