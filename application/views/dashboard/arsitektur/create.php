<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="<?= base_url('arsitektur') ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
      <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
    </a>
    <h1 class="h3 mb-0">Tambah arsitektur</h1>
    
  </div>

  <!-- Content Row -->
  <form id="form-arsitektur" action="<?= base_url('arsitektur/store'); ?>" method="POST" enctype="multipart/form-data">
   
    <!-- arsitektur Form -->
    <div class="card mt-3">
      <div class="card-header">
        <h3 class="card-title">Lampiran Surat</h3>
      </div>
      <div class="card-body">
      <div class="card-body">
        <div class="form-group">
          <label for="foto_arsitektur">Foto</label>
          <input type="file" class="form-control" name="foto" id="foto_arsitektur">
          <?php if (form_error('foto')) : ?>
            <span class="text-danger"><?= form_error('foto') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="nomor_arsitektur">Nomor Surat</label>
          <input type="text" class="form-control" name="nomor" id="nomor_arsitektur" placeholder="Masukkan Nomor Surat">
          <?php if (form_error('nomor')) : ?>
            <span class="text-danger"><?= form_error('nomor') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tanggal_arsitektur">Tanggal</label>
          <input type="date" class="form-control" name="tanggal" id="tanggal_arsitektur">
          <?php if (form_error('tanggal')) : ?>
            <span class="text-danger"><?= form_error('tanggal') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="nama_arsitektur">Nama</label>
          <input type="text" class="form-control" name="nama" id="nama_arsitektur" placeholder="Masukkan Nama">
          <?php if (form_error('nama')) : ?>
            <span class="text-danger"><?= form_error('nama') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="jenis_kelamin_arsitektur">Jenis Kelamin</label>
          <select class="form-control" name="jenis_kelamin" id="jenis_kelamin_arsitektur">
            <option value="Laki-laki" selected>Laki - Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
          <?php if (form_error('jenis_kelamin')) : ?>
            <span class="text-danger"><?= form_error('jenis_kelamin') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tempat_lahir_arsitektur">Tempat Lahir</label>
          <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir_arsitektur" placeholder="Masukkan Tempat Lahir">
          <?php if (form_error('tempat_lahir')) : ?>
            <span class="text-danger"><?= form_error('tempat_lahir') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="agama_arsitektur">Agama</label>
          <input type="text" class="form-control" name="agama" id="agama_arsitektur" placeholder="Masukkan Agama">
          <?php if (form_error('agama')) : ?>
            <span class="text-danger"><?= form_error('agama') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="alamat_arsitektur">Alamat</label>
          <textarea class="form-control" name="alamat" id="alamat_arsitektur" placeholder="Masukkan Alamat"></textarea>
          <?php if (form_error('alamat')) : ?>
            <span class="text-danger"><?= form_error('alamat') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_hp_arsitektur">Nomor HP</label>
          <input type="text" class="form-control" name="no_hp" id="no_hp_arsitektur" placeholder="Masukkan No HP">
          <?php if (form_error('no_hp')) : ?>
            <span class="text-danger"><?= form_error('no_hp') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_rumah_arsitektur">Nomor Telpon Rumah</label>
          <input type="text" class="form-control" name="no_rumah" id="no_rumah_arsitektur" placeholder="Masukkan No Rumah">
          <?php if (form_error('no_rumah')) : ?>
            <span class="text-danger"><?= form_error('no_rumah') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="asal_sd_arsitektur">Asal Sekolah SD</label>
          <input type="text" class="form-control" name="asal_sd" id="asal_sd_arsitektur" placeholder="Masukkan Asal SD">
          <?php if (form_error('asal_sd')) : ?>
            <span class="text-danger"><?= form_error('asal_sd') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tanggal_sd_arsitektur">Tanggal Lulus SD</label>
          <input type="date" class="form-control" name="tanggal_sd" id="tanggal_sd_arsitektur">
          <?php if (form_error('tanggal_sd')) : ?>
            <span class="text-danger"><?= form_error('tanggal_sd') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_ijasah_sd_arsitektur">No Ijasah SD</label>
          <input type="text" class="form-control" name="no_ijasah_sd" id="no_ijasah_sd_arsitektur" placeholder="Masukkan No Ijasah SD">
          <?php if (form_error('no_ijasah_sd')) : ?>
            <span class="text-danger"><?= form_error('no_ijasah_sd') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="asal_sltp_arsitektur">Asal Sekolah SLTP</label>
          <input type="text" class="form-control" name="asal_sltp" id="asal_sltp_arsitektur" placeholder="Masukkan Asal SLTP">
          <?php if (form_error('asal_sltp')) : ?>
            <span class="text-danger"><?= form_error('asal_sltp') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tanggal_sltp_arsitektur">Tanggal Lulus SLTP</label>
          <input type="date" class="form-control" name="tanggal_sltp" id="tanggal_sltp_arsitektur">
          <?php if (form_error('tanggal_sltp')) : ?>
            <span class="text-danger"><?= form_error('tanggal_sltp') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_ijasah_sltp_arsitektur">No Ijasah SLTP</label>
          <input type="text" class="form-control" name="no_ijasah_sltp" id="no_ijasah_sltp_arsitektur" placeholder="Masukkan No Ijasah SLTP">
          <?php if (form_error('no_ijasah_sltp')) : ?>
            <span class="text-danger"><?= form_error('no_ijasah_sltp') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="asal_slta_arsitektur">Asal Sekolah SLTA</label>
          <input type="text" class="form-control" name="asal_slta" id="asal_slta_arsitektur" placeholder="Masukkan Asal SLTA">
          <?php if (form_error('asal_slta')) : ?>
            <span class="text-danger"><?= form_error('asal_slta') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tanggal_slta_arsitektur">Tanggal Lulus SLTA</label>
          <input type="date" class="form-control" name="tanggal_slta" id="tanggal_slta_arsitektur">
          <?php if (form_error('tanggal_slta')) : ?>
            <span class="text-danger"><?= form_error('tanggal_slta') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_ijasah_slta_arsitektur">No Ijasah SLTA</label>
          <input type="text" class="form-control" name="no_ijasah_slta" id="no_ijasah_slta_arsitektur" placeholder="Masukkan No Ijasah SLTA">
          <?php if (form_error('no_ijasah_slta')) : ?>
            <span class="text-danger"><?= form_error('no_ijasah_slta') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="kualifikasi_d3_arsitektur">Kualifikasi Akademik D3</label>
          <input type="text" class="form-control" name="kualifikasi_d3" id="kualifikasi_d3_arsitektur" placeholder="Masukkan Kualifikasi D3">
          <?php if (form_error('kualifikasi_d3')) : ?>
            <span class="text-danger"><?= form_error('kualifikasi_d3') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="universitas_d3_arsitektur">Nama Universitas D3</label>
          <input type="text" class="form-control" name="universitas_d3" id="universitas_d3_arsitektur" placeholder="Masukkan Universitas D3">
          <?php if (form_error('universitas_d3')) : ?>
            <span class="text-danger"><?= form_error('universitas_d3') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tanggal_d3_arsitektur">Tanggal Lulus D3</label>
          <input type="date" class="form-control" name="tanggal_d3" id="tanggal_d3_arsitektur">
          <?php if (form_error('tanggal_d3')) : ?>
            <span class="text-danger"><?= form_error('tanggal_d3') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_ijasah_d3_arsitektur">No Ijasah D3</label>
          <input type="text" class="form-control" name="no_ijasah_d3" id="no_ijasah_d3_arsitektur" placeholder="Masukkan No Ijasah D3">
          <?php if (form_error('no_ijasah_d3')) : ?>
            <span class="text-danger"><?= form_error('no_ijasah_d3') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="gelar_d3_arsitektur">Gelar D3</label>
          <input type="text" class="form-control" name="gelar_d3" id="gelar_d3_arsitektur" placeholder="Masukkan Gelar D3">
          <?php if (form_error('gelar_d3')) : ?>
            <span class="text-danger"><?= form_error('gelar_d3') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="kualifikasi_s1_arsitektur">Kualifikasi Akademik S1</label>
          <input type="text" class="form-control" name="kualifikasi_s1" id="kualifikasi_s1_arsitektur" placeholder="Masukkan Kualifikasi S1">
          <?php if (form_error('kualifikasi_s1')) : ?>
            <span class="text-danger"><?= form_error('kualifikasi_s1') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="universitas_s1_arsitektur">Nama Universitas S1</label>
          <input type="text" class="form-control" name="universitas_s1" id="universitas_s1_arsitektur" placeholder="Masukkan Universitas S1">
          <?php if (form_error('universitas_s1')) : ?>
            <span class="text-danger"><?= form_error('universitas_s1') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tanggal_s1_arsitektur">Tanggal Lulus S1</label>
          <input type="date" class="form-control" name="tanggal_s1" id="tanggal_s1_arsitektur">
          <?php if (form_error('tanggal_s1')) : ?>
            <span class="text-danger"><?= form_error('tanggal_s1') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_ijasah_s1_arsitektur">No Ijasah S1</label>
          <input type="text" class="form-control" name="no_ijasah_s1" id="no_ijasah_s1_arsitektur" placeholder="Masukkan No Ijasah S1">
          <?php if (form_error('no_ijasah_s1')) : ?>
            <span class="text-danger"><?= form_error('no_ijasah_s1') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="gelar_s1_arsitektur">Gelar S1</label>
          <input type="text" class="form-control" name="gelar_s1" id="gelar_s1_arsitektur" placeholder="Masukkan Gelar S1">
          <?php if (form_error('gelar_s1')) : ?>
            <span class="text-danger"><?= form_error('gelar_s1') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="kualifikasi_s2_arsitektur">Kualifikasi Akademik S2</label>
          <input type="text" class="form-control" name="kualifikasi_s2" id="kualifikasi_s2_arsitektur" placeholder="Masukkan Kualifikasi S2">
          <?php if (form_error('kualifikasi_s2')) : ?>
            <span class="text-danger"><?= form_error('kualifikasi_s2') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="universitas_s2_arsitektur">Nama Universitas S2</label>
          <input type="text" class="form-control" name="universitas_s2" id="universitas_s2_arsitektur" placeholder="Masukkan Universitas S2">
          <?php if (form_error('universitas_s2')) : ?>
            <span class="text-danger"><?= form_error('universitas_s2') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tanggal_s2_arsitektur">Tanggal Lulus S2</label>
          <input type="date" class="form-control" name="tanggal_s2" id="tanggal_s2_arsitektur">
          <?php if (form_error('tanggal_s2')) : ?>
            <span class="text-danger"><?= form_error('tanggal_s2') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_ijasah_s2_arsitektur">No Ijasah S2</label>
          <input type="text" class="form-control" name="no_ijasah_s2" id="no_ijasah_s2_arsitektur" placeholder="Masukkan No Ijasah S2">
          <?php if (form_error('no_ijasah_s2')) : ?>
            <span class="text-danger"><?= form_error('no_ijasah_s2') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="gelar_s2_arsitektur">Gelar S2</label>
          <input type="text" class="form-control" name="gelar_s2" id="gelar_s2_arsitektur" placeholder="Masukkan Gelar S2">
          <?php if (form_error('gelar_s2')) : ?>
            <span class="text-danger"><?= form_error('gelar_s2') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="kualifikasi_s3_arsitektur">Kualifikasi Akademik S3</label>
          <input type="text" class="form-control" name="kualifikasi_s3" id="kualifikasi_s3_arsitektur" placeholder="Masukkan Kualifikasi S3">
          <?php if (form_error('kualifikasi_s3')) : ?>
            <span class="text-danger"><?= form_error('kualifikasi_s3') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="universitas_s3_arsitektur">Nama Universitas S3</label>
          <input type="text" class="form-control" name="universitas_s3" id="universitas_s3_arsitektur" placeholder="Masukkan Universitas S3">
          <?php if (form_error('universitas_s3')) : ?>
            <span class="text-danger"><?= form_error('universitas_s3') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tanggal_s3_arsitektur">Tanggal Lulus S3</label>
          <input type="date" class="form-control" name="tanggal_s3" id="tanggal_s3_arsitektur">
          <?php if (form_error('tanggal_s3')) : ?>
            <span class="text-danger"><?= form_error('tanggal_s3') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_ijasah_s3_arsitektur">No Ijasah S3</label>
          <input type="text" class="form-control" name="no_ijasah_s3" id="no_ijasah_s3_arsitektur" placeholder="Masukkan No Ijasah S3">
          <?php if (form_error('no_ijasah_s3')) : ?>
            <span class="text-danger"><?= form_error('no_ijasah_s3') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="gelar_s3_arsitektur">Gelar S3</label>
          <input type="text" class="form-control" name="gelar_s3" id="gelar_s3_arsitektur" placeholder="Masukkan Gelar S3">
          <?php if (form_error('gelar_s3')) : ?>
            <span class="text-danger"><?= form_error('gelar_s3') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="sertifikat_formal_arsitektur">Sertifikat Formal</label>
          <input type="text" class="form-control" name="sertifikat_formal" id="sertifikat_formal_arsitektur" placeholder="Masukkan Sertifikat Formal">
          <?php if (form_error('sertifikat_formal')) : ?>
            <span class="text-danger"><?= form_error('sertifikat_formal') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="sertifikat_nonformal_arsitektur">Sertifikat Nonformal</label>
          <input type="text" class="form-control" name="sertifikat_nonformal" id="sertifikat_nonformal_arsitektur" placeholder="Masukkan Sertifikat Nonformal">
          <?php if (form_error('sertifikat_nonformal')) : ?>
            <span class="text-danger"><?= form_error('sertifikat_nonformal') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="sk_cpns_arsitektur">Nomor SK CPNS</label>
          <input type="text" class="form-control" name="sk_cpns" id="sk_cpns_arsitektur" placeholder="Masukkan SK CPNS">
          <?php if (form_error('sk_cpns')) : ?>
            <span class="text-danger"><?= form_error('sk_cpns') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tmt_cpns_arsitektur">TMT CPNS</label>
          <input type="date" class="form-control" name="tmt_cpns" id="tmt_cpns_arsitektur">
          <?php if (form_error('tmt_cpns')) : ?>
            <span class="text-danger"><?= form_error('tmt_cpns') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="pejabat_cpns_arsitektur">Pejabat Yang Mengankat CPNS</label>
          <input type="text" class="form-control" name="pejabat_cpns" id="pejabat_cpns_arsitektur" placeholder="Masukkan Pejabat CPNS">
          <?php if (form_error('pejabat_cpns')) : ?>
            <span class="text-danger"><?= form_error('pejabat_cpns') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="spmt_cpns_arsitektur">No SPMT CPNS</label>
          <input type="text" class="form-control" name="spmt_cpns" id="spmt_cpns_arsitektur" placeholder="Masukkan SPMT CPNS">
          <?php if (form_error('spmt_cpns')) : ?>
            <span class="text-danger"><?= form_error('spmt_cpns') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tglspmt_cpns_arsitektur">Tanggal SPMT CPNS</label>
          <input type="date" class="form-control" name="tglspmt_cpns" id="tglspmt_cpns_arsitektur">
          <?php if (form_error('tglspmt_cpns')) : ?>
            <span class="text-danger"><?= form_error('tglspmt_cpns') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="sttpl_cpns_arsitektur">No STTPL CPNS</label>
          <input type="text" class="form-control" name="sttpl_cpns" id="sttpl_cpns_arsitektur" placeholder="Masukkan STTPL CPNS">
          <?php if (form_error('sttpl_cpns')) : ?>
            <span class="text-danger"><?= form_error('sttpl_cpns') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tglsttpl_cpns_arsitektur">Tanggal STTPL CPNS</label>
          <input type="date" class="form-control" name="tglsttpl_cpns" id="tglsttpl_cpns_arsitektur">
          <?php if (form_error('tglsttpl_cpns')) : ?>
            <span class="text-danger"><?= form_error('tglsttpl_cpns') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="sk_pns_arsitektur">No SK PNS</label>
          <input type="text" class="form-control" name="sk_pns" id="sk_pns_arsitektur" placeholder="Masukkan SK PNS">
          <?php if (form_error('sk_pns')) : ?>
            <span class="text-danger"><?= form_error('sk_pns') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tmt_pns_arsitektur">TMT PNS</label>
          <input type="date" class="form-control" name="tmt_pns" id="tmt_pns_arsitektur">
          <?php if (form_error('tmt_pns')) : ?>
            <span class="text-danger"><?= form_error('tmt_pns') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="pejabat_pns_arsitektur">Pejabat Yang Mengankat PNS</label>
          <input type="text" class="form-control" name="pejabat_pns" id="pejabat_pns_arsitektur" placeholder="Masukkan Pejabat PNS">
          <?php if (form_error('pejabat_pns')) : ?>
            <span class="text-danger"><?= form_error('pejabat_pns') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="karis_pns_arsitektur">KARIS/KARSU PNS</label>
          <input type="text" class="form-control" name="karis_pns" id="karis_pns_arsitektur" placeholder="Masukkan KARIS PNS">
          <?php if (form_error('karis_pns')) : ?>
            <span class="text-danger"><?= form_error('karis_pns') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="taspen_pns_arsitektur">TASPEN PNS</label>
          <input type="text" class="form-control" name="taspen_pns" id="taspen_pns_arsitektur" placeholder="Masukkan TASPEN PNS">
          <?php if (form_error('taspen_pns')) : ?>
            <span class="text-danger"><?= form_error('taspen_pns') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="karpeg_pns_arsitektur">KARPEG PNS</label>
          <input type="text" class="form-control" name="karpeg_pns" id="karpeg_pns_arsitektur" placeholder="Masukkan KARPEG PNS">
          <?php if (form_error('karpeg_pns')) : ?>
            <span class="text-danger"><?= form_error('karpeg_pns') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="sk_dostap_arsitektur">No SK DOSTAP</label>
          <input type="text" class="form-control" name="sk_dostap" id="sk_dostap_arsitektur" placeholder="Masukkan SK DOSTAP">
          <?php if (form_error('sk_dostap')) : ?>
            <span class="text-danger"><?= form_error('sk_dostap') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tmt_dostap_arsitektur">TMT DOSTAP</label>
          <input type="date" class="form-control" name="tmt_dostap" id="tmt_dostap_arsitektur" placeholder="Masukkan TMT DOSTAP">
          <?php if (form_error('tmt_dostap')) : ?>
            <span class="text-danger"><?= form_error('tmt_dostap') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="pejabat_dostap_arsitektur">Pejabatan Yang Mengankat DOSTAP</label>
          <input type="text" class="form-control" name="pejabat_dostap" id="pejabat_dostap_arsitektur" placeholder="Masukkan SK Jabatan">
          <?php if (form_error('pejabat_dostap')) : ?>
            <span class="text-danger"><?= form_error('pejabat_dostap') ?></span>
          <?php endif; ?>
        </div>     
        <div class="form-group">
          <label for="sk_dostrak_arsitektur">No SK DOSTRAK</label>
          <input type="text" class="form-control" name="sk_dostrak" id="sk_dostrak_arsitektur" placeholder="Masukkan SK DOSTRAK">
          <?php if (form_error('sk_dostrak')) : ?>
            <span class="text-danger"><?= form_error('sk_dostrak') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tmt_dostrak_arsitektur">TMT DOSTRAK</label>
          <input type="date" class="form-control" name="tmt_dostrak" id="tmt_dostrak_arsitektur">
          <?php if (form_error('tmt_dostrak')) : ?>
            <span class="text-danger"><?= form_error('tmt_dostrak') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="pejabat_dostrak_arsitektur">Pejabat Yang Mengangkat DOSTRAK</label>
          <input type="text" class="form-control" name="pejabat_dostrak" id="pejabat_dostrak_arsitektur" placeholder="Masukkan Pejabat DOSTRAK">
          <?php if (form_error('pejabat_dostrak')) : ?>
            <span class="text-danger"><?= form_error('pejabat_dostrak') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="sk_petap_arsitektur">No SK PETAP</label>
          <input type="text" class="form-control" name="sk_petap" id="sk_petap_arsitektur" placeholder="Masukkan SK PETAP">
          <?php if (form_error('sk_petap')) : ?>
            <span class="text-danger"><?= form_error('sk_petap') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tmt_petap_arsitektur">TMT PETAP</label>
          <input type="date" class="form-control" name="tmt_petap" id="tmt_petap_arsitektur">
          <?php if (form_error('tmt_petap')) : ?>
            <span class="text-danger"><?= form_error('tmt_petap') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="pejabat_petap_arsitektur">Pejabat Yang Mengangkat PETAP</label>
          <input type="text" class="form-control" name="pejabat_petap" id="pejabat_petap_arsitektur" placeholder="Masukkan Pejabat PETAP">
          <?php if (form_error('pejabat_petap')) : ?>
            <span class="text-danger"><?= form_error('pejabat_petap') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="sk_petrak_arsitektur">No SK PETRAK</label>
          <input type="text" class="form-control" name="sk_petrak" id="sk_petrak_arsitektur" placeholder="Masukkan SK PETRAK">
          <?php if (form_error('sk_petrak')) : ?>
            <span class="text-danger"><?= form_error('sk_petrak') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tmt_petrak_arsitektur">TMT PETRAK</label>
          <input type="date" class="form-control" name="tmt_petrak" id="tmt_petrak_arsitektur">
          <?php if (form_error('tmt_petrak')) : ?>
            <span class="text-danger"><?= form_error('tmt_petrak') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="pejabat_petrak_arsitektur">Pejabat Yang Mengangkat PETRAK</label>
          <input type="text" class="form-control" name="pejabat_petrak" id="pejabat_petrak_arsitektur" placeholder="Masukkan Pejabat PETRAK">
          <?php if (form_error('pejabat_petrak')) : ?>
            <span class="text-danger"><?= form_error('pejabat_petrak') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="nip_arsitektur">NIP</label>
          <input type="text" class="form-control" name="nip" id="nip_arsitektur" placeholder="Masukkan NIP">
          <?php if (form_error('nip')) : ?>
            <span class="text-danger"><?= form_error('nip') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="nidn_arsitektur">NIDN</label>
          <input type="text" class="form-control" name="nidn" id="nidn_arsitektur" placeholder="Masukkan NIDN">
          <?php if (form_error('nidn')) : ?>
            <span class="text-danger"><?= form_error('nidn') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="nik_arsitektur">NIK</label>
          <input type="text" class="form-control" name="nik" id="nik_arsitektur" placeholder="Masukkan NIK">
          <?php if (form_error('nik')) : ?>
            <span class="text-danger"><?= form_error('nik') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="total_ak1_arsitektur">Total AK Asisten Ahli/III.a (100)</label>
          <input type="text" class="form-control" name="total_ak1" id="total_ak1_arsitektur" placeholder="Masukkan Total AK Asisten Ahli/III.a (100)">
          <?php if (form_error('total_ak1')) : ?>
            <span class="text-danger"><?= form_error('total_ak1') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tmt1_arsitektur">TMT Asisten Ahli/III.a (100)</label>
          <input type="date" class="form-control" name="tmt1" id="tmt1_arsitektur">
          <?php if (form_error('tmt1')) : ?>
            <span class="text-danger"><?= form_error('tmt1') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_sk1_arsitektur">No SK PAK Asisten Ahli/III.a (100)</label>
          <input type="text" class="form-control" name="no_sk1" id="no_sk1_arsitektur" placeholder="Masukkan No SK PAK Asisten Ahli/III.a (100)">
          <?php if (form_error('no_sk1')) : ?>
            <span class="text-danger"><?= form_error('no_sk1') ?></span>
          <?php endif; ?>
        </div>

        <div class="form-group">
          <label for="total_ak2_arsitektur">Total AK Asisten Ahli/III.b (150)</label>
          <input type="text" class="form-control" name="total_ak2" id="total_ak2_arsitektur" placeholder="Masukkan Total AK Asisten Ahli/III.b (150)">
          <?php if (form_error('total_ak2')) : ?>
            <span class="text-danger"><?= form_error('total_ak2') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tmt2_arsitektur">TMT Asisten Ahli/III.b (150)</label>
          <input type="date" class="form-control" name="tmt2" id="tmt2_arsitektur">
          <?php if (form_error('tmt2')) : ?>
            <span class="text-danger"><?= form_error('tmt2') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_sk2_arsitektur">No SK PAK Asisten Ahli/III.b (150)</label>
          <input type="text" class="form-control" name="no_sk2" id="no_sk2_arsitektur" placeholder="Masukkan No SK PAK Asisten Ahli/III.b (150)">
          <?php if (form_error('no_sk2')) : ?>
            <span class="text-danger"><?= form_error('no_sk2') ?></span>
          <?php endif; ?>
        </div>

        <div class="form-group">
          <label for="total_ak3_arsitektur">Total AK Lektor/III.c (200)</label>
          <input type="text" class="form-control" name="total_ak3" id="total_ak3_arsitektur" placeholder="Masukkan Total AK Lektor/III.c (200)">
          <?php if (form_error('total_ak3')) : ?>
            <span class="text-danger"><?= form_error('total_ak3') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tmt3_arsitektur">TMT Lektor/III.c (200)</label>
          <input type="date" class="form-control" name="tmt3" id="tmt3_arsitektur">
          <?php if (form_error('tmt3')) : ?>
            <span class="text-danger"><?= form_error('tmt3') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_sk3_arsitektur">No SK PAK Lektor/III.c (200)</label>
          <input type="text" class="form-control" name="no_sk3" id="no_sk3_arsitektur" placeholder="Masukkan No SK PAK Lektor/III.c (200)">
          <?php if (form_error('no_sk3')) : ?>
            <span class="text-danger"><?= form_error('no_sk3') ?></span>
          <?php endif; ?>
        </div>

        <div class="form-group">
          <label for="total_ak4_arsitektur">Total AK Lektor/III.d (300)</label>
          <input type="text" class="form-control" name="total_ak4" id="total_ak4_arsitektur" placeholder="Masukkan Total AK Lektor/III.d (300)">
          <?php if (form_error('total_ak4')) : ?>
            <span class="text-danger"><?= form_error('total_ak4') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tmt4_arsitektur">TMT Lektor/III.d (300)</label>
          <input type="date" class="form-control" name="tmt4" id="tmt4_arsitektur">
          <?php if (form_error('tmt4')) : ?>
            <span class="text-danger"><?= form_error('tmt4') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_sk4_arsitektur">No SK PAK Lektor/III.d (300)</label>
          <input type="text" class="form-control" name="no_sk4" id="no_sk4_arsitektur" placeholder="Masukkan No SK PAK Lektor/III.d (300)">
          <?php if (form_error('no_sk4')) : ?>
            <span class="text-danger"><?= form_error('no_sk4') ?></span>
          <?php endif; ?>
        </div>

        <div class="form-group">
          <label for="total_ak5_arsitektur">Total AK Lekor Kepala/IV.a (400)</label>
          <input type="text" class="form-control" name="total_ak5" id="total_ak5_arsitektur" placeholder="Masukkan Total AK Lekor Kepala/IV.a (400)">
          <?php if (form_error('total_ak5')) : ?>
            <span class="text-danger"><?= form_error('total_ak5') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tmt5_arsitektur">TMT Lekor Kepala/IV.a (400)</label>
          <input type="date" class="form-control" name="tmt5" id="tmt5_arsitektur">
          <?php if (form_error('tmt5')) : ?>
            <span class="text-danger"><?= form_error('tmt5') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_sk5_arsitektur">No SK PAK Lekor Kepala/IV.a (400)</label>
          <input type="text" class="form-control" name="no_sk5" id="no_sk5_arsitektur" placeholder="Masukkan No SK PAK Lekor Kepala/IV.a (400)">
          <?php if (form_error('no_sk5')) : ?>
            <span class="text-danger"><?= form_error('no_sk5') ?></span>
          <?php endif; ?>
        </div>

        <div class="form-group">
          <label for="total_ak6_arsitektur">Total AK Lekor Kepala/IV.b (550)</label>
          <input type="text" class="form-control" name="total_ak6" id="total_ak6_arsitektur" placeholder="Masukkan Total AK Lekor Kepala/IV.b (550)">
          <?php if (form_error('total_ak6')) : ?>
            <span class="text-danger"><?= form_error('total_ak6') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tmt6_arsitektur">TMT Lekor Kepala/IV.b (550)</label>
          <input type="date" class="form-control" name="tmt6" id="tmt6_arsitektur">
          <?php if (form_error('tmt6')) : ?>
            <span class="text-danger"><?= form_error('tmt6') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_sk6_arsitektur">No SK PAK Lekor Kepala/IV.b (550)</label>
          <input type="text" class="form-control" name="no_sk6" id="no_sk6_arsitektur" placeholder="Masukkan No SK PAK Lekor Kepala/IV.b (550)">
          <?php if (form_error('no_sk6')) : ?>
            <span class="text-danger"><?= form_error('no_sk6') ?></span>
          <?php endif; ?>
        </div>

    
        <div class="form-group">
          <label for="tmt7_arsitektur">TMT Penata Muda/III.a</label>
          <input type="text" class="form-control" name="tmt7" id="tmt7_arsitektur" placeholder="Masukkan TMT Penata Muda/III.a">
          <?php if (form_error('tmt7')) : ?>
            <span class="text-danger"><?= form_error('tmt7') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_sk7_arsitektur">No SK Penata Muda/III.a</label>
          <input type="text" class="form-control" name="no_sk7" id="no_sk7_arsitektur" placeholder="Masukkan No SK Penata Muda/III.a">
          <?php if (form_error('no_sk7')) : ?>
            <span class="text-danger"><?= form_error('no_sk7') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tgl_sk7_arsitektur">Tanggal SK Penata Muda/III.a</label>
          <input type="date" class="form-control" name="tgl_sk7" id="tgl_sk7_arsitektur">
          <?php if (form_error('tgl_sk7')) : ?>
            <span class="text-danger"><?= form_error('tgl_sk7') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="bkn_sk7_arsitektur">No BKN Penata Muda/III.a</label>
          <input type="text" class="form-control" name="bkn_sk7" id="bkn_sk7_arsitektur" placeholder="Masukkan BKN Penata Muda/III.a">
          <?php if (form_error('bkn_sk7')) : ?>
            <span class="text-danger"><?= form_error('bkn_sk7') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tglbkn_sk7_arsitektur">Tanggal BKN Penata Muda/III.a</label>
          <input type="date" class="form-control" name="tglbkn_sk7" id="tglbkn_sk7_arsitektur">
          <?php if (form_error('tglbkn_sk7')) : ?>
            <span class="text-danger"><?= form_error('tglbkn_sk7') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="jenis_pangkat7_arsitektur">Jenis Pangkat Penata Muda/III.a</label>
          <input type="text" class="form-control" name="jenis_pangkat7" id="jenis_pangkat7_arsitektur" placeholder="Masukkan Jenis Pangkat Penata Muda/III.a">
          <?php if (form_error('jenis_pangkat7')) : ?>
            <span class="text-danger"><?= form_error('jenis_pangkat7') ?></span>
          <?php endif; ?>
        </div>
        
