<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="<?= base_url('teknikelektro') ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
      <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
    </a>
    <h1 class="h3 mb-0">Edit Teknik elektro</h1>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  </div>

  <!-- Content Row -->
  <form id="form-teknikelektro" action="<?= base_url('teknikelektro/update/' . $data['teknikelektro_id']); ?>" method="POST" enctype="multipart/form-data">
   
    <!-- Teknik elektro Form -->
    <div class="card mt-3">
      <div class="card-header">
        <h3 class="card-title">Edit Teknik elektro</h3>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="foto_teknikelektro">Foto</label>
          <input type="file" class="form-control" name="foto" id="foto_teknikelektro">
          <?php if (form_error('foto')) : ?>
            <span class="text-danger"><?= form_error('foto') ?></span>
          <?php endif; ?>
          <?php if ($data['foto']) : ?>
            <div class="mt-2">
              <img src="<?= base_url('uploads/' . $data['foto']); ?>" alt="Foto" width="100">
            </div>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="nomor_teknikelektro">Nomor</label>
          <input type="text" class="form-control" name="nomor" id="nomor_teknikelektro" placeholder="Masukkan Nomor Surat" value="<?= $data['nomor'] ?>">
          <?php if (form_error('nomor')) : ?>
            <span class="text-danger"><?= form_error('nomor') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tanggal_teknikelektro">Tanggal</label>
          <input type="date" class="form-control" name="tanggal" id="tanggal_teknikelektro" value="<?= $data['tanggal'] ?>">
          <?php if (form_error('tanggal')) : ?>
            <span class="text-danger"><?= form_error('tanggal') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="nama_teknikelektro">Nama</label>
          <input type="text" class="form-control" name="nama" id="nama_teknikelektro" placeholder="Masukkan Nama" value="<?= $data['nama'] ?>">
          <?php if (form_error('nama')) : ?>
            <span class="text-danger"><?= form_error('nama') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="jenis_kelamin_teknikelektro">Jenis Kelamin</label>
          <select class="form-control" name="jenis_kelamin" id="jenis_kelamin_teknikelektro">
            <option value="Laki-laki" <?= $data['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' ?>>Laki - Laki</option>
            <option value="Perempuan" <?= $data['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
          </select>
          <?php if (form_error('jenis_kelamin')) : ?>
            <span class="text-danger"><?= form_error('jenis_kelamin') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tempat_lahir_teknikelektro">Tempat Lahir</label>
          <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir_teknikelektro" placeholder="Masukkan Tempat Lahir" value="<?= $data['tempat_lahir'] ?>">
          <?php if (form_error('tempat_lahir')) : ?>
            <span class="text-danger"><?= form_error('tempat_lahir') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="agama_teknikelektro">Agama</label>
          <input type="text" class="form-control" name="agama" id="agama_teknikelektro" placeholder="Masukkan Agama" value="<?= $data['agama'] ?>">
          <?php if (form_error('agama')) : ?>
            <span class="text-danger"><?= form_error('agama') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="alamat_teknikelektro">Alamat</label>
          <textarea class="form-control" name="alamat" id="alamat_teknikelektro" placeholder="Masukkan Alamat"><?= $data['alamat'] ?></textarea>
          <?php if (form_error('alamat')) : ?>
            <span class="text-danger"><?= form_error('alamat') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_hp_teknikelektro">Nomor HP</label>
          <input type="text" class="form-control" name="no_hp" id="no_hp_teknikelektro" placeholder="Masukkan No HP" value="<?= $data['no_hp'] ?>">
          <?php if (form_error('no_hp')) : ?>
            <span class="text-danger"><?= form_error('no_hp') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_rumah_teknikelektro">Nomor Telpon Rumah</label>
          <input type="text" class="form-control" name="no_rumah" id="no_rumah_teknikelektro" placeholder="Masukkan No Rumah" value="<?= $data['no_rumah'] ?>">
          <?php if (form_error('no_rumah')) : ?>
            <span class="text-danger"><?= form_error('no_rumah') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="asal_sd_teknikelektro">Asal Sekolah SD</label>
          <input type="text" class="form-control" name="asal_sd" id="asal_sd_teknikelektro" placeholder="Masukkan Asal SD" value="<?= $data['asal_sd'] ?>">
          <?php if (form_error('asal_sd')) : ?>
            <span class="text-danger"><?= form_error('asal_sd') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tanggal_sd_teknikelektro">Tanggal Lulus SD</label>
          <input type="date" class="form-control" name="tanggal_sd" id="tanggal_sd_teknikelektro" value="<?= $data['tanggal_sd'] ?>">
          <?php if (form_error('tanggal_sd')) : ?>
            <span class="text-danger"><?= form_error('tanggal_sd') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="noijasah_sd_teknikelektro">No Ijasah SD</label>
          <input type="text" class="form-control" name="noijasah_sd" id="noijasah_sd_teknikelektro" placeholder="Masukkan No Ijasah SD" value="<?= $data['noijasah_sd'] ?>">
          <?php if (form_error('noijasah_sd')) : ?>
            <span class="text-danger"><?= form_error('noijasah_sd') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
              <label for="asal_sltp_teknikelektro">Asal Sekolah SLTP</label>
              <input type="text" class="form-control" name="asal_sltp" id="asal_sltp_teknikelektro" placeholder="Masukkan Asal SLTP" value="<?= $data['asal_sltp'] ?>">
              <?php if (form_error('asal_sltp')) : ?>
                <span class="text-danger"><?= form_error('asal_sltp') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="tanggal_sltp_teknikelektro">Tanggal Lulus SLTP</label>
              <input type="date" class="form-control" name="tanggal_sltp" id="tanggal_sltp_teknikelektro" value="<?= $data['tanggal_sltp'] ?>">
              <?php if (form_error('tanggal_sltp')) : ?>
                <span class="text-danger"><?= form_error('tanggal_sltp') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="no_ijasah_sltp_teknikelektro">No Ijasah SLTP</label>
              <input type="text" class="form-control" name="noijasah_sltp" id="no_ijasah_sltp_teknikelektro" placeholder="Masukkan No Ijasah SLTP" value="<?= $data['noijasah_sltp'] ?>">
              <?php if (form_error('noijasah_sltp')) : ?>
                <span class="text-danger"><?= form_error('noijasah_sltp') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="asal_slta_teknikelektro">Asal Sekolah SLTA</label>
              <input type="text" class="form-control" name="asal_slta" id="asal_slta_teknikelektro" placeholder="Masukkan Asal SLTA" value="<?= $data['asal_slta'] ?>">
              <?php if (form_error('asal_slta')) : ?>
                <span class="text-danger"><?= form_error('asal_slta') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="tanggal_slta_teknikelektro">Tanggal Lulus SLTA</label>
              <input type="date" class="form-control" name="tanggal_slta" id="tanggal_slta_teknikelektro" value="<?= $data['tanggal_slta'] ?>">
              <?php if (form_error('tanggal_slta')) : ?>
                <span class="text-danger"><?= form_error('tanggal_slta') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="no_ijasah_slta_teknikelektro">No Ijasah SLTA</label>
              <input type="text" class="form-control" name="noijasah_slta" id="no_ijasah_slta_teknikelektro" placeholder="Masukkan No Ijasah SLTA" value="<?= $data['noijasah_slta'] ?>">
              <?php if (form_error('noijasah_slta')) : ?>
                <span class="text-danger"><?= form_error('noijasah_slta') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="kualifikasi_d3_teknikelektro">Kualifikasi Akademik D3</label>
              <input type="text" class="form-control" name="kualifikasi_d3" id="kualifikasi_d3_teknikelektro" placeholder="Masukkan Kualifikasi D3" value="<?= $data['kualifikasi_d3'] ?>">
              <?php if (form_error('kualifikasi_d3')) : ?>
                <span class="text-danger"><?= form_error('kualifikasi_d3') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="universitas_d3_teknikelektro">Nama Universitas D3</label>
              <input type="text" class="form-control" name="universitas_d3" id="universitas_d3_teknikelektro" placeholder="Masukkan Universitas D3" value="<?= $data['universitas_d3'] ?>">
              <?php if (form_error('universitas_d3')) : ?>
                <span class="text-danger"><?= form_error('universitas_d3') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="tanggal_d3_teknikelektro">Tanggal Lulus D3</label>
              <input type="date" class="form-control" name="tanggal_d3" id="tanggal_d3_teknikelektro" value="<?= $data['tanggal_d3'] ?>">
              <?php if (form_error('tanggal_d3')) : ?>
                <span class="text-danger"><?= form_error('tanggal_d3') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="no_ijasah_d3_teknikelektro">No Ijasah D3</label>
              <input type="text" class="form-control" name="noijasah_d3" id="no_ijasah_d3_teknikelektro" placeholder="Masukkan No Ijasah D3" value="<?= $data['noijasah_d3'] ?>">
              <?php if (form_error('noijasah_d3')) : ?>
                <span class="text-danger"><?= form_error('noijasah_d3') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="gelar_d3_teknikelektro">Gelar D3</label>
              <input type="text" class="form-control" name="gelar_d3" id="gelar_d3_teknikelektro" placeholder="Masukkan Gelar D3" value="<?= $data['gelar_d3'] ?>">
              <?php if (form_error('gelar_d3')) : ?>
                <span class="text-danger"><?= form_error('gelar_d3') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="kualifikasi_s1_teknikelektro">Kualifikasi Akademik S1</label>
              <input type="text" class="form-control" name="kualifikasi_s1" id="kualifikasi_s1_teknikelektro" placeholder="Masukkan Kualifikasi S1" value="<?= $data['kualifikasi_s1'] ?>">
              <?php if (form_error('kualifikasi_s1')) : ?>
                <span class="text-danger"><?= form_error('kualifikasi_s1') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="universitas_s1_teknikelektro">Nama Universitas S1</label>
              <input type="text" class="form-control" name="universitas_s1" id="universitas_s1_teknikelektro" placeholder="Masukkan Universitas S1" value="<?= $data['universitas_s1'] ?>">
              <?php if (form_error('universitas_s1')) : ?>
                <span class="text-danger"><?= form_error('universitas_s1') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="tanggal_s1_teknikelektro">Tanggal Lulus S1</label>
              <input type="date" class="form-control" name="tanggal_s1" id="tanggal_s1_teknikelektro" value="<?= $data['tanggal_s1'] ?>">
              <?php if (form_error('tanggal_s1')) : ?>
                <span class="text-danger"><?= form_error('tanggal_s1') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="no_ijasah_s1_teknikelektro">No Ijasah S1</label>
              <input type="text" class="form-control" name="noijasah_s1" id="no_ijasah_s1_teknikelektro" placeholder="Masukkan No Ijasah S1" value="<?= $data['noijasah_s1'] ?>">
              <?php if (form_error('noijasah_s1')) : ?>
                <span class="text-danger"><?= form_error('noijasah_s1') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="gelar_s1_teknikelektro">Gelar S1</label>
              <input type="text" class="form-control" name="gelar_s1" id="gelar_s1_teknikelektro" placeholder="Masukkan Gelar S1" value="<?= $data['gelar_s1'] ?>">
              <?php if (form_error('gelar_s1')) : ?>
                <span class="text-danger"><?= form_error('gelar_s1') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="kualifikasi_s2_teknikelektro">Kualifikasi Akademik S2</label>
              <input type="text" class="form-control" name="kualifikasi_s2" id="kualifikasi_s2_teknikelektro" placeholder="Masukkan Kualifikasi S2" value="<?= $data['kualifikasi_s2'] ?>">
              <?php if (form_error('kualifikasi_s2')) : ?>
                <span class="text-danger"><?= form_error('kualifikasi_s2') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="universitas_s2_teknikelektro">Nama Universitas S2</label>
              <input type="text" class="form-control" name="universitas_s2" id="universitas_s2_teknikelektro" placeholder="Masukkan Universitas S2" value="<?= $data['universitas_s2'] ?>">
              <?php if (form_error('universitas_s2')) : ?>
                <span class="text-danger"><?= form_error('universitas_s2') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="tanggal_s2_teknikelektro">Tanggal Lulus S2</label>
              <input type="date" class="form-control" name="tanggal_s2" id="tanggal_s2_teknikelektro" value="<?= $data['tanggal_s2'] ?>">
              <?php if (form_error('tanggal_s2')) : ?>
                <span class="text-danger"><?= form_error('tanggal_s2') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="no_ijasah_s2_teknikelektro">No Ijasah S2</label>
              <input type="text" class="form-control" name="noijasah_s2" id="no_ijasah_s2_teknikelektro" placeholder="Masukkan No Ijasah S2" value="<?= $data['noijasah_s2'] ?>">
              <?php if (form_error('noijasah_s2')) : ?>
                <span class="text-danger"><?= form_error('noijasah_s2') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="gelar_s2_teknikelektro">Gelar S2</label>
              <input type="text" class="form-control" name="gelar_s2" id="gelar_s2_teknikelektro" placeholder="Masukkan Gelar S2" value="<?= $data['gelar_s2'] ?>">
              <?php if (form_error('gelar_s2')) : ?>
                <span class="text-danger"><?= form_error('gelar_s2') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="kualifikasi_s3_teknikelektro">Kualifikasi Akademik S3</label>
              <input type="text" class="form-control" name="kualifikasi_s3" id="kualifikasi_s3_teknikelektro" placeholder="Masukkan Kualifikasi S3" value="<?= $data['kualifikasi_s3'] ?>">
              <?php if (form_error('kualifikasi_s3')) : ?>
                <span class="text-danger"><?= form_error('kualifikasi_s3') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="universitas_s3_teknikelektro">Nama Universitas S3</label>
              <input type="text" class="form-control" name="universitas_s3" id="universitas_s3_teknikelektro" placeholder="Masukkan Universitas S3" value="<?= $data['universitas_s3'] ?>">
              <?php if (form_error('universitas_s3')) : ?>
                <span class="text-danger"><?= form_error('universitas_s3') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="tanggal_s3_teknikelektro">Tanggal Lulus S3</label>
              <input type="date" class="form-control" name="tanggal_s3" id="tanggal_s3_teknikelektro" value="<?= $data['tanggal_s3'] ?>">
              <?php if (form_error('tanggal_s3')) : ?>
                <span class="text-danger"><?= form_error('tanggal_s3') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="no_ijasah_s3_teknikelektro">No Ijasah S3</label>
              <input type="text" class="form-control" name="noijasah_s3" id="no_ijasah_s3_teknikelektro" placeholder="Masukkan No Ijasah S3" value="<?= $data['noijasah_s3'] ?>">
              <?php if (form_error('noijasah_s3')) : ?>
                <span class="text-danger"><?= form_error('noijasah_s3') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="gelar_s3_teknikelektro">Gelar S3</label>
              <input type="text" class="form-control" name="gelar_s3" id="gelar_s3_teknikelektro" placeholder="Masukkan Gelar S3" value="<?= $data['gelar_s3'] ?>">
              <?php if (form_error('gelar_s3')) : ?>
                <span class="text-danger"><?= form_error('gelar_s3') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="sertifikat_formal_teknikelektro">Sertifikat Formal</label>
              <input type="text" class="form-control" name="sertifikat_formal" id="sertifikat_formal_teknikelektro" placeholder="Masukkan Sertifikat Formal" value="<?= $data['sertifikat_formal'] ?>">
              <?php if (form_error('sertifikat_formal')) : ?>
                <span class="text-danger"><?= form_error('sertifikat_formal') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="sertifikat_nonformal_teknikelektro">Sertifikat Nonformal</label>
              <input type="text" class="form-control" name="sertifikat_nonformal" id="sertifikat_nonformal_teknikelektro" placeholder="Masukkan Sertifikat Nonformal" value="<?= $data['sertifikat_nonformal'] ?>">
              <?php if (form_error('sertifikat_nonformal')) : ?>
                <span class="text-danger"><?= form_error('sertifikat_nonformal') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="sk_cpns_teknikelektro">Nomor SK CPNS</label>
              <input type="text" class="form-control" name="sk_cpns" id="sk_cpns_teknikelektro" placeholder="Masukkan SK CPNS" value="<?= $data['sk_cpns'] ?>">
              <?php if (form_error('sk_cpns')) : ?>
                <span class="text-danger"><?= form_error('sk_cpns') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="tmt_cpns_teknikelektro">TMT CPNS</label>
              <input type="date" class="form-control" name="tmt_cpns" id="tmt_cpns_teknikelektro" value="<?= $data['tmt_cpns'] ?>">
              <?php if (form_error('tmt_cpns')) : ?>
                <span class="text-danger"><?= form_error('tmt_cpns') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="pejabat_cpns_teknikelektro">Pejabat Yang Mengangkat CPNS</label>
              <input type="text" class="form-control" name="pejabat_cpns" id="pejabat_cpns_teknikelektro" placeholder="Masukkan Pejabat CPNS" value="<?= $data['pejabat_cpns'] ?>">
              <?php if (form_error('pejabat_cpns')) : ?>
                <span class="text-danger"><?= form_error('pejabat_cpns') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="spmt_cpns_teknikelektro">No SPMT CPNS</label>
              <input type="text" class="form-control" name="spmt_cpns" id="spmt_cpns_teknikelektro" placeholder="Masukkan SPMT CPNS" value="<?= $data['spmt_cpns'] ?>">
              <?php if (form_error('spmt_cpns')) : ?>
                <span class="text-danger"><?= form_error('spmt_cpns') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="tglspmt_cpns_teknikelektro">Tanggal SPMT CPNS</label>
              <input type="date" class="form-control" name="tglspmt_cpns" id="tglspmt_cpns_teknikelektro" value="<?= $data['tglspmt_cpns'] ?>">
              <?php if (form_error('tglspmt_cpns')) : ?>
                <span class="text-danger"><?= form_error('tglspmt_cpns') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="sttpl_cpns_teknikelektro">No STTPL CPNS</label>
              <input type="text" class="form-control" name="sttpl_cpns" id="sttpl_cpns_teknikelektro" placeholder="Masukkan STTPL CPNS" value="<?= $data['sttpl_cpns'] ?>">
              <?php if (form_error('sttpl_cpns')) : ?>
                <span class="text-danger"><?= form_error('sttpl_cpns') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="tglsttpl_cpns_teknikelektro">Tanggal STTPL CPNS</label>
              <input type="date" class="form-control" name="tglsttpl_cpns" id="tglsttpl_cpns_teknikelektro" value="<?= $data['tglsttpl_cpns'] ?>">
              <?php if (form_error('tglsttpl_cpns')) : ?>
                <span class="text-danger"><?= form_error('tglsttpl_cpns') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="sk_pns_teknikelektro">No SK PNS</label>
              <input type="text" class="form-control" name="sk_pns" id="sk_pns_teknikelektro" placeholder="Masukkan SK PNS" value="<?= $data['sk_pns'] ?>">
              <?php if (form_error('sk_pns')) : ?>
                <span class="text-danger"><?= form_error('sk_pns') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="tmt_pns_teknikelektro">TMT PNS</label>
              <input type="date" class="form-control" name="tmt_pns" id="tmt_pns_teknikelektro" value="<?= $data['tmt_pns'] ?>">
              <?php if (form_error('tmt_pns')) : ?>
                <span class="text-danger"><?= form_error('tmt_pns') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="pejabat_pns_teknikelektro">Pejabat Yang Mengangkat PNS</label>
              <input type="text" class="form-control" name="pejabat_pns" id="pejabat_pns_teknikelektro" placeholder="Masukkan Pejabat PNS" value="<?= $data['pejabat_pns'] ?>">
              <?php if (form_error('pejabat_pns')) : ?>
                <span class="text-danger"><?= form_error('pejabat_pns') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="karis_pns_teknikelektro">KARIS/KARSU PNS</label>
              <input type="text" class="form-control" name="karis_pns" id="karis_pns_teknikelektro" placeholder="Masukkan KARIS PNS" value="<?= $data['karis_pns'] ?>">
              <?php if (form_error('karis_pns')) : ?>
                <span class="text-danger"><?= form_error('karis_pns') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="taspen_pns_teknikelektro">TASPEN PNS</label>
              <input type="text" class="form-control" name="taspen_pns" id="taspen_pns_teknikelektro" placeholder="Masukkan TASPEN PNS" value="<?= $data['taspen_pns'] ?>">
              <?php if (form_error('taspen_pns')) : ?>
                <span class="text-danger"><?= form_error('taspen_pns') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="karpeg_pns_teknikelektro">KARPEG PNS</label>
              <input type="text" class="form-control" name="karpeg_pns" id="karpeg_pns_teknikelektro" placeholder="Masukkan KARPEG PNS" value="<?= $data['karpeg_pns'] ?>">
              <?php if (form_error('karpeg_pns')) : ?>
                <span class="text-danger"><?= form_error('karpeg_pns') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="sk_dostap_teknikelektro">No SK DOSTAP</label>
              <input type="text" class="form-control" name="sk_dostap" id="sk_dostap_teknikelektro" placeholder="Masukkan SK DOSTAP" value="<?= $data['sk_dostap'] ?>">
              <?php if (form_error('sk_dostap')) : ?>
                <span class="text-danger"><?= form_error('sk_dostap') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="tmt_dostap_teknikelektro">TMT DOSTAP</label>
              <input type="date" class="form-control" name="tmt_dostap" id="tmt_dostap_teknikelektro" value="<?= $data['tmt_dostap'] ?>">
              <?php if (form_error('tmt_dostap')) : ?>
                <span class="text-danger"><?= form_error('tmt_dostap') ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
                            <label for="pejabat_dostap_teknikelektro">Pejabat Yang Mengangkat DOSTAP</label>
                            <input type="text" class="form-control" name="pejabat_dostap" id="pejabat_dostap_teknikelektro" placeholder="Masukkan SK Jabatan" value="<?= isset($data['pejabat_dostap']) ? $data['pejabat_dostap'] : '' ?>">
                            <?php if (form_error('pejabat_dostap')) : ?>
                                <span class="text-danger"><?= form_error('pejabat_dostap') ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="sk_dostrak_teknikelektro">No SK DOSTRAK</label>
                            <input type="text" class="form-control" name="sk_dostrak" id="sk_dostrak_teknikelektro" placeholder="Masukkan SK DOSTRAK" value="<?= isset($data['sk_dostrak']) ? $data['sk_dostrak'] : '' ?>">
                            <?php if (form_error('sk_dostrak')) : ?>
                                <span class="text-danger"><?= form_error('sk_dostrak') ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="tmt_dostrak_teknikelektro">TMT DOSTRAK</label>
                            <input type="date" class="form-control" name="tmt_dostrak" id="tmt_dostrak_teknikelektro" value="<?= isset($data['tmt_dostrak']) ? $data['tmt_dostrak'] : '' ?>">
                            <?php if (form_error('tmt_dostrak')) : ?>
                                <span class="text-danger"><?= form_error('tmt_dostrak') ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="pejabat_dostrak_teknikelektro">Pejabat Yang Mengangkat DOSTRAK</label>
                            <input type="text" class="form-control" name="pejabat_dostrak" id="pejabat_dostrak_teknikelektro" placeholder="Masukkan Pejabat DOSTRAK" value="<?= isset($data['pejabat_dostrak']) ? $data['pejabat_dostrak'] : '' ?>">
                            <?php if (form_error('pejabat_dostrak')) : ?>
                                <span class="text-danger"><?= form_error('pejabat_dostrak') ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="sk_petap_teknikelektro">No SK PETAP</label>
                            <input type="text" class="form-control" name="sk_petap" id="sk_petap_teknikelektro" placeholder="Masukkan SK PETAP" value="<?= isset($data['sk_petap']) ? $data['sk_petap'] : '' ?>">
                            <?php if (form_error('sk_petap')) : ?>
                                <span class="text-danger"><?= form_error('sk_petap') ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="tmt_petap_teknikelektro">TMT PETAP</label>
                            <input type="date" class="form-control" name="tmt_petap" id="tmt_petap_teknikelektro" value="<?= isset($data['tmt_petap']) ? $data['tmt_petap'] : '' ?>">
                            <?php if (form_error('tmt_petap')) : ?>
                                <span class="text-danger"><?= form_error('tmt_petap') ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="pejabat_petap_teknikelektro">Pejabat Yang Mengangkat PETAP</label>
                            <input type="text" class="form-control" name="pejabat_petap" id="pejabat_petap_teknikelektro" placeholder="Masukkan Pejabat PETAP" value="<?= isset($data['pejabat_petap']) ? $data['pejabat_petap'] : '' ?>">
                            <?php if (form_error('pejabat_petap')) : ?>
                                <span class="text-danger"><?= form_error('pejabat_petap') ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="sk_petrak_teknikelektro">No SK PETRAK</label>
                            <input type="text" class="form-control" name="sk_petrak" id="sk_petrak_teknikelektro" placeholder="Masukkan SK PETRAK" value="<?= isset($data['sk_petrak']) ? $data['sk_petrak'] : '' ?>">
                            <?php if (form_error('sk_petrak')) : ?>
                                <span class="text-danger"><?= form_error('sk_petrak') ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="tmt_petrak_teknikelektro">TMT PETRAK</label>
                            <input type="date" class="form-control" name="tmt_petrak" id="tmt_petrak_teknikelektro" value="<?= isset($data['tmt_petrak']) ? $data['tmt_petrak'] : '' ?>">
                            <?php if (form_error('tmt_petrak')) : ?>
                                <span class="text-danger"><?= form_error('tmt_petrak') ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="pejabat_petrak_teknikelektro">Pejabat Yang Mengangkat PETRAK</label>
                            <input type="text" class="form-control" name="pejabat_petrak" id="pejabat_petrak_teknikelektro" placeholder="Masukkan Pejabat PETRAK" value="<?= isset($data['pejabat_petrak']) ? $data['pejabat_petrak'] : '' ?>">
                            <?php if (form_error('pejabat_petrak')) : ?>
                                <span class="text-danger"><?= form_error('pejabat_petrak') ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="nip_teknikelektro">NIP</label>
                            <input type="text" class="form-control" name="nip" id="nip_teknikelektro" placeholder="Masukkan NIP" value="<?= isset($data['nip']) ? $data['nip'] : '' ?>">
                            <?php if (form_error('nip')) : ?>
                                <span class="text-danger"><?= form_error('nip') ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="nidn_teknikelektro">NIDN</label>
                            <input type="text" class="form-control" name="nidn" id="nidn_teknikelektro" placeholder="Masukkan NIDN" value="<?= isset($data['nidn']) ? $data['nidn'] : '' ?>">
                            <?php if (form_error('nidn')) : ?>
                                <span class="text-danger"><?= form_error('nidn') ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="nik_teknikelektro">NIK</label>
                            <input type="text" class="form-control" name="nik" id="nik_teknikelektro" placeholder="Masukkan NIK" value="<?= isset($data['nik']) ? $data['nik'] : '' ?>">
                            <?php if (form_error('nik')) : ?>
                                <span class="text-danger"><?= form_error('nik') ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="total_ak1_teknikelektro">Total AK Asisten Ahli/III.a (100)</label>
                            <input type="text" class="form-control" name="total_ak1" id="total_ak1_teknikelektro" placeholder="Masukkan Total AK Asisten Ahli/III.a (100)" value="<?= isset($data['total_ak1']) ? $data['total_ak1'] : '' ?>">
                            <?php if (form_error('total_ak1')) : ?>
                                <span class="text-danger"><?= form_error('total_ak1') ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="tmt1_teknikelektro">TMT Asisten Ahli/III.a (100)</label>
                            <input type="date" class="form-control" name="tmt1" id="tmt1_teknikelektro" value="<?= isset($data['tmt1']) ? $data['tmt1'] : '' ?>">
                            <?php if (form_error('tmt1')) : ?>
                                <span class="text-danger"><?= form_error('tmt1') ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="no_sk1_teknikelektro">No SK PAK Asisten Ahli/III.a (100)</label>
                            <input type="text" class="form-control" name="no_sk1" id="no_sk1_teknikelektro" placeholder="Masukkan No SK PAK Asisten Ahli/III.a (100)" value="<?= isset($data['no_sk1']) ? $data['no_sk1'] : '' ?>">
                            <?php if (form_error('no_sk1')) : ?>
                                <span class="text-danger"><?= form_error('no_sk1') ?></span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label for="total_ak2_teknikelektro">Total AK Asisten Ahli/III.b (150)</label>
                            <input type="text" class="form-control" name="total_ak2" id="total_ak2_teknikelektro" placeholder="Masukkan Total AK Asisten Ahli/III.b (150)" value="<?= isset($data['total_ak2']) ? $data['total_ak2'] : '' ?>">
                            <?php if (form_error('total_ak2')) : ?>
                                <span class="text-danger"><?= form_error('total_ak2') ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="tmt2_teknikelektro">TMT Asisten Ahli/III.b (150)</label>
                            <input type="date" class="form-control" name="tmt2" id="tmt2_teknikelektro" value="<?= isset($data['tmt2']) ? $data['tmt2'] : '' ?>">
                            <?php if (form_error('tmt2')) : ?>
                                <span class="text-danger"><?= form_error('tmt2') ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="no_sk2_teknikelektro">No SK PAK Asisten Ahli/III.b (150)</label>
                            <input type="text" class="form-control" name="no_sk2" id="no_sk2_teknikelektro" placeholder="Masukkan No SK PAK Asisten Ahli/III.b (150)" value="<?= isset($data['no_sk2']) ? $data['no_sk2'] : '' ?>">
                            <?php if (form_error('no_sk2')) : ?>
                                <span class="text-danger"><?= form_error('no_sk2') ?></span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label for="total_ak3_teknikelektro">Total AK Lektor/III.c (200)</label>
                            <input type="text" class="form-control" name="total_ak3" id="total_ak3_teknikelektro" placeholder="Masukkan Total AK Lektor/III.c (200)" value="<?= isset($data['total_ak3']) ? $data['total_ak3'] : '' ?>">
                            <?php if (form_error('total_ak3')) : ?>
                                <span class="text-danger"><?= form_error('total_ak3') ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="tmt3_teknikelektro">TMT Lektor/III.c (200)</label>
                            <input type="date" class="form-control" name="tmt3" id="tmt3_teknikelektro" value="<?= isset($data['tmt3']) ? $data['tmt3'] : '' ?>">
                            <?php if (form_error('tmt3')) : ?>
                                <span class="text-danger"><?= form_error('tmt3') ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="no_sk3_teknikelektro">No SK PAK Lektor/III.c (200)</label>
                            <input type="text" class="form-control" name="no_sk3" id="no_sk3_teknikelektro" placeholder="Masukkan No SK PAK Lektor/III.c (200)" value="<?= isset($data['no_sk3']) ? $data['no_sk3'] : '' ?>">
                            <?php if (form_error('no_sk3')) : ?>
                                <span class="text-danger"><?= form_error('no_sk3') ?></span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label for="total_ak4_teknikelektro">Total AK Lektor/III.d (300)</label>
                            <input type="text" class="form-control" name="total_ak4" id="total_ak4_teknikelektro" placeholder="Masukkan Total AK Lektor/III.d (300)" value="<?= isset($data['total_ak4']) ? $data['total_ak4'] : '' ?>">
                            <?php if (form_error('total_ak4')) : ?>
                                <span class="text-danger"><?= form_error('total_ak4') ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="tmt4_teknikelektro">TMT Lektor/III.d (300)</label>
                            <input type="date" class="form-control" name="tmt4" id="tmt4_teknikelektro" value="<?= isset($data['tmt4']) ? $data['tmt4'] : '' ?>">
                            <?php if (form_error('tmt4')) : ?>
                                <span class="text-danger"><?= form_error('tmt4') ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="no_sk4_teknikelektro">No SK PAK Lektor/III.d (300)</label>
                            <input type="text" class="form-control" name="no_sk4" id="no_sk4_teknikelektro" placeholder="Masukkan No SK PAK Lektor/III.d (300)" value="<?= isset($data['no_sk4']) ? $data['no_sk4'] : '' ?>">
                            <?php if (form_error('no_sk4')) : ?>
                                <span class="text-danger"><?= form_error('no_sk4') ?></span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label for="total_ak5_teknikelektro">Total AK Lekor Kepala/IV.a (400)</label>
                            <input type="text" class="form-control" name="total_ak5" id="total_ak5_teknikelektro" placeholder="Masukkan Total AK Lekor Kepala/IV.a (400)" value="<?= isset($data['total_ak5']) ? $data['total_ak5'] : '' ?>">
                            <?php if (form_error('total_ak5')) : ?>
                                <span class="text-danger"><?= form_error('total_ak5') ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="tmt5_teknikelektro">TMT Lekor Kepala/IV.a (400)</label>
                            <input type="date" class="form-control" name="tmt5" id="tmt5_teknikelektro" value="<?= isset($data['tmt5']) ? $data['tmt5'] : '' ?>">
                            <?php if (form_error('tmt5')) : ?>
                                <span class="text-danger"><?= form_error('tmt5') ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="no_sk5_teknikelektro">No SK PAK Lekor Kepala/IV.a (400)</label>
                            <input type="text" class="form-control" name="no_sk5" id="no_sk5_teknikelektro" placeholder="Masukkan No SK PAK Lekor Kepala/IV.a (400)" value="<?= isset($data['no_sk5']) ? $data['no_sk5'] : '' ?>">
                            <?php if (form_error('no_sk5')) : ?>
                                <span class="text-danger"><?= form_error('no_sk5') ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
    <label for="total_ak6_teknikelektro">Total AK Lekor Kepala/IV.b (550)</label>
    <input type="text" class="form-control" name="total_ak6" id="total_ak6_teknikelektro" value="<?= set_value('total_ak6', $data['total_ak6']) ?>" placeholder="Masukkan Total AK Lekor Kepala/IV.b (550)">
    <?php if (form_error('total_ak6')) : ?>
        <span class="text-danger"><?= form_error('total_ak6') ?></span>
    <?php endif; ?>
</div>
<div class="form-group">
    <label for="tmt6_teknikelektro">TMT Lekor Kepala/IV.b (550)</label>
    <input type="date" class="form-control" name="tmt6" id="tmt6_teknikelektro" value="<?= set_value('tmt6', $data['tmt6']) ?>">
    <?php if (form_error('tmt6')) : ?>
        <span class="text-danger"><?= form_error('tmt6') ?></span>
    <?php endif; ?>
</div>
<div class="form-group">
    <label for="no_sk6_teknikelektro">No SK PAK Lekor Kepala/IV.b (550)</label>
    <input type="text" class="form-control" name="no_sk6" id="no_sk6_teknikelektro" value="<?= set_value('no_sk6', $data['no_sk6']) ?>" placeholder="Masukkan No SK PAK Lekor Kepala/IV.b (550)">
    <?php if (form_error('no_sk6')) : ?>
        <span class="text-danger"><?= form_error('no_sk6') ?></span>
    <?php endif; ?>
</div>

<div class="form-group">
    <label for="tmt7_teknikelektro">TMT Penata Muda/III.a</label>
    <input type="text" class="form-control" name="tmt7" id="tmt7_teknikelektro" value="<?= set_value('tmt7', $data['tmt7']) ?>" placeholder="Masukkan TMT Penata Muda/III.a">
    <?php if (form_error('tmt7')) : ?>
        <span class="text-danger"><?= form_error('tmt7') ?></span>
    <?php endif; ?>
</div>
<div class="form-group">
    <label for="no_sk7_teknikelektro">No SK Penata Muda/III.a</label>
    <input type="text" class="form-control" name="no_sk7" id="no_sk7_teknikelektro" value="<?= set_value('no_sk7', $data['no_sk7']) ?>" placeholder="Masukkan No SK Penata Muda/III.a">
    <?php if (form_error('no_sk7')) : ?>
        <span class="text-danger"><?= form_error('no_sk7') ?></span>
    <?php endif; ?>
</div>
<div class="form-group">
    <label for="tgl_sk7_teknikelektro">Tanggal SK Penata Muda/III.a</label>
    <input type="date" class="form-control" name="tgl_sk7" id="tgl_sk7_teknikelektro" value="<?= set_value('tgl_sk7', $data['tgl_sk7']) ?>">
    <?php if (form_error('tgl_sk7')) : ?>
        <span class="text-danger"><?= form_error('tgl_sk7') ?></span>
    <?php endif; ?>
</div>
<div class="form-group">
    <label for="bkn_sk7_teknikelektro">No BKN Penata Muda/III.a</label>
    <input type="text" class="form-control" name="bkn_sk7" id="bkn_sk7_teknikelektro" value="<?= set_value('bkn_sk7', $data['bkn_sk7']) ?>" placeholder="Masukkan BKN Penata Muda/III.a">
    <?php if (form_error('bkn_sk7')) : ?>
        <span class="text-danger"><?= form_error('bkn_sk7') ?></span>
    <?php endif; ?>
</div>
<div class="form-group">
    <label for="tglbkn_sk7_teknikelektro">Tanggal BKN Penata Muda/III.a</label>
    <input type="date" class="form-control" name="tglbkn_sk7" id="tglbkn_sk7_teknikelektro" value="<?= set_value('tglbkn_sk7', $data['tglbkn_sk7']) ?>">
    <?php if (form_error('tglbkn_sk7')) : ?>
        <span class="text-danger"><?= form_error('tglbkn_sk7') ?></span>
    <?php endif; ?>
</div>
<div class="form-group">
    <label for="jenis_pangkat7_teknikelektro">Jenis Pangkat Penata Muda/III.a</label>
    <input type="text" class="form-control" name="jenis_pangkat7" id="jenis_pangkat7_teknikelektro" value="<?= set_value('jenis_pangkat7', $data['jenis_pangkat7']) ?>" placeholder="Masukkan Jenis Pangkat Penata Muda/III.a">
    <?php if (form_error('jenis_pangkat7')) : ?>
        <span class="text-danger"><?= form_error('jenis_pangkat7') ?></span>
    <?php endif; ?>
</div>

<div class="form-group">
    <label for="tmt8_teknikelektro">TMT Penata Muda Tk.I/III.b</label>
    <input type="text" class="form-control" name="tmt8" id="tmt8_teknikelektro" value="<?= set_value('tmt8', $data['tmt8']) ?>" placeholder="Masukkan TMT Penata Muda Tk.I/III.b">
    <?php if (form_error('tmt8')) : ?>
        <span class="text-danger"><?= form_error('tmt8') ?></span>
    <?php endif; ?>
</div>
<div class="form-group">
    <label for="no_sk8_teknikelektro">No SK Penata Muda Tk.I/III.b</label>
    <input type="text" class="form-control" name="no_sk8" id="no_sk8_teknikelektro" value="<?= set_value('no_sk8', $data['no_sk8']) ?>" placeholder="Masukkan No SK Penata Muda Tk.I/III.b">
    <?php if (form_error('no_sk8')) : ?>
        <span class="text-danger"><?= form_error('no_sk8') ?></span>
    <?php endif; ?>
</div>
<div class="form-group">
    <label for="tgl_sk8_teknikelektro">Tanggal SK Penata Muda Tk.I/III.b</label>
    <input type="date" class="form-control" name="tgl_sk8" id="tgl_sk8_teknikelektro" value="<?= set_value('tgl_sk8', $data['tgl_sk8']) ?>">
    <?php if (form_error('tgl_sk8')) : ?>
        <span class="text-danger"><?= form_error('tgl_sk8') ?></span>
    <?php endif; ?>
</div>
<div class="form-group">
    <label for="bkn_sk8_teknikelektro">BKN Penata Muda Tk.I/III.b</label>
    <input type="text" class="form-control" name="bkn_sk8" id="bkn_sk8_teknikelektro" value="<?= set_value('bkn_sk8', $data['bkn_sk8']) ?>" placeholder="Masukkan BKN Penata Muda Tk.I/III.b">
    <?php if (form_error('bkn_sk8')) : ?>
        <span class="text-danger"><?= form_error('bkn_sk8') ?></span>
    <?php endif; ?>
</div>
<div class="form-group">
    <label for="tglbkn_sk8_teknikelektro">Tanggal BKN Penata Muda Tk.I/III.b</label>
    <input type="date" class="form-control" name="tglbkn_sk8" id="tglbkn_sk8_teknikelektro" value="<?= set_value('tglbkn_sk8', $data['tglbkn_sk8']) ?>">
    <?php if (form_error('tglbkn_sk8')) : ?>
        <span class="text-danger"><?= form_error('tglbkn_sk8') ?></span>
    <?php endif; ?>
</div>
<div class="form-group">
    <label for="jenis_pangkat8_teknikelektro">Jenis Pangkat Penata Muda Tk.I/III.b</label>
    <input type="text" class="form-control" name="jenis_pangkat8" id="jenis_pangkat8_teknikelektro" value="<?= set_value('jenis_pangkat8', $data['jenis_pangkat8']) ?>" placeholder="Masukkan Jenis Pangkat Penata Muda Tk.I/III.b">
    <?php if (form_error('jenis_pangkat8')) : ?>
        <span class="text-danger"><?= form_error('jenis_pangkat8') ?></span>
    <?php endif; ?>
</div>
<div class="form-group">
  <label for="tmt9_teknikelektro">TMT Penata/III.c</label>
  <input type="text" class="form-control" name="tmt9" id="tmt9_teknikelektro" value="<?= set_value('tmt9', $data['tmt9']) ?>" placeholder="Masukkan TMT Penata/III.c">
  <?php if (form_error('tmt9')) : ?>
    <span class="text-danger"><?= form_error('tmt9') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="no_sk9_teknikelektro">No SK Penata/III.c</label>
  <input type="text" class="form-control" name="no_sk9" id="no_sk9_teknikelektro" value="<?= set_value('no_sk9', $data['no_sk9']) ?>" placeholder="Masukkan No SK Penata/III.c">
  <?php if (form_error('no_sk9')) : ?>
    <span class="text-danger"><?= form_error('no_sk9') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="tgl_sk9_teknikelektro">Tanggal SK Penata/III.c</label>
  <input type="date" class="form-control" name="tgl_sk9" id="tgl_sk9_teknikelektro" value="<?= set_value('tgl_sk9', $data['tgl_sk9']) ?>">
  <?php if (form_error('tgl_sk9')) : ?>
    <span class="text-danger"><?= form_error('tgl_sk9') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="bkn_sk9_teknikelektro">BKN Penata/III.c</label>
  <input type="text" class="form-control" name="bkn_sk9" id="bkn_sk9_teknikelektro" value="<?= set_value('bkn_sk9', $data['bkn_sk9']) ?>" placeholder="Masukkan BKN Penata/III.c">
  <?php if (form_error('bkn_sk9')) : ?>
    <span class="text-danger"><?= form_error('bkn_sk9') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="tglbkn_sk9_teknikelektro">Tanggal BKN Penata/III.c</label>
  <input type="date" class="form-control" name="tglbkn_sk9" id="tglbkn_sk9_teknikelektro" value="<?= set_value('tglbkn_sk9', $data['tglbkn_sk9']) ?>">
  <?php if (form_error('tglbkn_sk9')) : ?>
    <span class="text-danger"><?= form_error('tglbkn_sk9') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="jenis_pangkat9_teknikelektro">Jenis Pangkat Penata/III.c</label>
  <input type="text" class="form-control" name="jenis_pangkat9" id="jenis_pangkat9_teknikelektro" value="<?= set_value('jenis_pangkat9', $data['jenis_pangkat9']) ?>" placeholder="Masukkan Jenis Pangkat Penata/III.c">
  <?php if (form_error('jenis_pangkat9')) : ?>
    <span class="text-danger"><?= form_error('jenis_pangkat9') ?></span>
  <?php endif; ?>
</div>

<div class="form-group">
  <label for="tmt10_teknikelektro">TMT Penata Tk.I/III.d</label>
  <input type="text" class="form-control" name="tmt10" id="tmt10_teknikelektro" value="<?= set_value('tmt10', $data['tmt10']) ?>" placeholder="Masukkan TMT Penata Tk.I/III.d">
  <?php if (form_error('tmt10')) : ?>
    <span class="text-danger"><?= form_error('tmt10') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="no_sk10_teknikelektro">No SK Penata Tk.I/III.d</label>
  <input type="text" class="form-control" name="no_sk10" id="no_sk10_teknikelektro" value="<?= set_value('no_sk10', $data['no_sk10']) ?>" placeholder="Masukkan No SK Penata Tk.I/III.d">
  <?php if (form_error('no_sk10')) : ?>
    <span class="text-danger"><?= form_error('no_sk10') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="tgl_sk10_teknikelektro">Tanggal SK Penata Tk.I/III.d</label>
  <input type="date" class="form-control" name="tgl_sk10" id="tgl_sk10_teknikelektro" value="<?= set_value('tgl_sk10', $data['tgl_sk10']) ?>">
  <?php if (form_error('tgl_sk10')) : ?>
    <span class="text-danger"><?= form_error('tgl_sk10') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="bkn_sk10_teknikelektro">BKN Penata Tk.I/III.d</label>
  <input type="text" class="form-control" name="bkn_sk10" id="bkn_sk10_teknikelektro" value="<?= set_value('bkn_sk10', $data['bkn_sk10']) ?>" placeholder="Masukkan BKN Penata Tk.I/III.d">
  <?php if (form_error('bkn_sk10')) : ?>
    <span class="text-danger"><?= form_error('bkn_sk10') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="tglbkn_sk10_teknikelektro">Tanggal BKN Penata Tk.I/III.d</label>
  <input type="date" class="form-control" name="tglbkn_sk10" id="tglbkn_sk10_teknikelektro" value="<?= set_value('tglbkn_sk10', $data['tglbkn_sk10']) ?>">
  <?php if (form_error('tglbkn_sk10')) : ?>
    <span class="text-danger"><?= form_error('tglbkn_sk10') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="jenis_pangkat10_teknikelektro">Jenis Pangkat Penata Tk.I/III.d</label>
  <input type="text" class="form-control" name="jenis_pangkat10" id="jenis_pangkat10_teknikelektro" value="<?= set_value('jenis_pangkat10', $data['jenis_pangkat10']) ?>" placeholder="Masukkan Jenis Pangkat Penata Tk.I/III.d">
  <?php if (form_error('jenis_pangkat10')) : ?>
    <span class="text-danger"><?= form_error('jenis_pangkat10') ?></span>
  <?php endif; ?>
</div>

<div class="form-group">
  <label for="tmt11_teknikelektro">TMT Pembina/IV.a</label>
  <input type="text" class="form-control" name="tmt11" id="tmt11_teknikelektro" value="<?= set_value('tmt11', $data['tmt11']) ?>" placeholder="Masukkan TMT Pembina/IV.a">
  <?php if (form_error('tmt11')) : ?>
    <span class="text-danger"><?= form_error('tmt11') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="no_sk11_teknikelektro">No SK Pembina/IV.a</label>
  <input type="text" class="form-control" name="no_sk11" id="no_sk11_teknikelektro" value="<?= set_value('no_sk11', $data['no_sk11']) ?>" placeholder="Masukkan No SK Pembina/IV.a">
  <?php if (form_error('no_sk11')) : ?>
    <span class="text-danger"><?= form_error('no_sk11') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="tgl_sk11_teknikelektro">Tanggal SK Pembina/IV.a</label>
  <input type="date" class="form-control" name="tgl_sk11" id="tgl_sk11_teknikelektro" value="<?= set_value('tgl_sk11', $data['tgl_sk11']) ?>">
  <?php if (form_error('tgl_sk11')) : ?>
    <span class="text-danger"><?= form_error('tgl_sk11') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="bkn_sk11_teknikelektro">BKN Pembina/IV.a</label>
  <input type="text" class="form-control" name="bkn_sk11" id="bkn_sk11_teknikelektro" value="<?= set_value('bkn_sk11', $data['bkn_sk11']) ?>" placeholder="Masukkan BKN Pembina/IV.a">
  <?php if (form_error('bkn_sk11')) : ?>
    <span class="text-danger"><?= form_error('bkn_sk11') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="tglbkn_sk11_teknikelektro">Tanggal BKN Pembina/IV.a</label>
  <input type="date" class="form-control" name="tglbkn_sk11" id="tglbkn_sk11_teknikelektro" value="<?= set_value('tglbkn_sk11', $data['tglbkn_sk11']) ?>">
  <?php if (form_error('tglbkn_sk11')) : ?>
    <span class="text-danger"><?= form_error('tglbkn_sk11') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="jenis_pangkat11_teknikelektro">Jenis Pangkat Pembina/IV.a</label>
  <input type="text" class="form-control" name="jenis_pangkat11" id="jenis_pangkat11_teknikelektro" value="<?= set_value('jenis_pangkat11', $data['jenis_pangkat11']) ?>" placeholder="Masukkan Jenis Pangkat Pembina/IV.a">
  <?php if (form_error('jenis_pangkat11')) : ?>
    <span class="text-danger"><?= form_error('jenis_pangkat11') ?></span>
  <?php endif; ?>
</div>

<div class="form-group">
  <label for="tmt12_teknikelektro">TMT Pembina Tk.I/IV.b</label>
  <input type="text" class="form-control" name="tmt12" id="tmt12_teknikelektro" value="<?= set_value('tmt12', $data['tmt12']) ?>" placeholder="Masukkan TMT Pembina Tk.I/IV.b">
  <?php if (form_error('tmt12')) : ?>
    <span class="text-danger"><?= form_error('tmt12') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="no_sk12_teknikelektro">No SK Pembina Tk.I/IV.b</label>
  <input type="text" class="form-control" name="no_sk12" id="no_sk12_teknikelektro" value="<?= set_value('no_sk12', $data['no_sk12']) ?>" placeholder="Masukkan No SK Pembina Tk.I/IV.b">
  <?php if (form_error('no_sk12')) : ?>
    <span class="text-danger"><?= form_error('no_sk12') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="tgl_sk12_teknikelektro">Tanggal SK Pembina Tk.I/IV.b</label>
  <input type="date" class="form-control" name="tgl_sk12" id="tgl_sk12_teknikelektro" value="<?= set_value('tgl_sk12', $data['tgl_sk12']) ?>">
  <?php if (form_error('tgl_sk12')) : ?>
    <span class="text-danger"><?= form_error('tgl_sk12') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="bkn_sk12_teknikelektro">BKN Pembina Tk.I/IV.b</label>
  <input type="text" class="form-control" name="bkn_sk12" id="bkn_sk12_teknikelektro" value="<?= set_value('bkn_sk12', $data['bkn_sk12']) ?>" placeholder="Masukkan BKN Pembina Tk.I/IV.b">
  <?php if (form_error('bkn_sk12')) : ?>
    <span class="text-danger"><?= form_error('bkn_sk12') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="tglbkn_sk12_teknikelektro">Tanggal BKN Pembina Tk.I/IV.b</label>
  <input type="date" class="form-control" name="tglbkn_sk12" id="tglbkn_sk12_teknikelektro" value="<?= set_value('tglbkn_sk12', $data['tglbkn_sk12']) ?>">
  <?php if (form_error('tglbkn_sk12')) : ?>
    <span class="text-danger"><?= form_error('tglbkn_sk12') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="jenis_pangkat12_teknikelektro">Jenis Pangkat Pembina Tk.I/IV.b</label>
  <input type="text" class="form-control" name="jenis_pangkat12" id="jenis_pangkat12_teknikelektro" value="<?= set_value('jenis_pangkat12', $data['jenis_pangkat12']) ?>" placeholder="Masukkan Jenis Pangkat Pembina Tk.I/IV.b">
  <?php if (form_error('jenis_pangkat12')) : ?>
    <span class="text-danger"><?= form_error('jenis_pangkat12') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="status_kawin_teknikelektro">Status Pegawai</label>
  <select class="form-control" name="status_kawin" id="status_kawin_teknikelektro">
    <option value="Kawin" <?= set_select('status_kawin', 'Kawin', $data['status_kawin'] == 'Kawin') ?>>Kawin</option>
    <option value="Belum Kawin" <?= set_select('status_kawin', 'Belum Kawin', $data['status_kawin'] == 'Belum Kawin') ?>>Belum Kawin</option>
    <option value="Duda" <?= set_select('status_kawin', 'Duda', $data['status_kawin'] == 'Duda') ?>>Duda</option>
    <option value="Janda" <?= set_select('status_kawin', 'Janda', $data['status_kawin'] == 'Janda') ?>>Janda</option>
  </select>
  <?php if (form_error('status_kawin')) : ?>
    <span class="text-danger"><?= form_error('status_kawin') ?></span>
  <?php endif; ?>
</div>

<div class="form-group">
  <label for="nama_ayah_teknikelektro">Nama Ayah</label>
  <input type="text" class="form-control" name="nama_ayah" id="nama_ayah_teknikelektro" value="<?= set_value('nama_ayah', $data['nama_ayah']) ?>" placeholder="Masukkan Nama Ayah">
  <?php if (form_error('nama_ayah')) : ?>
    <span class="text-danger"><?= form_error('nama_ayah') ?></span>
  <?php endif; ?>
</div>

<div class="form-group">
  <label for="nama_ibu_teknikelektro">Nama Ibu</label>
  <input type="text" class="form-control" name="nama_ibu" id="nama_ibu_teknikelektro" value="<?= set_value('nama_ibu', $data['nama_ibu']) ?>" placeholder="Masukkan Nama Ibu">
  <?php if (form_error('nama_ibu')) : ?>
    <span class="text-danger"><?= form_error('nama_ibu') ?></span>
  <?php endif; ?>
</div>

<div class="form-group">
  <label for="nama_pasangan_teknikelektro">Nama Pasangan</label>
  <input type="text" class="form-control" name="nama_pasangan" id="nama_pasangan_teknikelektro" value="<?= set_value('nama_pasangan', $data['nama_pasangan']) ?>" placeholder="Masukkan Nama Pasangan">
  <?php if (form_error('nama_pasangan')) : ?>
    <span class="text-danger"><?= form_error('nama_pasangan') ?></span>
  <?php endif; ?>
</div>

<div class="form-group">
  <label for="nama_anak_teknikelektro">Nama Anak</label>
  <input type="text" class="form-control" name="nama_anak" id="nama_anak_teknikelektro" value="<?= set_value('nama_anak', $data['nama_anak']) ?>" placeholder="Masukkan Nama Anak">
  <?php if (form_error('nama_anak')) : ?>
    <span class="text-danger"><?= form_error('nama_anak') ?></span>
  <?php endif; ?>
</div>

<div class="form-group">
  <label for="npwp_teknikelektro">NPWP</label>
  <input type="text" class="form-control" name="npwp" id="npwp_teknikelektro" value="<?= set_value('npwp', $data['npwp']) ?>" placeholder="Masukkan NPWP">
  <?php if (form_error('npwp')) : ?>
    <span class="text-danger"><?= form_error('npwp') ?></span>
  <?php endif; ?>
</div>

<div class="form-group">
  <label for="nomor_rekening_teknikelektro">Nomor Rekening</label>
  <input type="text" class="form-control" name="nomor_rekening" id="nomor_rekening_teknikelektro" value="<?= set_value('nomor_rekening', $data['nomor_rekening']) ?>" placeholder="Masukkan Nomor Rekening">
  <?php if (form_error('nomor_rekening')) : ?>
    <span class="text-danger"><?= form_error('nomor_rekening') ?></span>
  <?php endif; ?>
</div>

<div class="form-group">
  <label for="nama_kartu_teknikelektro">Nama Kartu</label>
  <input type="text" class="form-control" name="nama_kartu" id="nama_kartu_teknikelektro" value="<?= set_value('nama_kartu', $data['nama_kartu']) ?>" placeholder="Masukkan Nama Kartu">
  <?php if (form_error('nama_kartu')) : ?>
    <span class="text-danger"><?= form_error('nama_kartu') ?></span>
  <?php endif; ?>
</div>

<div class="form-group">
  <label for="nomor_kartu_teknikelektro">Nomor Kartu</label>
  <input type="text" class="form-control" name="nomor_kartu" id="nomor_kartu_teknikelektro" value="<?= set_value('nomor_kartu', $data['nomor_kartu']) ?>" placeholder="Masukkan Nomor Kartu">
  <?php if (form_error('nomor_kartu')) : ?>
    <span class="text-danger"><?= form_error('nomor_kartu') ?></span>
  <?php endif; ?>
</div>

<div class="form-group">
  <label for="gol_darah_teknikelektro">Golongan Darah</label>
  <select class="form-control" name="gol_darah" id="gol_darah_teknikelektro">
    <option value="O" <?= set_select('gol_darah', 'O', $data['gol_darah'] == 'O') ?>>O</option>
    <option value="A" <?= set_select('gol_darah', 'A', $data['gol_darah'] == 'A') ?>>A</option>
    <option value="B" <?= set_select('gol_darah', 'B', $data['gol_darah'] == 'B') ?>>B</option>
    <option value="AB" <?= set_select('gol_darah', 'AB', $data['gol_darah'] == 'AB') ?>>AB</option>
  </select>
  <?php if (form_error('gol_darah')) : ?>
    <span class="text-danger"><?= form_error('gol_darah') ?></span>
  <?php endif; ?>
</div>

<div class="form-group">
  <label for="status_pegawai_teknikelektro">Status Pegawai</label>
  <select class="form-control" name="status_pegawai" id="status_pegawai_teknikelektro">
    <option value="Tetap" <?= set_select('status_pegawai', 'Tetap', $data['status_pegawai'] == 'Tetap') ?>>Tetap</option>
    <option value="Kontrak" <?= set_select('status_pegawai', 'Kontrak', $data['status_pegawai'] == 'Kontrak') ?>>Kontrak</option>
  </select>
  <?php if (form_error('status_pegawai')) : ?>
    <span class="text-danger"><?= form_error('status_pegawai') ?></span>
  <?php endif; ?>
</div>

<div class="form-group">
  <label for="dosen_pns_teknikelektro">Dosen PNS</label>
  <select class="form-control" name="dosen_pns" id="dosen_pns_teknikelektro">
    <option value="1" <?= set_select('dosen_pns', '1', $data['dosen_pns'] == '1') ?>>Ya</option>
    <option value="0" <?= set_select('dosen_pns', '0', $data['dosen_pns'] == '0') ?>>Tidak</option>
  </select>
  <?php if (form_error('dosen_pns')) : ?>
    <span class="text-danger"><?= form_error('dosen_pns') ?></span>
  <?php endif; ?>
</div>

<div class="form-group">
  <label for="dosen_tetap_teknikelektro">Dosen Tetap</label>
  <select class="form-control" name="dosen_tetap" id="dosen_tetap_teknikelektro">
    <option value="1" <?= set_select('dosen_tetap', '1', $data['dosen_tetap'] == '1') ?>>Ya</option>
    <option value="0" <?= set_select('dosen_tetap', '0', $data['dosen_tetap'] == '0') ?>>Tidak</option>
  </select>
  <?php if (form_error('dosen_tetap')) : ?>
    <span class="text-danger"><?= form_error('dosen_tetap') ?></span>
  <?php endif; ?>
</div>

<div class="form-group">
  <label for="dosen_kontrak_teknikelektro">Dosen Kontrak</label>
  <select class="form-control" name="dosen_kontrak" id="dosen_kontrak_teknikelektro">
    <option value="1" <?= set_select('dosen_kontrak', '1', $data['dosen_kontrak'] == '1') ?>>Ya</option>
    <option value="0" <?= set_select('dosen_kontrak', '0', $data['dosen_kontrak'] == '0') ?>>Tidak</option>
  </select>
  <?php if (form_error('dosen_kontrak')) : ?>
    <span class="text-danger"><?= form_error('dosen_kontrak') ?></span>
  <?php endif; ?>
</div>

<div class="form-group">
  <label for="tendik_pns_teknikelektro">Tendik PNS</label>
  <select class="form-control" name="tendik_pns" id="tendik_pns_teknikelektro">
    <option value="1" <?= set_select('tendik_pns', '1', $data['tendik_pns'] == '1') ?>>Ya</option>
    <option value="0" <?= set_select('tendik_pns', '0', $data['tendik_pns'] == '0') ?>>Tidak</option>
  </select>
  <?php if (form_error('tendik_pns')) : ?>
    <span class="text-danger"><?= form_error('tendik_pns') ?></span>
  <?php endif; ?>
</div>

<div class="form-group">
  <label for="tendik_tetap_teknikelektro">Tendik Tetap</label>
  <select class="form-control" name="tendik_tetap" id="tendik_tetap_teknikelektro">
    <option value="1" <?= set_select('tendik_tetap', '1', $data['tendik_tetap'] == '1') ?>>Ya</option>
    <option value="0" <?= set_select('tendik_tetap', '0', $data['tendik_tetap'] == '0') ?>>Tidak</option>
  </select>
  <?php if (form_error('tendik_tetap')) : ?>
    <span class="text-danger"><?= form_error('tendik_tetap') ?></span>
  <?php endif; ?>
</div>

<div class="form-group">
  <label for="tendik_kontrak_teknikelektro">Tendik Kontrak</label>
  <select class="form-control" name="tendik_kontrak" id="tendik_kontrak_teknikelektro">
    <option value="1" <?= set_select('tendik_kontrak', '1', $data['tendik_kontrak'] == '1') ?>>Ya</option>
    <option value="0" <?= set_select('tendik_kontrak', '0', $data['tendik_kontrak'] == '0') ?>>Tidak</option>
  </select>
  <?php if (form_error('tendik_kontrak')) : ?>
    <span class="text-danger"><?= form_error('tendik_kontrak') ?></span>
  <?php endif; ?>
</div>

        <!-- Submit Button -->
        <div class="form-group row">
          <div class="col">
            <button class="form-control btn btn-success" type="submit">Update Data</button>
          </div>
        </div>

      </div>
    </div>
  </form>
</div>
<!-- /.container-fluid -->

<!-- /.container-fluid -->

<script>
  $(document).ready(function() {
    // Initialize form visibility based on the type (teknikelektro/tendik)
    let jenis = "<?= $data['jenis'] ?>"; // assuming the type is stored in $data['jenis']
    if (jenis == 'teknikelektro') {
      $('#teknikelektro-form').show();
      $('#tendik-form').hide();
    } else if (jenis == 'tendik') {
      $('#tendik-form').show();
      $('#teknikelektro-form').hide();
    } else {
      $('#teknikelektro-form').hide();
      $('#tendik-form').hide();
    }

    // No need for the type dropdown since we are showing based on existing data
  });
</script>
