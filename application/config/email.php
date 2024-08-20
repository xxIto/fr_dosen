<?php
defined('BASEPATH') or exit('No direct script access allowed');

$config['protocol'] = 'smtp';
$config['smtp_host'] = 'sandbox.smtp.mailtrap.io';
$config['smtp_port'] = 2525;
$config['smtp_user'] = '8f8e8ed3eb6503'; // Ganti dengan username Mailtrap Anda
$config['smtp_pass'] = 'a539047a4617a7'; // Ganti dengan password Mailtrap Anda
$config['mailtype'] = 'html';
$config['charset']  = 'utf-8';
$config['newline']  = "\r\n";  // Tambahkan ini untuk memastikan bahwa baris diakhiri dengan \r\n
$config['crlf']     = "\r\n";  // Tambahkan ini juga untuk memastikan penggunaan \r\n
$config['smtp_crypto'] = 'tls'; // Gunakan TLS untuk enkripsi
