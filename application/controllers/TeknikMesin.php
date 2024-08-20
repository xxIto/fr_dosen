<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TeknikMesin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        isLoggedIn($this->session->userdata('id'));
        $this->load->model('Model_teknikmesin', 'teknikmesin');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Teknik Mesin';
        $data['teknikmesins'] = $this->teknikmesin->getData();

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/topbar');
        $this->load->view('dashboard/teknikmesin/index', $data);
        $this->load->view('layouts/footer');

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('error');
    }

    public function create()
    {
        $data['title'] = 'Teknik mesin | Tambah Teknik mesin';
     
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/topbar');
        $this->load->view('dashboard/teknikmesin/create', $data);
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
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048; // 2MB
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('teknikmesin/create');
            } else {
                $fileData = $this->upload->data();
                $foto = $fileData['file_name'];

                $data = [
                    'foto' => $foto,
                    'nomor' => htmlspecialchars($this->input->post('nomor')),
                    'tanggal' => htmlspecialchars($this->input->post('tanggal')),
        'nama' => htmlspecialchars($this->input->post('nama')),
        'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin')),
        'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir')),
        'agama' => htmlspecialchars($this->input->post('agama')),
        'alamat' => htmlspecialchars($this->input->post('alamat')),
        'no_hp' => htmlspecialchars($this->input->post('no_hp')),
        'no_rumah' => htmlspecialchars($this->input->post('no_rumah')),

        // Pendidikan
        'asal_sd' => htmlspecialchars($this->input->post('asal_sd')),
        'tanggal_sd' => htmlspecialchars($this->input->post('tanggal_sd')),
        'noijasah_sd' => htmlspecialchars($this->input->post('noijasah_sd')),
        'asal_sltp' => htmlspecialchars($this->input->post('asal_sltp')),
        'tanggal_sltp' => htmlspecialchars($this->input->post('tanggal_sltp')),
        'noijasah_sltp' => htmlspecialchars($this->input->post('noijasah_sltp')),
        'asal_slta' => htmlspecialchars($this->input->post('asal_slta')),
        'tanggal_slta' => htmlspecialchars($this->input->post('tanggal_slta')),
        'noijasah_slta' => htmlspecialchars($this->input->post('noijasah_slta')),
        'kualifikasi_d3' => htmlspecialchars($this->input->post('kualifikasi_d3')),
        'universitas_d3' => htmlspecialchars($this->input->post('universitas_d3')),
        'tanggal_d3' => htmlspecialchars($this->input->post('tanggal_d3')),
        'noijasah_d3' => htmlspecialchars($this->input->post('noijasah_d3')),
        'gelar_d3' => htmlspecialchars($this->input->post('gelar_d3')),
        'kualifikasi_s1' => htmlspecialchars($this->input->post('kualifikasi_s1')),
        'universitas_s1' => htmlspecialchars($this->input->post('universitas_s1')),
        'tanggal_s1' => htmlspecialchars($this->input->post('tanggal_s1')),
        'noijasah_s1' => htmlspecialchars($this->input->post('noijasah_s1')),
        'gelar_s1' => htmlspecialchars($this->input->post('gelar_s1')),
        'kualifikasi_s2' => htmlspecialchars($this->input->post('kualifikasi_s2')),
        'universitas_s2' => htmlspecialchars($this->input->post('universitas_s2')),
        'tanggal_s2' => htmlspecialchars($this->input->post('tanggal_s2')),
        'noijasah_s2' => htmlspecialchars($this->input->post('noijasah_s2')),
        'gelar_s2' => htmlspecialchars($this->input->post('gelar_s2')),
        'kualifikasi_s3' => htmlspecialchars($this->input->post('kualifikasi_s3')),
        'universitas_s3' => htmlspecialchars($this->input->post('universitas_s3')),
        'tanggal_s3' => htmlspecialchars($this->input->post('tanggal_s3')),
        'noijasah_s3' => htmlspecialchars($this->input->post('noijasah_s3')),
        'gelar_s3' => htmlspecialchars($this->input->post('gelar_s3')),

        // Sertifikat
        'sertifikat_formal' => htmlspecialchars($this->input->post('sertifikat_formal')),
        'sertifikat_nonformal' => htmlspecialchars($this->input->post('sertifikat_nonformal')),

        // CPNS
        'sk_cpns' => htmlspecialchars($this->input->post('sk_cpns')),
        'tmt_cpns' => htmlspecialchars($this->input->post('tmt_cpns')),
        'pejabat_cpns' => htmlspecialchars($this->input->post('pejabat_cpns')),
        'spmt_cpns' => htmlspecialchars($this->input->post('spmt_cpns')),
        'tglspmt_cpns' => htmlspecialchars($this->input->post('tglspmt_cpns')),
        'sttpl_cpns' => htmlspecialchars($this->input->post('sttpl_cpns')),
        'tglsttpl_cpns' => htmlspecialchars($this->input->post('tglsttpl_cpns')),

        // PNS
        'sk_pns' => htmlspecialchars($this->input->post('sk_pns')),
        'tmt_pns' => htmlspecialchars($this->input->post('tmt_pns')),
        'pejabat_pns' => htmlspecialchars($this->input->post('pejabat_pns')),
        'karis_pns' => htmlspecialchars($this->input->post('karis_pns')),
        'taspen_pns' => htmlspecialchars($this->input->post('taspen_pns')),
        'karpeg_pns' => htmlspecialchars($this->input->post('karpeg_pns')),

        // Dosen Tetap
        'sk_dostap' => htmlspecialchars($this->input->post('sk_dostap')),
        'tmt_dostap' => htmlspecialchars($this->input->post('tmt_dostap')),
        'pejabat_dostap' => htmlspecialchars($this->input->post('pejabat_dostap')),

        // Dosen Kontrak
        'sk_dostrak' => htmlspecialchars($this->input->post('sk_dostrak')),
        'tmt_dostrak' => htmlspecialchars($this->input->post('tmt_dostrak')),
        'pejabat_dostrak' => htmlspecialchars($this->input->post('pejabat_dostrak')),

        // Pegawai Tetap
        'sk_petap' => htmlspecialchars($this->input->post('sk_petap')),
        'tmt_petap' => htmlspecialchars($this->input->post('tmt_petap')),
        'pejabat_petap' => htmlspecialchars($this->input->post('pejabat_petap')),

        // Pegawai Kontrak
        'sk_petrak' => htmlspecialchars($this->input->post('sk_petrak')),
        'tmt_petrak' => htmlspecialchars($this->input->post('tmt_petrak')),
        'pejabat_petrak' => htmlspecialchars($this->input->post('pejabat_petrak')),

        // Nomor Identitas
        'nip' => htmlspecialchars($this->input->post('nip')),
        'nidn' => htmlspecialchars($this->input->post('nidn')),
        'nik' => htmlspecialchars($this->input->post('nik')),

        // Asisten Ahli/III.a (100)
        'total_ak1' => htmlspecialchars($this->input->post('total_ak1')),
        'tmt1' => htmlspecialchars($this->input->post('tmt1')),
        'no_sk1' => htmlspecialchars($this->input->post('no_sk1')),

        // Asisten Ahli/III.b (150)
        'total_ak2' => htmlspecialchars($this->input->post('total_ak2')),
        'tmt2' => htmlspecialchars($this->input->post('tmt2')),
        'no_sk2' => htmlspecialchars($this->input->post('no_sk2')),

        // Lektor/III.c (200)
        'total_ak3' => htmlspecialchars($this->input->post('total_ak3')),
        'tmt3' => htmlspecialchars($this->input->post('tmt3')),
        'no_sk3' => htmlspecialchars($this->input->post('no_sk3')),

        // Lektor/III.d (300)
        'total_ak4' => htmlspecialchars($this->input->post('total_ak4')),
        'tmt4' => htmlspecialchars($this->input->post('tmt4')),
        'no_sk4' => htmlspecialchars($this->input->post('no_sk4')),

        // Lektor Kepala/IV.a (400)
        'total_ak5' => htmlspecialchars($this->input->post('total_ak5')),
        'tmt5' => htmlspecialchars($this->input->post('tmt5')),
        'no_sk5' => htmlspecialchars($this->input->post('no_sk5')),

        // Lektor Kepala/IV.b (550)
        'total_ak6' => htmlspecialchars($this->input->post('total_ak6')),
        'tmt6' => htmlspecialchars($this->input->post('tmt6')),
        'no_sk6' => htmlspecialchars($this->input->post('no_sk6')),

        // Penata Muda/III.a
        'tmt7' => htmlspecialchars($this->input->post('tmt7')),
        'no_sk7' => htmlspecialchars($this->input->post('no_sk7')),
        'tgl_sk7' => htmlspecialchars($this->input->post('tgl_sk7')),
        'bkn_sk7' => htmlspecialchars($this->input->post('bkn_sk7')),
        'tglbkn_sk7' => htmlspecialchars($this->input->post('tglbkn_sk7')),
        'jenis_pangkat7' => htmlspecialchars($this->input->post('jenis_pangkat7')),

        // Penata Muda Tk.I/III.b
        'tmt8' => htmlspecialchars($this->input->post('tmt8')),
        'no_sk8' => htmlspecialchars($this->input->post('no_sk8')),
        'tgl_sk8' => htmlspecialchars($this->input->post('tgl_sk8')),
        'bkn_sk8' => htmlspecialchars($this->input->post('bkn_sk8')),
        'tglbkn_sk8' => htmlspecialchars($this->input->post('tglbkn_sk8')),
        'jenis_pangkat8' => htmlspecialchars($this->input->post('jenis_pangkat8')),

        // Penata/III.c
        'tmt9' => htmlspecialchars($this->input->post('tmt9')),
        'no_sk9' => htmlspecialchars($this->input->post('no_sk9')),
        'tgl_sk9' => htmlspecialchars($this->input->post('tgl_sk9')),
        'bkn_sk9' => htmlspecialchars($this->input->post('bkn_sk9')),
        'tglbkn_sk9' => htmlspecialchars($this->input->post('tglbkn_sk9')),
        'jenis_pangkat9' => htmlspecialchars($this->input->post('jenis_pangkat9')),

        // Penata Tk.I/III.d
        'tmt10' => htmlspecialchars($this->input->post('tmt10')),
        'no_sk10' => htmlspecialchars($this->input->post('no_sk10')),
        'tgl_sk10' => htmlspecialchars($this->input->post('tgl_sk10')),
        'bkn_sk10' => htmlspecialchars($this->input->post('bkn_sk10')),
        'tglbkn_sk10' => htmlspecialchars($this->input->post('tglbkn_sk10')),
        'jenis_pangkat10' => htmlspecialchars($this->input->post('jenis_pangkat10')),

        // Pembina/IV.a
        'tmt11' => htmlspecialchars($this->input->post('tmt11')),
        'no_sk11' => htmlspecialchars($this->input->post('no_sk11')),
        'tgl_sk11' => htmlspecialchars($this->input->post('tgl_sk11')),
        'bkn_sk11' => htmlspecialchars($this->input->post('bkn_sk11')),
        'tglbkn_sk11' => htmlspecialchars($this->input->post('tglbkn_sk11')),
        'jenis_pangkat11' => htmlspecialchars($this->input->post('jenis_pangkat11')),

        // Pembina Tk.I/IV.b
        'tmt12' => htmlspecialchars($this->input->post('tmt12')),
        'no_sk12' => htmlspecialchars($this->input->post('no_sk12')),
        'tgl_sk12' => htmlspecialchars($this->input->post('tgl_sk12')),
        'bkn_sk12' => htmlspecialchars($this->input->post('bkn_sk12')),
        'tglbkn_sk12' => htmlspecialchars($this->input->post('tglbkn_sk12')),
        'jenis_pangkat12' => htmlspecialchars($this->input->post('jenis_pangkat12')),

        // Status Kawin
        'status_kawin' => htmlspecialchars($this->input->post('status_kawin')),

        // Keluarga
        'nama_ayah' => htmlspecialchars($this->input->post('nama_ayah')),
        'nama_ibu' => htmlspecialchars($this->input->post('nama_ibu')),
        'nama_pasangan' => htmlspecialchars($this->input->post('nama_pasangan')),
        'nama_anak' => htmlspecialchars($this->input->post('nama_anak')),

        // Lainnya
        'npwp' => htmlspecialchars($this->input->post('npwp')),
        'nomor_rekening' => htmlspecialchars($this->input->post('nomor_rekening')),
        'nama_kartu' => htmlspecialchars($this->input->post('nama_kartu')),
        'nomor_kartu' => htmlspecialchars($this->input->post('nomor_kartu')),
        'gol_darah' => htmlspecialchars($this->input->post('gol_darah')),
        'status_pegawai' => htmlspecialchars($this->input->post('status_pegawai')),
        'dosen_pns' => htmlspecialchars($this->input->post('dosen_pns')),
        'dosen_tetap' => htmlspecialchars($this->input->post('dosen_tetap')),
        'dosen_kontrak' => htmlspecialchars($this->input->post('dosen_kontrak')),
        'tendik_pns' => htmlspecialchars($this->input->post('tendik_pns')),
        'tendik_tetap' => htmlspecialchars($this->input->post('tendik_tetap')),
        'tendik_kontrak' => htmlspecialchars($this->input->post('tendik_kontrak')),
              
            ];

            $this->teknikmesin->storeData($data);

                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Berhasil menambah data!');
                    redirect('teknikmesin');
                } else {
                    $this->session->set_flashdata('error', 'Gagal menambah data!');
                    redirect('teknikmesin/create');
                }
            }
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Teknik mesin | Update Teknik mesin';
        $data['data'] = $this->teknikmesin->editData($id);

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/topbar');
        $this->load->view('dashboard/teknikmesin/edit', $data);
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
            if (!empty($_FILES['foto']['name'])) {
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size'] = 5048; // 2MB
                $config['encrypt_name'] = TRUE;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('foto')) {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('teknikmesin/edit/' . $id);
                } else {
                    $fileData = $this->upload->data();
                    $foto = $fileData['file_name'];
                }
            } else {
                $foto = $this->input->post('old_foto');
            }

            $data = [

                'foto' => $foto,
                'nomor' => htmlspecialchars($this->input->post('nomor')),
                'tanggal' => htmlspecialchars($this->input->post('tanggal')),
        'nama' => htmlspecialchars($this->input->post('nama')),
        'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin')),
        'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir')),
        'agama' => htmlspecialchars($this->input->post('agama')),
        'alamat' => htmlspecialchars($this->input->post('alamat')),
        'no_hp' => htmlspecialchars($this->input->post('no_hp')),
        'no_rumah' => htmlspecialchars($this->input->post('no_rumah')),

        // Pendidikan
        'asal_sd' => htmlspecialchars($this->input->post('asal_sd')),
        'tanggal_sd' => htmlspecialchars($this->input->post('tanggal_sd')),
        'noijasah_sd' => htmlspecialchars($this->input->post('noijasah_sd')),
        'asal_sltp' => htmlspecialchars($this->input->post('asal_sltp')),
        'tanggal_sltp' => htmlspecialchars($this->input->post('tanggal_sltp')),
        'noijasah_sltp' => htmlspecialchars($this->input->post('noijasah_sltp')),
        'asal_slta' => htmlspecialchars($this->input->post('asal_slta')),
        'tanggal_slta' => htmlspecialchars($this->input->post('tanggal_slta')),
        'noijasah_slta' => htmlspecialchars($this->input->post('noijasah_slta')),
        'kualifikasi_d3' => htmlspecialchars($this->input->post('kualifikasi_d3')),
        'universitas_d3' => htmlspecialchars($this->input->post('universitas_d3')),
        'tanggal_d3' => htmlspecialchars($this->input->post('tanggal_d3')),
        'noijasah_d3' => htmlspecialchars($this->input->post('noijasah_d3')),
        'gelar_d3' => htmlspecialchars($this->input->post('gelar_d3')),
        'kualifikasi_s1' => htmlspecialchars($this->input->post('kualifikasi_s1')),
        'universitas_s1' => htmlspecialchars($this->input->post('universitas_s1')),
        'tanggal_s1' => htmlspecialchars($this->input->post('tanggal_s1')),
        'noijasah_s1' => htmlspecialchars($this->input->post('noijasah_s1')),
        'gelar_s1' => htmlspecialchars($this->input->post('gelar_s1')),
        'kualifikasi_s2' => htmlspecialchars($this->input->post('kualifikasi_s2')),
        'universitas_s2' => htmlspecialchars($this->input->post('universitas_s2')),
        'tanggal_s2' => htmlspecialchars($this->input->post('tanggal_s2')),
        'noijasah_s2' => htmlspecialchars($this->input->post('noijasah_s2')),
        'gelar_s2' => htmlspecialchars($this->input->post('gelar_s2')),
        'kualifikasi_s3' => htmlspecialchars($this->input->post('kualifikasi_s3')),
        'universitas_s3' => htmlspecialchars($this->input->post('universitas_s3')),
        'tanggal_s3' => htmlspecialchars($this->input->post('tanggal_s3')),
        'noijasah_s3' => htmlspecialchars($this->input->post('noijasah_s3')),
        'gelar_s3' => htmlspecialchars($this->input->post('gelar_s3')),

        // Sertifikat
        'sertifikat_formal' => htmlspecialchars($this->input->post('sertifikat_formal')),
        'sertifikat_nonformal' => htmlspecialchars($this->input->post('sertifikat_nonformal')),

        // CPNS
        'sk_cpns' => htmlspecialchars($this->input->post('sk_cpns')),
        'tmt_cpns' => htmlspecialchars($this->input->post('tmt_cpns')),
        'pejabat_cpns' => htmlspecialchars($this->input->post('pejabat_cpns')),
        'spmt_cpns' => htmlspecialchars($this->input->post('spmt_cpns')),
        'tglspmt_cpns' => htmlspecialchars($this->input->post('tglspmt_cpns')),
        'sttpl_cpns' => htmlspecialchars($this->input->post('sttpl_cpns')),
        'tglsttpl_cpns' => htmlspecialchars($this->input->post('tglsttpl_cpns')),

        // PNS
        'sk_pns' => htmlspecialchars($this->input->post('sk_pns')),
        'tmt_pns' => htmlspecialchars($this->input->post('tmt_pns')),
        'pejabat_pns' => htmlspecialchars($this->input->post('pejabat_pns')),
        'karis_pns' => htmlspecialchars($this->input->post('karis_pns')),
        'taspen_pns' => htmlspecialchars($this->input->post('taspen_pns')),
        'karpeg_pns' => htmlspecialchars($this->input->post('karpeg_pns')),

        // Dosen Tetap
        'sk_dostap' => htmlspecialchars($this->input->post('sk_dostap')),
        'tmt_dostap' => htmlspecialchars($this->input->post('tmt_dostap')),
        'pejabat_dostap' => htmlspecialchars($this->input->post('pejabat_dostap')),

        // Dosen Kontrak
        'sk_dostrak' => htmlspecialchars($this->input->post('sk_dostrak')),
        'tmt_dostrak' => htmlspecialchars($this->input->post('tmt_dostrak')),
        'pejabat_dostrak' => htmlspecialchars($this->input->post('pejabat_dostrak')),

        // Pegawai Tetap
        'sk_petap' => htmlspecialchars($this->input->post('sk_petap')),
        'tmt_petap' => htmlspecialchars($this->input->post('tmt_petap')),
        'pejabat_petap' => htmlspecialchars($this->input->post('pejabat_petap')),

        // Pegawai Kontrak
        'sk_petrak' => htmlspecialchars($this->input->post('sk_petrak')),
        'tmt_petrak' => htmlspecialchars($this->input->post('tmt_petrak')),
        'pejabat_petrak' => htmlspecialchars($this->input->post('pejabat_petrak')),

        // Nomor Identitas
        'nip' => htmlspecialchars($this->input->post('nip')),
        'nidn' => htmlspecialchars($this->input->post('nidn')),
        'nik' => htmlspecialchars($this->input->post('nik')),

        // Asisten Ahli/III.a (100)
        'total_ak1' => htmlspecialchars($this->input->post('total_ak1')),
        'tmt1' => htmlspecialchars($this->input->post('tmt1')),
        'no_sk1' => htmlspecialchars($this->input->post('no_sk1')),

        // Asisten Ahli/III.b (150)
        'total_ak2' => htmlspecialchars($this->input->post('total_ak2')),
        'tmt2' => htmlspecialchars($this->input->post('tmt2')),
        'no_sk2' => htmlspecialchars($this->input->post('no_sk2')),

        // Lektor/III.c (200)
        'total_ak3' => htmlspecialchars($this->input->post('total_ak3')),
        'tmt3' => htmlspecialchars($this->input->post('tmt3')),
        'no_sk3' => htmlspecialchars($this->input->post('no_sk3')),

        // Lektor/III.d (300)
        'total_ak4' => htmlspecialchars($this->input->post('total_ak4')),
        'tmt4' => htmlspecialchars($this->input->post('tmt4')),
        'no_sk4' => htmlspecialchars($this->input->post('no_sk4')),

        // Lektor Kepala/IV.a (400)
        'total_ak5' => htmlspecialchars($this->input->post('total_ak5')),
        'tmt5' => htmlspecialchars($this->input->post('tmt5')),
        'no_sk5' => htmlspecialchars($this->input->post('no_sk5')),

        // Lektor Kepala/IV.b (550)
        'total_ak6' => htmlspecialchars($this->input->post('total_ak6')),
        'tmt6' => htmlspecialchars($this->input->post('tmt6')),
        'no_sk6' => htmlspecialchars($this->input->post('no_sk6')),

        // Penata Muda/III.a
        'tmt7' => htmlspecialchars($this->input->post('tmt7')),
        'no_sk7' => htmlspecialchars($this->input->post('no_sk7')),
        'tgl_sk7' => htmlspecialchars($this->input->post('tgl_sk7')),
        'bkn_sk7' => htmlspecialchars($this->input->post('bkn_sk7')),
        'tglbkn_sk7' => htmlspecialchars($this->input->post('tglbkn_sk7')),
        'jenis_pangkat7' => htmlspecialchars($this->input->post('jenis_pangkat7')),

        // Penata Muda Tk.I/III.b
        'tmt8' => htmlspecialchars($this->input->post('tmt8')),
        'no_sk8' => htmlspecialchars($this->input->post('no_sk8')),
        'tgl_sk8' => htmlspecialchars($this->input->post('tgl_sk8')),
        'bkn_sk8' => htmlspecialchars($this->input->post('bkn_sk8')),
        'tglbkn_sk8' => htmlspecialchars($this->input->post('tglbkn_sk8')),
        'jenis_pangkat8' => htmlspecialchars($this->input->post('jenis_pangkat8')),

        // Penata/III.c
        'tmt9' => htmlspecialchars($this->input->post('tmt9')),
        'no_sk9' => htmlspecialchars($this->input->post('no_sk9')),
        'tgl_sk9' => htmlspecialchars($this->input->post('tgl_sk9')),
        'bkn_sk9' => htmlspecialchars($this->input->post('bkn_sk9')),
        'tglbkn_sk9' => htmlspecialchars($this->input->post('tglbkn_sk9')),
        'jenis_pangkat9' => htmlspecialchars($this->input->post('jenis_pangkat9')),

        // Penata Tk.I/III.d
        'tmt10' => htmlspecialchars($this->input->post('tmt10')),
        'no_sk10' => htmlspecialchars($this->input->post('no_sk10')),
        'tgl_sk10' => htmlspecialchars($this->input->post('tgl_sk10')),
        'bkn_sk10' => htmlspecialchars($this->input->post('bkn_sk10')),
        'tglbkn_sk10' => htmlspecialchars($this->input->post('tglbkn_sk10')),
        'jenis_pangkat10' => htmlspecialchars($this->input->post('jenis_pangkat10')),

        // Pembina/IV.a
        'tmt11' => htmlspecialchars($this->input->post('tmt11')),
        'no_sk11' => htmlspecialchars($this->input->post('no_sk11')),
        'tgl_sk11' => htmlspecialchars($this->input->post('tgl_sk11')),
        'bkn_sk11' => htmlspecialchars($this->input->post('bkn_sk11')),
        'tglbkn_sk11' => htmlspecialchars($this->input->post('tglbkn_sk11')),
        'jenis_pangkat11' => htmlspecialchars($this->input->post('jenis_pangkat11')),

        // Pembina Tk.I/IV.b
        'tmt12' => htmlspecialchars($this->input->post('tmt12')),
        'no_sk12' => htmlspecialchars($this->input->post('no_sk12')),
        'tgl_sk12' => htmlspecialchars($this->input->post('tgl_sk12')),
        'bkn_sk12' => htmlspecialchars($this->input->post('bkn_sk12')),
        'tglbkn_sk12' => htmlspecialchars($this->input->post('tglbkn_sk12')),
        'jenis_pangkat12' => htmlspecialchars($this->input->post('jenis_pangkat12')),

        // Status Kawin
        'status_kawin' => htmlspecialchars($this->input->post('status_kawin')),

        // Keluarga
        'nama_ayah' => htmlspecialchars($this->input->post('nama_ayah')),
        'nama_ibu' => htmlspecialchars($this->input->post('nama_ibu')),
        'nama_pasangan' => htmlspecialchars($this->input->post('nama_pasangan')),
        'nama_anak' => htmlspecialchars($this->input->post('nama_anak')),

        // Lainnya
        'npwp' => htmlspecialchars($this->input->post('npwp')),
        'nomor_rekening' => htmlspecialchars($this->input->post('nomor_rekening')),
        'nama_kartu' => htmlspecialchars($this->input->post('nama_kartu')),
        'nomor_kartu' => htmlspecialchars($this->input->post('nomor_kartu')),
        'gol_darah' => htmlspecialchars($this->input->post('gol_darah')),
        'status_pegawai' => htmlspecialchars($this->input->post('status_pegawai')),
        'dosen_pns' => htmlspecialchars($this->input->post('dosen_pns')),
        'dosen_tetap' => htmlspecialchars($this->input->post('dosen_tetap')),
        'dosen_kontrak' => htmlspecialchars($this->input->post('dosen_kontrak')),
        'tendik_pns' => htmlspecialchars($this->input->post('tendik_pns')),
        'tendik_tetap' => htmlspecialchars($this->input->post('tendik_tetap')),
        'tendik_kontrak' => htmlspecialchars($this->input->post('tendik_kontrak')),
              
            ];

            $this->teknikmesin->updateData($id, $data);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Berhasil mengupdate data!');
                redirect('teknikmesin');
            } else {
                $this->session->set_flashdata('error', 'Gagal mengupdate data!');
                redirect('teknikmesin/edit/' . $id);
            }
        }
    }

    public function destroy($id)
    {
        $this->teknikmesin->destroyData($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Berhasil menghapus teknikmesin!');
            redirect('teknikmesin');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus teknikmesin!');
            redirect('teknikmesin');
        }
    }

    public function show($id)
    {
        $data['title'] = 'Teknik mesin | Detail Teknik mesin';
        $data['data'] = $this->teknikmesin->showData($id);

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/topbar');
        $this->load->view('dashboard/teknikmesin/show', $data);
        $this->load->view('layouts/footer');
    }
    
}