<div class="form-group">
  <label for="tmt8_arsitektur">TMT Penata Muda Tk.I/III.b</label>
  <input type="text" class="form-control" name="tmt8" id="tmt8_arsitektur" placeholder="Masukkan TMT Penata Muda Tk.I/III.b">
  <?php if (form_error('tmt8')) : ?>
    <span class="text-danger"><?= form_error('tmt8') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="no_sk8_arsitektur">No SK Penata Muda Tk.I/III.b</label>
  <input type="text" class="form-control" name="no_sk8" id="no_sk8_arsitektur" placeholder="Masukkan No SK Penata Muda Tk.I/III.b">
  <?php if (form_error('no_sk8')) : ?>
    <span class="text-danger"><?= form_error('no_sk8') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="tgl_sk8_arsitektur">Tanggal SK Penata Muda Tk.I/III.b</label>
  <input type="date" class="form-control" name="tgl_sk8" id="tgl_sk8_arsitektur">
  <?php if (form_error('tgl_sk8')) : ?>
    <span class="text-danger"><?= form_error('tgl_sk8') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="bkn_sk8_arsitektur">BKN Penata Muda Tk.I/III.b</label>
  <input type="text" class="form-control" name="bkn_sk8" id="bkn_sk8_arsitektur" placeholder="Masukkan BKN Penata Muda Tk.I/III.b">
  <?php if (form_error('bkn_sk8')) : ?>
    <span class="text-danger"><?= form_error('bkn_sk8') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="tglbkn_sk8_arsitektur">Tanggal BKN Penata Muda Tk.I/III.b</label>
  <input type="date" class="form-control" name="tglbkn_sk8" id="tglbkn_sk8_arsitektur">
  <?php if (form_error('tglbkn_sk8')) : ?>
    <span class="text-danger"><?= form_error('tglbkn_sk8') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="jenis_pangkat8_arsitektur">Jenis Pangkat Penata Muda Tk.I/III.b</label>
  <input type="text" class="form-control" name="jenis_pangkat8" id="jenis_pangkat8_arsitektur" placeholder="Masukkan Jenis Pangkat 8">
  <?php if (form_error('jenis_pangkat8')) : ?>
    <span class="text-danger"><?= form_error('jenis_pangkat8') ?></span>
  <?php endif; ?>
