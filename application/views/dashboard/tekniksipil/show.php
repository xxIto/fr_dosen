<!-- Begin Page Content -->
<div class="container">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0">Detail Data</h1>
    <a href="<?= base_url('tekniksipil') ?>" class="btn btn-outline-danger">
      <i class="fas fa-arrow-left"></i> Kembali
    </a>
  </div>

  <!-- Content Row -->
  <div class="card shadow-sm p-3 mb-5 bg-white rounded">
    <div class="card-body">
      <!-- Print Button -->
      <button onclick="printDetail()" class="btn btn-outline-primary mb-3">
        <i class="fas fa-print"></i> Print
      </button>

      <div id="detail-content" class="container mt-3">
        <div class="form-group">
          <label>Foto</label>
          <img src="<?= base_url('uploads/' . $data['foto']); ?>" alt="Foto" width="200">
        </div>
        <div class="form-group">
          <label>Nomor Surat</label>
          <input type="text" class="form-control" value="<?= $data['nomor'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Tanggal</label>
          <input type="text" class="form-control" value="<?= $data['tanggal'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Nama</label>
          <input type="text" class="form-control" value="<?= $data['nama'] ?>" readonly>
        </div>
        <div class="form-group">
  <label for="jenis_kelamin_tekniksipil">Jenis Kelamin</label>
  <input type="text" class="form-control" id="jenis_kelamin_tekniksipil" value="<?= $data['jenis_kelamin'] == 'Laki-laki' ? 'Laki-laki' : 'Perempuan' ?>" readonly>
