<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifikasi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('email'); // Load library email
        $this->load->model('Model_dosen'); // Load model dosen
    }

    public function kirim_email() {
        // Ambil email dosen yang belum tersertifikasi
        $dosen_belum_sertifikasi = $this->Model_dosen->get_dosen_belum_sertifikasi();

        if (!empty($dosen_belum_sertifikasi)) {
            foreach ($dosen_belum_sertifikasi as $dosen) {
                // Pengaturan email (konfigurasi otomatis diambil dari config/email.php)
                $this->email->from('Musamus@example.com', 'Jhon Doe');
                $this->email->to($dosen['email']); // Kirim ke email dosen yang belum tersertifikasi

                $this->email->subject('Notifikasi Sertifikasi');
                $this->email->message('<p>Anda belum tersertifikasi. Harap lengkapi persyaratan sertifikasi.</p>');

                // Mengirim email
                if ($this->email->send()) {
                    echo 'Email berhasil dikirim ke ' . $dosen['email'] . '<br>';
                } else {
                    echo 'Email gagal dikirim ke ' . $dosen['email'] . '. ' . $this->email->print_debugger() . '<br>';
                }

                // Clear email settings after each send
                $this->email->clear();
            }
        } else {
            echo 'Tidak ada dosen yang belum tersertifikasi.';
        }
    }
}