</div>


<div class="form-group">
  <label for="tmt9_arsitektur">TMT Penata/III.c</label>
  <input type="text" class="form-control" name="tmt9" id="tmt9_arsitektur" placeholder="Masukkan TMT Penata/III.c">
  <?php if (form_error('tmt9')) : ?>
    <span class="text-danger"><?= form_error('tmt9') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="no_sk9_arsitektur">No SK Penata/III.c</label>
  <input type="text" class="form-control" name="no_sk9" id="no_sk9_arsitektur" placeholder="Masukkan No SK Penata/III.c">
  <?php if (form_error('no_sk9')) : ?>
    <span class="text-danger"><?= form_error('no_sk9') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="tgl_sk9_arsitektur">Tanggal SK Penata/III.c</label>
  <input type="date" class="form-control" name="tgl_sk9" id="tgl_sk9_arsitektur">
  <?php if (form_error('tgl_sk9')) : ?>
    <span class="text-danger"><?= form_error('tgl_sk9') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="bkn_sk9_arsitektur">BKN Penata/III.c</label>
  <input type="text" class="form-control" name="bkn_sk9" id="bkn_sk9_arsitektur" placeholder="Masukkan BKN Penata/III.c">
  <?php if (form_error('bkn_sk9')) : ?>
    <span class="text-danger"><?= form_error('bkn_sk9') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="tglbkn_sk9_arsitektur">Tanggal BKN Penata/III.c</label>
  <input type="date" class="form-control" name="tglbkn_sk9" id="tglbkn_sk9_arsitektur">
  <?php if (form_error('tglbkn_sk9')) : ?>
    <span class="text-danger"><?= form_error('tglbkn_sk9') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="jenis_pangkat9_arsitektur">Jenis Pangkat Penata/III.c</label>
  <input type="text" class="form-control" name="jenis_pangkat9" id="jenis_pangkat9_arsitektur" placeholder="Masukkan Jenis Pangkat Penata/III.c">
  <?php if (form_error('jenis_pangkat9')) : ?>
    <span class="text-danger"><?= form_error('jenis_pangkat9') ?></span>
  <?php endif; ?>