</div>
        <div class="form-group">
          <label>Tempat Lahir</label>
          <input type="text" class="form-control" value="<?= $data['tempat_lahir'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Agama</label>
          <input type="text" class="form-control" value="<?= $data['agama'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <input type="text" class="form-control" value="<?= $data['alamat'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>No HP</label>
          <input type="text" class="form-control" value="<?= $data['no_hp'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>No Rumah</label>
          <input type="text" class="form-control" value="<?= $data['no_rumah'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Asal SD</label>
          <input type="text" class="form-control" value="<?= $data['asal_sd'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Tanggal SD</label>
          <input type="text" class="form-control" value="<?= $data['tanggal_sd'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>No Ijasah SD</label>
          <input type="text" class="form-control" value="<?= $data['noijasah_sd'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Asal SLTP</label>
          <input type="text" class="form-control" value="<?= $data['asal_sltp'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Tanggal SLTP</label>
          <input type="text" class="form-control" value="<?= $data['tanggal_sltp'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>No Ijasah SLTP</label>
          <input type="text" class="form-control" value="<?= $data['noijasah_sltp'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Asal SLTA</label>
          <input type="text" class="form-control" value="<?= $data['asal_slta'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Tanggal SLTA</label>
          <input type="text" class="form-control" value="<?= $data['tanggal_slta'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>No Ijasah SLTA</label>
          <input type="text" class="form-control" value="<?= $data['noijasah_slta'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Kualifikasi D3</label>
          <input type="text" class="form-control" value="<?= $data['kualifikasi_d3'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Universitas D3</label>
          <input type="text" class="form-control" value="<?= $data['universitas_d3'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Tanggal D3</label>
          <input type="text" class="form-control" value="<?= $data['tanggal_d3'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>No Ijasah D3</label>
          <input type="text" class="form-control" value="<?= $data['noijasah_d3'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Gelar D3</label>
          <input type="text" class="form-control" value="<?= $data['gelar_d3'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Kualifikasi S1</label>
          <input type="text" class="form-control" value="<?= $data['kualifikasi_s1'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Universitas S1</label>
          <input type="text" class="form-control" value="<?= $data['universitas_s1'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Tanggal S1</label>
          <input type="text" class="form-control" value="<?= $data['tanggal_s1'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>No Ijasah S1</label>
          <input type="text" class="form-control" value="<?= $data['noijasah_s1'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Gelar S1</label>
          <input type="text" class="form-control" value="<?= $data['gelar_s1'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Kualifikasi S2</label>
          <input type="text" class="form-control" value="<?= $data['kualifikasi_s2'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Universitas S2</label>
          <input type="text" class="form-control" value="<?= $data['universitas_s2'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Tanggal S2</label>
          <input type="text" class="form-control" value="<?= $data['tanggal_s2'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>No Ijasah S2</label>
          <input type="text" class="form-control" value="<?= $data['noijasah_s2'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Gelar S2</label>
          <input type="text" class="form-control" value="<?= $data['gelar_s2'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Kualifikasi S3</label>
          <input type="text" class="form-control" value="<?= $data['kualifikasi_s3'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Universitas S3</label>
          <input type="text" class="form-control" value="<?= $data['universitas_s3'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Tanggal S3</label>
          <input type="text" class="form-control" value="<?= $data['tanggal_s3'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>No Ijasah S3</label>
          <input type="text" class="form-control" value="<?= $data['noijasah_s3'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Gelar S3</label>
          <input type="text" class="form-control" value="<?= $data['gelar_s3'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Sertifikat Formal</label>
          <input type="text" class="form-control" value="<?= $data['sertifikat_formal'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Sertifikat Nonformal</label>
          <input type="text" class="form-control" value="<?= $data['sertifikat_nonformal'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>SK CPNS</label>
          <input type="text" class="form-control" value="<?= $data['sk_cpns'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>TMT CPNS</label>
          <input type="text" class="form-control" value="<?= $data['tmt_cpns'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Pejabat CPNS</label>
          <input type="text" class="form-control" value="<?= $data['pejabat_cpns'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>SPMT CPNS</label>
          <input type="text" class="form-control" value="<?= $data['spmt_cpns'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Tanggal SPMT CPNS</label>
          <input type="text" class="form-control" value="<?= $data['tglspmt_cpns'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>STTPL CPNS</label>
          <input type="text" class="form-control" value="<?= $data['sttpl_cpns'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Tanggal STTPL CPNS</label>
          <input type="text" class="form-control" value="<?= $data['tglsttpl_cpns'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>SK PNS</label>
          <input type="text" class="form-control" value="<?= $data['sk_pns'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>TMT PNS</label>
          <input type="text" class="form-control" value="<?= $data['tmt_pns'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Pejabat PNS</label>
          <input type="text" class="form-control" value="<?= $data['pejabat_pns'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Karis PNS</label>
          <input type="text" class="form-control" value="<?= $data['karis_pns'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Taspen PNS</label>
          <input type="text" class="form-control" value="<?= $data['taspen_pns'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Karpeg PNS</label>
          <input type="text" class="form-control" value="<?= $data['karpeg_pns'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>SK DOSTAP</label>
          <input type="text" class="form-control" value="<?= $data['sk_dostap'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>TMT DOSTAP</label>
          <input type="text" class="form-control" value="<?= $data['tmt_dostap'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Pejabat DOSTAP</label>
          <input type="text" class="form-control" value="<?= $data['pejabat_dostap'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>SK DOSTRAK</label>
          <input type="text" class="form-control" value="<?= $data['sk_dostrak'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>TMT DOSTRAK</label>
          <input type="text" class="form-control" value="<?= $data['tmt_dostrak'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Pejabat DOSTRAK</label>
          <input type="text" class="form-control" value="<?= $data['pejabat_dostrak'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>SK PETAP</label>
          <input type="text" class="form-control" value="<?= $data['sk_petap'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>TMT PETAP</label>
          <input type="text" class="form-control" value="<?= $data['tmt_petap'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Pejabat PETAP</label>
          <input type="text" class="form-control" value="<?= $data['pejabat_petap'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>SK PETRAK</label>
          <input type="text" class="form-control" value="<?= $data['sk_petrak'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>TMT PETRAK</label>
          <input type="text" class="form-control" value="<?= $data['tmt_petrak'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Pejabat PETRAK</label>
          <input type="text" class="form-control" value="<?= $data['pejabat_petrak'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>NIP</label>
          <input type="text" class="form-control" value="<?= $data['nip'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>NIDN</label>
          <input type="text" class="form-control" value="<?= $data['nidn'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>NIK</label>
          <input type="text" class="form-control" value="<?= $data['nik'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Total AK1</label>
          <input type="text" class="form-control" value="<?= $data['total_ak1'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>TMT1</label>
          <input type="text" class="form-control" value="<?= $data['tmt1'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>No SK1</label>
          <input type="text" class="form-control" value="<?= $data['no_sk1'] ?>" readonly>
        </div>
        <!-- Add similar blocks for total_ak2 to total_ak12 and their corresponding fields -->
        <!-- Example for total_ak2 -->
        <div class="form-group">
          <label>Total AK2</label>
          <input type="text" class="form-control" value="<?= $data['total_ak2'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>TMT2</label>
          <input type="text" class="form-control" value="<?= $data['tmt2'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>No SK2</label>
          <input type="text" class="form-control" value="<?= $data['no_sk2'] ?>" readonly>
        </div>
        <!-- Continue this pattern for AK3 to AK12 -->
        <div class="form-group">
  <label>Total AK3</label>
  <input type="text" class="form-control" value="<?= $data['total_ak3'] ?>" readonly>
</div>
<div class="form-group">
  <label>TMT3</label>
  <input type="text" class="form-control" value="<?= $data['tmt3'] ?>" readonly>
</div>
<div class="form-group">
  <label>No SK3</label>
  <input type="text" class="form-control" value="<?= $data['no_sk3'] ?>" readonly>
</div>
<div class="form-group">
  <label>Total AK4</label>
  <input type="text" class="form-control" value="<?= $data['total_ak4'] ?>" readonly>
</div>
<div class="form-group">
  <label>TMT4</label>
  <input type="text" class="form-control" value="<?= $data['tmt4'] ?>" readonly>
</div>
<div class="form-group">
  <label>No SK4</label>
  <input type="text" class="form-control" value="<?= $data['no_sk4'] ?>" readonly>
</div>
<div class="form-group">
  <label>Total AK5</label>
  <input type="text" class="form-control" value="<?= $data['total_ak5'] ?>" readonly>
</div>
<div class="form-group">
  <label>TMT5</label>
  <input type="text" class="form-control" value="<?= $data['tmt5'] ?>" readonly>
</div>
<div class="form-group">
  <label>No SK5</label>
  <input type="text" class="form-control" value="<?= $data['no_sk5'] ?>" readonly>
</div>
<div class="form-group">
  <label>Total AK6</label>
  <input type="text" class="form-control" value="<?= $data['total_ak6'] ?>" readonly>
</div>
<div class="form-group">
  <label>TMT6</label>
  <input type="text" class="form-control" value="<?= $data['tmt6'] ?>" readonly>
</div>
<div class="form-group">
  <label>No SK6</label>
  <input type="text" class="form-control" value="<?= $data['no_sk6'] ?>" readonly>
</div>
<div class="form-group">
  <label>TMT7</label>
  <input type="text" class="form-control" value="<?= $data['tmt7'] ?>" readonly>
</div>
<div class="form-group">
  <label>No SK7</label>
  <input type="text" class="form-control" value="<?= $data['no_sk7'] ?>" readonly>
</div>
<div class="form-group">
  <label>Tanggal SK7</label>
  <input type="text" class="form-control" value="<?= $data['tgl_sk7'] ?>" readonly>
</div>
<div class="form-group">
  <label>BKN SK7</label>
  <input type="text" class="form-control" value="<?= $data['bkn_sk7'] ?>" readonly>
</div>
<div class="form-group">
  <label>Tanggal BKN SK7</label>
  <input type="text" class="form-control" value="<?= $data['tglbkn_sk7'] ?>" readonly>
</div>
<div class="form-group">
  <label>Jenis Pangkat 7</label>
  <input type="text" class="form-control" value="<?= $data['jenis_pangkat7'] ?>" readonly>
</div>
<div class="form-group">
  <label>TMT8</label>
  <input type="text" class="form-control" value="<?= $data['tmt8'] ?>" readonly>
</div>
<div class="form-group">
  <label>No SK8</label>
  <input type="text" class="form-control" value="<?= $data['no_sk8'] ?>" readonly>
</div>
<div class="form-group">
  <label>Tanggal SK8</label>
  <input type="text" class="form-control" value="<?= $data['tgl_sk8'] ?>" readonly>
</div>
<div class="form-group">
  <label>BKN SK8</label>
  <input type="text" class="form-control" value="<?= $data['bkn_sk8'] ?>" readonly>
</div>
<div class="form-group">
  <label>Tanggal BKN SK8</label>
  <input type="text" class="form-control" value="<?= $data['tglbkn_sk8'] ?>" readonly>
</div>
<div class="form-group">
  <label>Jenis Pangkat 8</label>
  <input type="text" class="form-control" value="<?= $data['jenis_pangkat8'] ?>" readonly>
</div>
<div class="form-group">
  <label>TMT9</label>
  <input type="text" class="form-control" value="<?= $data['tmt9'] ?>" readonly>
</div>
<div class="form-group">
  <label>No SK9</label>
  <input type="text" class="form-control" value="<?= $data['no_sk9'] ?>" readonly>
</div>
<div class="form-group">
  <label>Tanggal SK9</label>
  <input type="text" class="form-control" value="<?= $data['tgl_sk9'] ?>" readonly>
</div>
<div class="form-group">
  <label>BKN SK9</label>
  <input type="text" class="form-control" value="<?= $data['bkn_sk9'] ?>" readonly>
</div>
<div class="form-group">
  <label>Tanggal BKN SK9</label>
  <input type="text" class="form-control" value="<?= $data['tglbkn_sk9'] ?>" readonly>
</div>
<div class="form-group">
  <label>Jenis Pangkat 9</label>
  <input type="text" class="form-control" value="<?= $data['jenis_pangkat9'] ?>" readonly>
</div>
<div class="form-group">
  <label>TMT10</label>
  <input type="text" class="form-control" value="<?= $data['tmt10'] ?>" readonly>
</div>
<div class="form-group">
  <label>No SK10</label>
  <input type="text" class="form-control" value="<?= $data['no_sk10'] ?>" readonly>
</div>
<div class="form-group">
  <label>Tanggal SK10</label>
  <input type="text" class="form-control" value="<?= $data['tgl_sk10'] ?>" readonly>
</div>
<div class="form-group">
  <label>BKN SK10</label>
  <input type="text" class="form-control" value="<?= $data['bkn_sk10'] ?>" readonly>
</div>
<div class="form-group">
  <label>Tanggal BKN SK10</label>
  <input type="text" class="form-control" value="<?= $data['tglbkn_sk10'] ?>" readonly>
</div>
<div class="form-group">
  <label>Jenis Pangkat 10</label>
  <input type="text" class="form-control" value="<?= $data['jenis_pangkat10'] ?>" readonly>
</div>
<div class="form-group">
  <label>TMT11</label>
  <input type="text" class="form-control" value="<?= $data['tmt11'] ?>" readonly>
</div>
<div class="form-group">
  <label>No SK11</label>
  <input type="text" class="form-control" value="<?= $data['no_sk11'] ?>" readonly>
</div>
<div class="form-group">
  <label>Tanggal SK11</label>
  <input type="text" class="form-control" value="<?= $data['tgl_sk11'] ?>" readonly>
</div>
<div class="form-group">
  <label>BKN SK11</label>
  <input type="text" class="form-control" value="<?= $data['bkn_sk11'] ?>" readonly>
</div>
<div class="form-group">
  <label>Tanggal BKN SK11</label>
  <input type="text" class="form-control" value="<?= $data['tglbkn_sk11'] ?>" readonly>
</div>
<div class="form-group">
  <label>Jenis Pangkat 11</label>
  <input type="text" class="form-control" value="<?= $data['jenis_pangkat11'] ?>" readonly>
</div>
<div class="form-group">
  <label>TMT12</label>
  <input type="text" class="form-control" value="<?= $data['tmt12'] ?>" readonly>
</div>
<div class="form-group">
  <label>No SK12</label>
  <input type="text" class="form-control" value="<?= $data['no_sk12'] ?>" readonly>
</div>
<div class="form-group">
  <label>Tanggal SK12</label>
  <input type="text" class="form-control" value="<?= $data['tgl_sk12'] ?>" readonly>
</div>
<div class="form-group">
  <label>BKN SK12</label>
  <input type="text" class="form-control" value="<?= $data['bkn_sk12'] ?>" readonly>
</div>
<div class="form-group">
  <label>Tanggal BKN SK12</label>
  <input type="text" class="form-control" value="<?= $data['tglbkn_sk12'] ?>" readonly>
</div>
<div class="form-group">
  <label>Jenis Pangkat 12</label>
  <input type="text" class="form-control" value="<?= $data['jenis_pangkat12'] ?>" readonly>
</div>


        <div class="form-group">
          <label>Status Kawin</label>
          <input type="text" class="form-control" value="<?= $data['status_kawin'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Nama Ayah</label>
          <input type="text" class="form-control" value="<?= $data['nama_ayah'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Nama Ibu</label>
          <input type="text" class="form-control" value="<?= $data['nama_ibu'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Nama Pasangan</label>
          <input type="text" class="form-control" value="<?= $data['nama_pasangan'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Nama Anak</label>
          <input type="text" class="form-control" value="<?= $data['nama_anak'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>NPWP</label>
          <input type="text" class="form-control" value="<?= $data['npwp'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Nomor Rekening</label>
          <input type="text" class="form-control" value="<?= $data['nomor_rekening'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Nama Kartu</label>
          <input type="text" class="

form-control" value="<?= $data['nama_kartu'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Nomor Kartu</label>
          <input type="text" class="form-control" value="<?= $data['nomor_kartu'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Gol Darah</label>
          <input type="text" class="form-control" value="<?= $data['gol_darah'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Status Pegawai</label>
          <input type="text" class="form-control" value="<?= $data['status_pegawai'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Dosen PNS</label>
          <input type="text" class="form-control" value="<?= $data['dosen_pns'] == '1' ? 'Ya' : 'Tidak'?>" readonly>
        </div>
        <div class="form-group">
  <label>Dosen Tetap</label>
  <input type="text" class="form-control" value="<?= $data['dosen_tetap'] == '1' ? 'Ya' : 'Tidak' ?>" readonly>
</div>
<div class="form-group">
  <label>Dosen Kontrak</label>
  <input type="text" class="form-control" value="<?= $data['dosen_kontrak'] == '1' ? 'Ya' : 'Tidak' ?>" readonly>
</div>
<div class="form-group">
  <label>Tendik PNS</label>
  <input type="text" class="form-control" value="<?= $data['tendik_pns'] == '1' ? 'Ya' : 'Tidak' ?>" readonly>
</div>
<div class="form-group">
  <label>Tendik Tetap</label>
  <input type="text" class="form-control" value="<?= $data['tendik_tetap'] == '1' ? 'Ya' : 'Tidak' ?>" readonly>
</div>
<div class="form-group">
  <label>Tendik Kontrak</label>
  <input type="text" class="form-control" value="<?= $data['tendik_kontrak'] == '1' ? 'Ya' : 'Tidak' ?>" readonly>
</div>

        <div class="form-group">
          <label>Created At</label>
          <input type="text" class="form-control" value="<?= $data['created_at'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Updated At</label>
          <input type="text" class="form-control" value="<?= $data['updated_at'] ?>" readonly>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<!-- JavaScript for Print Function -->
<script>
  function printDetail() {
    var content = document.getElementById('detail-content').innerHTML;
    var originalContent = document.body.innerHTML;

    var printWindow = window.open('', '', 'height=600,width=800');
    printWindow.document.open();
    printWindow.document.write('<html><head><title>Print Detail Data</title>');
    printWindow.document.write('<style>');
    printWindow.document.write('body { font-family: Arial, sans-serif; margin: 20px; }');
    printWindow.document.write('h1 { text-align: center; margin-bottom: 20px; }');
    printWindow.document.write('.container { width: 100%; max-width: 800px; margin: auto; }');
    printWindow.document.write('.form-group { margin-bottom: 15px; }');
    printWindow.document.write('label { font-weight: bold; display: block; margin-bottom: 5px; }');
    printWindow.document.write('input { border: 1px solid #ced4da; padding: 10px; width: 100%; box-sizing: border-box; }');
    printWindow.document.write('</style>');
    printWindow.document.write('</head><body>');
    printWindow.document.write('<h1>Detail Data</h1>');
    printWindow.document.write('<div class="container">' + content + '</div>');
    printWindow.document.write('</body></html>');
    printWindow.document.close();
    printWindow.focus();
  }
</script>

