<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Kop Surat -->
  <div class="kop-surat-container">
    <img src="<?= base_url('assets/img/logo_musamus.jpg') ?>" alt="Logo Universitas">
    <div class="kop-surat">
      <p style="font-weight: bold; margin: 0; font-size: 23px;">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET, DAN TEKNOLOGI</p>
      <p style="font-weight: bold; margin: 0; font-size: 25px;">UNIVERSITAS MUSAMUS</p>
      <p style="margin: 0; font-size: 24px;">Jalan Kamizaun Mopah Lama Merauke 99611</p>
      <p style="margin: 0; font-size: 24px;">Telepon 0971-325923 Faksimile 0971-325976</p>
      <p style="margin: 0; font-size: 24px;">Email: <span style="color: blue;">perpustakaan@unmus.ac.id</span></p>
    </div>
  </div>
  <hr>

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4 page-heading">
    <h1 class="h3 mb-0">Detail Data</h1>
    <a href="<?= base_url('tendik') ?>" class="btn btn-outline-danger">
      <i class="fas fa-arrow-left"></i> Kembali
    </a>
  </div>

  <!-- Content Row -->
  <div class="card p-3 mb-5 bg-white rounded">
    <div class="card-body">
      <!-- Print Button -->
      <button onclick="printDetail()" class="btn btn-outline-primary mb-3">
        <i class="fas fa-print"></i> Print
      </button>

      <div id="detail-content" class="table-responsive">
        <table class="table-container">
          <tbody>
            <tr>
              <th>NIPPPK</th>
              <td>&emsp;: <?= $data['kode'] ?></td>
            </tr>
            <tr>
              <th>Nama Pegawai</th>
              <td>&emsp;: <?= $data['nama'] ?></td>
            </tr>
            <tr>
              <th>Pendidikan</th>
              <td>&emsp;: <?= $data['pendidikan'] ?></td>
            </tr>
            <tr>
              <th>Jabatan</th>
              <td>&emsp;: <?= $data['jabatan_nama'] ?></td>
            </tr>
            <tr>
              <th>Golongan</th>
              <td>&emsp;: <?= $data['golongan'] ?></td>
            </tr>
            <tr>
              <th>TMT</th>
              <td>&emsp;: <?= $data['tmt'] ?></td>
            </tr>
            <tr>
              <th>Keterangan</th>
              <td>&emsp;: <?= $data['ket'] ?></td>
            </tr>
            <tr>
              <th>Penempatan</th>
              <td>&emsp;: <?= $data['penempatan_nama'] ?></td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Tanggal dan Tanda Tangan -->
      <div class="signature-container">
        <div class="signature-content">
          <p class="date">Merauke, <?= date('d F Y'); ?></p>
          <p class="position">Menyetujui</p>
          <p class="position2">Dekan</p>
          <p class="name">Ir. Frederik H. Sumbung, S.T., M.Eng.</p>
          <div class="separator"></div>
          <p class="nip">NIP: 197503082005011013</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- JavaScript -->
<script>
  function printDetail() {
    window.print();
  }
</script>

<!-- CSS tambahan -->
<style>
  /* Default state: Sembunyikan kop surat dan tanda tangan di tampilan web */
  .kop-surat-container,
  .signature-container {
    display: none;
  }

  @media print {

    /* Sembunyikan elemen yang tidak diperlukan saat mencetak */
    .sidebar,
    .navbar,
    .footer,
    .btn,
    .page-heading {
      display: none !important;
    }

    /* Menampilkan kop surat dan tanda tangan hanya saat print */
    .kop-surat-container,
    .signature-container {
      display: flex !important;
    }

    /* Menambahkan padding ke seluruh halaman cetak */
    .container-fluid {
      margin: 0 auto;
      padding-left: 10mm;
      padding-right: 10mm;
      width: auto;
    }

    /* Hapus padding dan bayangan pada card untuk cetak */
    .card {
      border: none;
      box-shadow: none !important;
      padding: 0 !important;
    }

    /* Style Kop Surat */
    .kop-surat-container {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 20px;
    }

    .kop-surat-container img {
      width: 150px;
      height: 150px;
      margin-right: 20px;
    }

    .kop-surat {
      text-align: center;
      font-family: 'Times New Roman', Times, serif;
      flex: 1;
    }

    .kop-surat h2,
    .kop-surat h3,
    .kop-surat p {
      margin: 0;
    }

    hr {
      display: block;
      width: 100%;
      margin-top: 10px;
      border: 1px solid black;
      clear: both;
    }

    /* Styling untuk tabel */
    .table-container {
      width: 100%;
      margin-top: 20px;
      border-collapse: collapse;
      table-layout: fixed;
    }

    .table-container th,
    .table-container td {
      border: 1px solid black;
      padding: 10px;
      font-size: 12px;
      font-family: 'Times New Roman', Times, serif;
    }

    .table-container th {
      width: 30%;
      background-color: #f2f2f2;
      text-align: left;
    }

    .table-container td {
      width: 70%;
      text-align: left;
    }

    /* Styling untuk tanggal dan tanda tangan menggunakan flexbox */
    .signature-container {
      display: flex;
      justify-content: flex-end;
      margin-top: 60px;
      margin-right: 50px;
    }

    .signature-content {
      text-align: center;
      font-family: 'Times New Roman', Times, serif;
    }

    .signature-content .date {
      margin-bottom: 20px;
    }

    .signature-content .position {
      margin-bottom: 5px;
    }

    .signature-content .position2 {
      margin-bottom: 80px;
    }

    .signature-content .name {
      font-weight: bold;
      margin-bottom: 2px;
    }

    .signature-content .nip {
      font-size: 18px;
    }

    .signature-content .separator {
      border-top: 1px solid black;
      width: 270px;
      margin: 5px auto;
    }
  }
</style>