</div>


<div class="form-group">
  <label for="tmt10_arsitektur">TMT Penata Tk.I/III.d</label>
  <input type="text" class="form-control" name="tmt10" id="tmt10_arsitektur">
  <?php if (form_error('tmt10')) : ?>
    <span class="text-danger"><?= form_error('tmt10') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="no_sk10_arsitektur">No SK Penata Tk.I/III.d</label>
  <input type="text" class="form-control" name="no_sk10" id="no_sk10_arsitektur" placeholder="Masukkan No SK Penata Tk.I/III.d">
  <?php if (form_error('no_sk10')) : ?>
    <span class="text-danger"><?= form_error('no_sk10') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="tgl_sk10_arsitektur">Tanggal SK Penata Tk.I/III.d</label>
  <input type="date" class="form-control" name="tgl_sk10" id="tgl_sk10_arsitektur">
  <?php if (form_error('tgl_sk10')) : ?>
    <span class="text-danger"><?= form_error('tgl_sk10') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="bkn_sk10_arsitektur">BKN Penata Tk.I/III.d</label>
  <input type="text" class="form-control" name="bkn_sk10" id="bkn_sk10_arsitektur" placeholder="Masukkan BKN Penata Tk.I/III.d">
  <?php if (form_error('bkn_sk10')) : ?>
    <span class="text-danger"><?= form_error('bkn_sk10') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="tglbkn_sk10_arsitektur">Tanggal BKN Penata Tk.I/III.d</label>
  <input type="date" class="form-control" name="tglbkn_sk10" id="tglbkn_sk10_arsitektur">
  <?php if (form_error('tglbkn_sk10')) : ?>
    <span class="text-danger"><?= form_error('tglbkn_sk10') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="jenis_pangkat10_arsitektur">Jenis Pangkat Penata Tk.I/III.d</label>
  <input type="text" class="form-control" name="jenis_pangkat10" id="jenis_pangkat10_arsitektur" placeholder="Masukkan Jenis Pangkat Penata Tk.I/III.d">
  <?php if (form_error('jenis_pangkat10')) : ?>
    <span class="text-danger"><?= form_error('jenis_pangkat10') ?></span>
  <?php endif; ?>
</div>


<div class="form-group">
  <label for="tmt11_arsitektur">TMT Pembina/IV.a</label>
  <input type="text" class="form-control" name="tmt11" id="tmt11_arsitektur">
  <?php if (form_error('tmt11')) : ?>
    <span class="text-danger"><?= form_error('tmt11') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="no_sk11_arsitektur">No SK Pembina/IV.a</label>
  <input type="text" class="form-control" name="no_sk11" id="no_sk11_arsitektur" placeholder="Masukkan No SK Pembina/IV.a">
  <?php if (form_error('no_sk11')) : ?>
    <span class="text-danger"><?= form_error('no_sk11') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="tgl_sk11_arsitektur">Tanggal SK Pembina/IV.a</label>
  <input type="date" class="form-control" name="tgl_sk11" id="tgl_sk11_arsitektur">
  <?php if (form_error('tgl_sk11')) : ?>
    <span class="text-danger"><?= form_error('tgl_sk11') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="bkn_sk11_arsitektur">BKN Pembina/IV.a</label>
  <input type="text" class="form-control" name="bkn_sk11" id="bkn_sk11_arsitektur" placeholder="Masukkan BKN Pembina/IV.a">
  <?php if (form_error('bkn_sk11')) : ?>
    <span class="text-danger"><?= form_error('bkn_sk11') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="tglbkn_sk11_arsitektur">Tanggal BKN Pembina/IV.a</label>
  <input type="date" class="form-control" name="tglbkn_sk11" id="tglbkn_sk11_arsitektur">
  <?php if (form_error('tglbkn_sk11')) : ?>
    <span class="text-danger"><?= form_error('tglbkn_sk11') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="jenis_pangkat11_arsitektur">Jenis Pangkat Pembina/IV.a</label>
  <input type="text" class="form-control" name="jenis_pangkat11" id="jenis_pangkat11_arsitektur" placeholder="Masukkan Jenis Pangkat Pembina/IV.a">
  <?php if (form_error('jenis_pangkat11')) : ?>
    <span class="text-danger"><?= form_error('jenis_pangkat11') ?></span>
  <?php endif; ?>
</div>


<div class="form-group">
  <label for="tmt12_arsitektur">TMT Pembina Tk.I/IV.b</label>
  <input type="text" class="form-control" name="tmt12" id="tmt12_arsitektur">
  <?php if (form_error('tmt12')) : ?>
    <span class="text-danger"><?= form_error('tmt12') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="no_sk12_arsitektur">No SK Pembina Tk.I/IV.b</label>
  <input type="text" class="form-control" name="no_sk12" id="no_sk12_arsitektur" placeholder="Masukkan No SK Pembina Tk.I/IV.b">
  <?php if (form_error('no_sk12')) : ?>
    <span class="text-danger"><?= form_error('no_sk12') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="tgl_sk12_arsitektur">Tanggal SK Pembina Tk.I/IV.b</label>
  <input type="date" class="form-control" name="tgl_sk12" id="tgl_sk12_arsitektur">
  <?php if (form_error('tgl_sk12')) : ?>
    <span class="text-danger"><?= form_error('tgl_sk12') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="bkn_sk12_arsitektur">BKN Pembina Tk.I/IV.b</label>
  <input type="text" class="form-control" name="bkn_sk12" id="bkn_sk12_arsitektur" placeholder="Masukkan BKN Pembina Tk.I/IV.b">
  <?php if (form_error('bkn_sk12')) : ?>
    <span class="text-danger"><?= form_error('bkn_sk12') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="tglbkn_sk12_arsitektur">Tanggal BKN Pembina Tk.I/IV.b</label>
  <input type="date" class="form-control" name="tglbkn_sk12" id="tglbkn_sk12_arsitektur">
  <?php if (form_error('tglbkn_sk12')) : ?>
    <span class="text-danger"><?= form_error('tglbkn_sk12') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="jenis_pangkat12_arsitektur">Jenis Pangkat Pembina Tk.I/IV.b</label>
  <input type="text" class="form-control" name="jenis_pangkat12" id="jenis_pangkat12_arsitektur" placeholder="Masukkan Jenis Pangkat Pembina Tk.I/IV.b">
  <?php if (form_error('jenis_pangkat12')) : ?>
    <span class="text-danger"><?= form_error('jenis_pangkat12') ?></span>
  <?php endif; ?>
</div>

        <!-- Repeat similar blocks for tmt8 to tmt12, no_sk8 to no_sk12, tgl_sk8 to tgl_sk12, bkn_sk8 to bkn_sk12, tglbkn_sk8 to tglbkn_sk12, jenis_pangkat8 to jenis_pangkat12 -->

        <div class="form-group">
        <label for="status_kawin_arsitektur">Status Pegawai</label>
          <select class="form-control" name="status_kawin" id="status_kawin_arsitektur">
            <option value="Kawin" selected>Kawin</option>
            <option value="Belum Kawin">Belum Kawin</option>
            <option value="Duda">Duda</option>
            <option value="Janda">Janda</option>
          </select>
          <?php if (form_error('status_kawin')) : ?>
            <span class="text-danger"><?= form_error('status_kawin') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="nama_ayah_arsitektur">Nama Ayah</label>
          <input type="text" class="form-control" name="nama_ayah" id="nama_ayah_arsitektur" placeholder="Masukkan Nama Ayah">
          <?php if (form_error('nama_ayah')) : ?>
            <span class="text-danger"><?= form_error('nama_ayah') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="nama_ibu_arsitektur">Nama Ibu</label>
          <input type="text" class="form-control" name="nama_ibu" id="nama_ibu_arsitektur" placeholder="Masukkan Nama Ibu">
          <?php if (form_error('nama_ibu')) : ?>
            <span class="text-danger"><?= form_error('nama_ibu') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="nama_pasangan_arsitektur">Nama Pasangan</label>
          <input type="text" class="form-control" name="nama_pasangan" id="nama_pasangan_arsitektur" placeholder="Masukkan Nama Pasangan">
          <?php if (form_error('nama_pasangan')) : ?>
            <span class="text-danger"><?= form_error('nama_pasangan') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="nama_anak_arsitektur">Nama Anak</label>
          <input type="text" class="form-control" name="nama_anak" id="nama_anak_arsitektur" placeholder="Masukkan Nama Anak">
          <?php if (form_error('nama_anak')) : ?>
            <span class="text-danger"><?= form_error('nama_anak') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="npwp_arsitektur">NPWP</label>
          <input type="text" class="form-control" name="npwp" id="npwp_arsitektur" placeholder="Masukkan NPWP">
          <?php if (form_error('npwp')) : ?>
            <span class="text-danger"><?= form_error('npwp') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="nomor_rekening_arsitektur">Nomor Rekening</label>
          <input type="text" class="form-control" name="nomor_rekening" id="nomor_rekening_arsitektur" placeholder="Masukkan Nomor Rekening">
          <?php if (form_error('nomor_rekening')) : ?>
            <span class="text-danger"><?= form_error('nomor_rekening') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="nama_kartu_arsitektur">Nama Kartu</label>
          <input type="text" class="form-control" name="nama_kartu" id="nama_kartu_arsitektur" placeholder="Masukkan Nama Kartu">
          <?php if (form_error('nama_kartu')) : ?>
            <span class="text-danger"><?= form_error('nama_kartu') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="nomor_kartu_arsitektur">Nomor Kartu</label>
          <input type="text" class="form-control" name="nomor_kartu" id="nomor_kartu_arsitektur" placeholder="Masukkan Nomor Kartu">
          <?php if (form_error('nomor_kartu')) : ?>
            <span class="text-danger"><?= form_error('nomor_kartu') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
        <label for="gol_darah_arsitektur">Golongan Darah</label>
          <select class="form-control" name="gol_darah" id="gol_darah_arsitektur">
            <option value="O" selected>O</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">AB</option>
          </select>
          <?php if (form_error('gol_darah')) : ?>
            <span class="text-danger"><?= form_error('gol_darah') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="status_pegawai_arsitektur">Status Pegawai</label>
          <select class="form-control" name="status_pegawai" id="status_pegawai_arsitektur">
            <option value="Tetap" selected>Tetap</option>
            <option value="Kontrak">Kontrak</option>
          </select>
          <?php if (form_error('status_pegawai')) : ?>
            <span class="text-danger"><?= form_error('status_pegawai') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="dosen_pns_arsitektur">Dosen PNS</label>
          <select class="form-control" name="dosen_pns" id="dosen_pns_arsitektur">
            <option value="1" selected>Ya</option>
            <option value="0">Tidak</option>
          </select>
          <?php if (form_error('dosen_pns')) : ?>
            <span class="text-danger"><?= form_error('dosen_pns') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="dosen_tetap_arsitektur">Dosen Tetap</label>
          <select class="form-control" name="dosen_tetap" id="dosen_tetap_arsitektur">
            <option value="1" selected>Ya</option>
            <option value="0">Tidak</option>
          </select>
          <?php if (form_error('dosen_tetap')) : ?>
            <span class="text-danger"><?= form_error('dosen_tetap') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="dosen_kontrak_arsitektur">Dosen Kontrak</label>
          <select class="form-control" name="dosen_kontrak" id="dosen_kontrak_arsitektur">
            <option value="1" selected>Ya</option>
            <option value="0">Tidak</option>
          </select>
          <?php if (form_error('dosen_kontrak')) : ?>
            <span class="text-danger"><?= form_error('dosen_kontrak') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tendik_pns_arsitektur">Tendik PNS</label>
          <select class="form-control" name="tendik_pns" id="tendik_pns_arsitektur">
            <option value="1" selected>Ya</option>
            <option value="0">Tidak</option>
          </select>
          <?php if (form_error('tendik_pns')) : ?>
            <span class="text-danger"><?= form_error('tendik_pns') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tendik_tetap_arsitektur">Tendik Tetap</label>
          <select class="form-control" name="tendik_tetap" id="tendik_tetap_arsitektur">
            <option value="1" selected>Ya</option>
            <option value="0">Tidak</option>
          </select>
          <?php if (form_error('tendik_tetap')) : ?>
            <span class="text-danger"><?= form_error('tendik_tetap') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tendik_kontrak_arsitektur">Tendik Kontrak</label>
          <select class="form-control" name="tendik_kontrak" id="tendik_kontrak_arsitektur">
            <option value="1" selected>Ya</option>
            <option value="0">Tidak</option>
          </select>
          <?php if (form_error('tendik_kontrak')) : ?>
            <span class="text-danger"><?= form_error('tendik_kontrak') ?></span>
          <?php endif; ?>
        </div>


        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </form>
</div>
<!-- /.container-fluid -->
