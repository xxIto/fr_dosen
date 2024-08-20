<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="<?= base_url('sisteminformasi') ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
      <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
    </a>
    <h1 class="h3 mb-0">Tambah sistem informasi</h1>
    
  </div>

  <!-- Content Row -->
  <form id="form-sisteminformasi" action="<?= base_url('sisteminformasi/store'); ?>" method="POST" enctype="multipart/form-data">
   
    <!-- sistem informasi Form -->
    <div class="card mt-3">
      <div class="card-header">
        <h3 class="card-title">Lampiran Surat</h3>
      </div>
      <div class="card-body">
      <div class="card-body">
        <div class="form-group">
          <label for="foto_sisteminformasi">Foto</label>
          <input type="file" class="form-control" name="foto" id="foto_sisteminformasi">
          <?php if (form_error('foto')) : ?>
            <span class="text-danger"><?= form_error('foto') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="nomor_sisteminformasi">Nomor Surat</label>
          <input type="text" class="form-control" name="nomor" id="nomor_sisteminformasi" placeholder="Masukkan Nomor Surat">
          <?php if (form_error('nomor')) : ?>
            <span class="text-danger"><?= form_error('nomor') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tanggal_sisteminformasi">Tanggal</label>
          <input type="date" class="form-control" name="tanggal" id="tanggal_sisteminformasi">
          <?php if (form_error('tanggal')) : ?>
            <span class="text-danger"><?= form_error('tanggal') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="nama_sisteminformasi">Nama</label>
          <input type="text" class="form-control" name="nama" id="nama_sisteminformasi" placeholder="Masukkan Nama">
          <?php if (form_error('nama')) : ?>
            <span class="text-danger"><?= form_error('nama') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="jenis_kelamin_sisteminformasi">Jenis Kelamin</label>
          <select class="form-control" name="jenis_kelamin" id="jenis_kelamin_sisteminformasi">
            <option value="Laki-laki" selected>Laki - Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
          <?php if (form_error('jenis_kelamin')) : ?>
            <span class="text-danger"><?= form_error('jenis_kelamin') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tempat_lahir_sisteminformasi">Tempat Lahir</label>
          <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir_sisteminformasi" placeholder="Masukkan Tempat Lahir">
          <?php if (form_error('tempat_lahir')) : ?>
            <span class="text-danger"><?= form_error('tempat_lahir') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="agama_sisteminformasi">Agama</label>
          <input type="text" class="form-control" name="agama" id="agama_sisteminformasi" placeholder="Masukkan Agama">
          <?php if (form_error('agama')) : ?>
            <span class="text-danger"><?= form_error('agama') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="alamat_sisteminformasi">Alamat</label>
          <textarea class="form-control" name="alamat" id="alamat_sisteminformasi" placeholder="Masukkan Alamat"></textarea>
          <?php if (form_error('alamat')) : ?>
            <span class="text-danger"><?= form_error('alamat') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_hp_sisteminformasi">Nomor HP</label>
          <input type="text" class="form-control" name="no_hp" id="no_hp_sisteminformasi" placeholder="Masukkan No HP">
          <?php if (form_error('no_hp')) : ?>
            <span class="text-danger"><?= form_error('no_hp') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_rumah_sisteminformasi">Nomor Telpon Rumah</label>
          <input type="text" class="form-control" name="no_rumah" id="no_rumah_sisteminformasi" placeholder="Masukkan No Rumah">
          <?php if (form_error('no_rumah')) : ?>
            <span class="text-danger"><?= form_error('no_rumah') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="asal_sd_sisteminformasi">Asal Sekolah SD</label>
          <input type="text" class="form-control" name="asal_sd" id="asal_sd_sisteminformasi" placeholder="Masukkan Asal SD">
          <?php if (form_error('asal_sd')) : ?>
            <span class="text-danger"><?= form_error('asal_sd') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tanggal_sd_sisteminformasi">Tanggal Lulus SD</label>
          <input type="date" class="form-control" name="tanggal_sd" id="tanggal_sd_sisteminformasi">
          <?php if (form_error('tanggal_sd')) : ?>
            <span class="text-danger"><?= form_error('tanggal_sd') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_ijasah_sd_sisteminformasi">No Ijasah SD</label>
          <input type="text" class="form-control" name="no_ijasah_sd" id="no_ijasah_sd_sisteminformasi" placeholder="Masukkan No Ijasah SD">
          <?php if (form_error('no_ijasah_sd')) : ?>
            <span class="text-danger"><?= form_error('no_ijasah_sd') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="asal_sltp_sisteminformasi">Asal Sekolah SLTP</label>
          <input type="text" class="form-control" name="asal_sltp" id="asal_sltp_sisteminformasi" placeholder="Masukkan Asal SLTP">
          <?php if (form_error('asal_sltp')) : ?>
            <span class="text-danger"><?= form_error('asal_sltp') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tanggal_sltp_sisteminformasi">Tanggal Lulus SLTP</label>
          <input type="date" class="form-control" name="tanggal_sltp" id="tanggal_sltp_sisteminformasi">
          <?php if (form_error('tanggal_sltp')) : ?>
            <span class="text-danger"><?= form_error('tanggal_sltp') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_ijasah_sltp_sisteminformasi">No Ijasah SLTP</label>
          <input type="text" class="form-control" name="no_ijasah_sltp" id="no_ijasah_sltp_sisteminformasi" placeholder="Masukkan No Ijasah SLTP">
          <?php if (form_error('no_ijasah_sltp')) : ?>
            <span class="text-danger"><?= form_error('no_ijasah_sltp') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="asal_slta_sisteminformasi">Asal Sekolah SLTA</label>
          <input type="text" class="form-control" name="asal_slta" id="asal_slta_sisteminformasi" placeholder="Masukkan Asal SLTA">
          <?php if (form_error('asal_slta')) : ?>
            <span class="text-danger"><?= form_error('asal_slta') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tanggal_slta_sisteminformasi">Tanggal Lulus SLTA</label>
          <input type="date" class="form-control" name="tanggal_slta" id="tanggal_slta_sisteminformasi">
          <?php if (form_error('tanggal_slta')) : ?>
            <span class="text-danger"><?= form_error('tanggal_slta') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_ijasah_slta_sisteminformasi">No Ijasah SLTA</label>
          <input type="text" class="form-control" name="no_ijasah_slta" id="no_ijasah_slta_sisteminformasi" placeholder="Masukkan No Ijasah SLTA">
          <?php if (form_error('no_ijasah_slta')) : ?>
            <span class="text-danger"><?= form_error('no_ijasah_slta') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="kualifikasi_d3_sisteminformasi">Kualifikasi Akademik D3</label>
          <input type="text" class="form-control" name="kualifikasi_d3" id="kualifikasi_d3_sisteminformasi" placeholder="Masukkan Kualifikasi D3">
          <?php if (form_error('kualifikasi_d3')) : ?>
            <span class="text-danger"><?= form_error('kualifikasi_d3') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="universitas_d3_sisteminformasi">Nama Universitas D3</label>
          <input type="text" class="form-control" name="universitas_d3" id="universitas_d3_sisteminformasi" placeholder="Masukkan Universitas D3">
          <?php if (form_error('universitas_d3')) : ?>
            <span class="text-danger"><?= form_error('universitas_d3') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tanggal_d3_sisteminformasi">Tanggal Lulus D3</label>
          <input type="date" class="form-control" name="tanggal_d3" id="tanggal_d3_sisteminformasi">
          <?php if (form_error('tanggal_d3')) : ?>
            <span class="text-danger"><?= form_error('tanggal_d3') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_ijasah_d3_sisteminformasi">No Ijasah D3</label>
          <input type="text" class="form-control" name="no_ijasah_d3" id="no_ijasah_d3_sisteminformasi" placeholder="Masukkan No Ijasah D3">
          <?php if (form_error('no_ijasah_d3')) : ?>
            <span class="text-danger"><?= form_error('no_ijasah_d3') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="gelar_d3_sisteminformasi">Gelar D3</label>
          <input type="text" class="form-control" name="gelar_d3" id="gelar_d3_sisteminformasi" placeholder="Masukkan Gelar D3">
          <?php if (form_error('gelar_d3')) : ?>
            <span class="text-danger"><?= form_error('gelar_d3') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="kualifikasi_s1_sisteminformasi">Kualifikasi Akademik S1</label>
          <input type="text" class="form-control" name="kualifikasi_s1" id="kualifikasi_s1_sisteminformasi" placeholder="Masukkan Kualifikasi S1">
          <?php if (form_error('kualifikasi_s1')) : ?>
            <span class="text-danger"><?= form_error('kualifikasi_s1') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="universitas_s1_sisteminformasi">Nama Universitas S1</label>
          <input type="text" class="form-control" name="universitas_s1" id="universitas_s1_sisteminformasi" placeholder="Masukkan Universitas S1">
          <?php if (form_error('universitas_s1')) : ?>
            <span class="text-danger"><?= form_error('universitas_s1') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tanggal_s1_sisteminformasi">Tanggal Lulus S1</label>
          <input type="date" class="form-control" name="tanggal_s1" id="tanggal_s1_sisteminformasi">
          <?php if (form_error('tanggal_s1')) : ?>
            <span class="text-danger"><?= form_error('tanggal_s1') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_ijasah_s1_sisteminformasi">No Ijasah S1</label>
          <input type="text" class="form-control" name="no_ijasah_s1" id="no_ijasah_s1_sisteminformasi" placeholder="Masukkan No Ijasah S1">
          <?php if (form_error('no_ijasah_s1')) : ?>
            <span class="text-danger"><?= form_error('no_ijasah_s1') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="gelar_s1_sisteminformasi">Gelar S1</label>
          <input type="text" class="form-control" name="gelar_s1" id="gelar_s1_sisteminformasi" placeholder="Masukkan Gelar S1">
          <?php if (form_error('gelar_s1')) : ?>
            <span class="text-danger"><?= form_error('gelar_s1') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="kualifikasi_s2_sisteminformasi">Kualifikasi Akademik S2</label>
          <input type="text" class="form-control" name="kualifikasi_s2" id="kualifikasi_s2_sisteminformasi" placeholder="Masukkan Kualifikasi S2">
          <?php if (form_error('kualifikasi_s2')) : ?>
            <span class="text-danger"><?= form_error('kualifikasi_s2') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="universitas_s2_sisteminformasi">Nama Universitas S2</label>
          <input type="text" class="form-control" name="universitas_s2" id="universitas_s2_sisteminformasi" placeholder="Masukkan Universitas S2">
          <?php if (form_error('universitas_s2')) : ?>
            <span class="text-danger"><?= form_error('universitas_s2') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tanggal_s2_sisteminformasi">Tanggal Lulus S2</label>
          <input type="date" class="form-control" name="tanggal_s2" id="tanggal_s2_sisteminformasi">
          <?php if (form_error('tanggal_s2')) : ?>
            <span class="text-danger"><?= form_error('tanggal_s2') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_ijasah_s2_sisteminformasi">No Ijasah S2</label>
          <input type="text" class="form-control" name="no_ijasah_s2" id="no_ijasah_s2_sisteminformasi" placeholder="Masukkan No Ijasah S2">
          <?php if (form_error('no_ijasah_s2')) : ?>
            <span class="text-danger"><?= form_error('no_ijasah_s2') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="gelar_s2_sisteminformasi">Gelar S2</label>
          <input type="text" class="form-control" name="gelar_s2" id="gelar_s2_sisteminformasi" placeholder="Masukkan Gelar S2">
          <?php if (form_error('gelar_s2')) : ?>
            <span class="text-danger"><?= form_error('gelar_s2') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="kualifikasi_s3_sisteminformasi">Kualifikasi Akademik S3</label>
          <input type="text" class="form-control" name="kualifikasi_s3" id="kualifikasi_s3_sisteminformasi" placeholder="Masukkan Kualifikasi S3">
          <?php if (form_error('kualifikasi_s3')) : ?>
            <span class="text-danger"><?= form_error('kualifikasi_s3') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="universitas_s3_sisteminformasi">Nama Universitas S3</label>
          <input type="text" class="form-control" name="universitas_s3" id="universitas_s3_sisteminformasi" placeholder="Masukkan Universitas S3">
          <?php if (form_error('universitas_s3')) : ?>
            <span class="text-danger"><?= form_error('universitas_s3') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tanggal_s3_sisteminformasi">Tanggal Lulus S3</label>
          <input type="date" class="form-control" name="tanggal_s3" id="tanggal_s3_sisteminformasi">
          <?php if (form_error('tanggal_s3')) : ?>
            <span class="text-danger"><?= form_error('tanggal_s3') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_ijasah_s3_sisteminformasi">No Ijasah S3</label>
          <input type="text" class="form-control" name="no_ijasah_s3" id="no_ijasah_s3_sisteminformasi" placeholder="Masukkan No Ijasah S3">
          <?php if (form_error('no_ijasah_s3')) : ?>
            <span class="text-danger"><?= form_error('no_ijasah_s3') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="gelar_s3_sisteminformasi">Gelar S3</label>
          <input type="text" class="form-control" name="gelar_s3" id="gelar_s3_sisteminformasi" placeholder="Masukkan Gelar S3">
          <?php if (form_error('gelar_s3')) : ?>
            <span class="text-danger"><?= form_error('gelar_s3') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="sertifikat_formal_sisteminformasi">Sertifikat Formal</label>
          <input type="text" class="form-control" name="sertifikat_formal" id="sertifikat_formal_sisteminformasi" placeholder="Masukkan Sertifikat Formal">
          <?php if (form_error('sertifikat_formal')) : ?>
            <span class="text-danger"><?= form_error('sertifikat_formal') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="sertifikat_nonformal_sisteminformasi">Sertifikat Nonformal</label>
          <input type="text" class="form-control" name="sertifikat_nonformal" id="sertifikat_nonformal_sisteminformasi" placeholder="Masukkan Sertifikat Nonformal">
          <?php if (form_error('sertifikat_nonformal')) : ?>
            <span class="text-danger"><?= form_error('sertifikat_nonformal') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="sk_cpns_sisteminformasi">Nomor SK CPNS</label>
          <input type="text" class="form-control" name="sk_cpns" id="sk_cpns_sisteminformasi" placeholder="Masukkan SK CPNS">
          <?php if (form_error('sk_cpns')) : ?>
            <span class="text-danger"><?= form_error('sk_cpns') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tmt_cpns_sisteminformasi">TMT CPNS</label>
          <input type="date" class="form-control" name="tmt_cpns" id="tmt_cpns_sisteminformasi">
          <?php if (form_error('tmt_cpns')) : ?>
            <span class="text-danger"><?= form_error('tmt_cpns') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="pejabat_cpns_sisteminformasi">Pejabat Yang Mengankat CPNS</label>
          <input type="text" class="form-control" name="pejabat_cpns" id="pejabat_cpns_sisteminformasi" placeholder="Masukkan Pejabat CPNS">
          <?php if (form_error('pejabat_cpns')) : ?>
            <span class="text-danger"><?= form_error('pejabat_cpns') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="spmt_cpns_sisteminformasi">No SPMT CPNS</label>
          <input type="text" class="form-control" name="spmt_cpns" id="spmt_cpns_sisteminformasi" placeholder="Masukkan SPMT CPNS">
          <?php if (form_error('spmt_cpns')) : ?>
            <span class="text-danger"><?= form_error('spmt_cpns') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tglspmt_cpns_sisteminformasi">Tanggal SPMT CPNS</label>
          <input type="date" class="form-control" name="tglspmt_cpns" id="tglspmt_cpns_sisteminformasi">
          <?php if (form_error('tglspmt_cpns')) : ?>
            <span class="text-danger"><?= form_error('tglspmt_cpns') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="sttpl_cpns_sisteminformasi">No STTPL CPNS</label>
          <input type="text" class="form-control" name="sttpl_cpns" id="sttpl_cpns_sisteminformasi" placeholder="Masukkan STTPL CPNS">
          <?php if (form_error('sttpl_cpns')) : ?>
            <span class="text-danger"><?= form_error('sttpl_cpns') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tglsttpl_cpns_sisteminformasi">Tanggal STTPL CPNS</label>
          <input type="date" class="form-control" name="tglsttpl_cpns" id="tglsttpl_cpns_sisteminformasi">
          <?php if (form_error('tglsttpl_cpns')) : ?>
            <span class="text-danger"><?= form_error('tglsttpl_cpns') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="sk_pns_sisteminformasi">No SK PNS</label>
          <input type="text" class="form-control" name="sk_pns" id="sk_pns_sisteminformasi" placeholder="Masukkan SK PNS">
          <?php if (form_error('sk_pns')) : ?>
            <span class="text-danger"><?= form_error('sk_pns') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tmt_pns_sisteminformasi">TMT PNS</label>
          <input type="date" class="form-control" name="tmt_pns" id="tmt_pns_sisteminformasi">
          <?php if (form_error('tmt_pns')) : ?>
            <span class="text-danger"><?= form_error('tmt_pns') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="pejabat_pns_sisteminformasi">Pejabat Yang Mengankat PNS</label>
          <input type="text" class="form-control" name="pejabat_pns" id="pejabat_pns_sisteminformasi" placeholder="Masukkan Pejabat PNS">
          <?php if (form_error('pejabat_pns')) : ?>
            <span class="text-danger"><?= form_error('pejabat_pns') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="karis_pns_sisteminformasi">KARIS/KARSU PNS</label>
          <input type="text" class="form-control" name="karis_pns" id="karis_pns_sisteminformasi" placeholder="Masukkan KARIS PNS">
          <?php if (form_error('karis_pns')) : ?>
            <span class="text-danger"><?= form_error('karis_pns') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="taspen_pns_sisteminformasi">TASPEN PNS</label>
          <input type="text" class="form-control" name="taspen_pns" id="taspen_pns_sisteminformasi" placeholder="Masukkan TASPEN PNS">
          <?php if (form_error('taspen_pns')) : ?>
            <span class="text-danger"><?= form_error('taspen_pns') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="karpeg_pns_sisteminformasi">KARPEG PNS</label>
          <input type="text" class="form-control" name="karpeg_pns" id="karpeg_pns_sisteminformasi" placeholder="Masukkan KARPEG PNS">
          <?php if (form_error('karpeg_pns')) : ?>
            <span class="text-danger"><?= form_error('karpeg_pns') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="sk_dostap_sisteminformasi">No SK DOSTAP</label>
          <input type="text" class="form-control" name="sk_dostap" id="sk_dostap_sisteminformasi" placeholder="Masukkan SK DOSTAP">
          <?php if (form_error('sk_dostap')) : ?>
            <span class="text-danger"><?= form_error('sk_dostap') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tmt_dostap_sisteminformasi">TMT DOSTAP</label>
          <input type="date" class="form-control" name="tmt_dostap" id="tmt_dostap_sisteminformasi" placeholder="Masukkan TMT DOSTAP">
          <?php if (form_error('tmt_dostap')) : ?>
            <span class="text-danger"><?= form_error('tmt_dostap') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="pejabat_dostap_sisteminformasi">Pejabatan Yang Mengankat DOSTAP</label>
          <input type="text" class="form-control" name="pejabat_dostap" id="pejabat_dostap_sisteminformasi" placeholder="Masukkan SK Jabatan">
          <?php if (form_error('pejabat_dostap')) : ?>
            <span class="text-danger"><?= form_error('pejabat_dostap') ?></span>
          <?php endif; ?>
        </div>     
        <div class="form-group">
          <label for="sk_dostrak_sisteminformasi">No SK DOSTRAK</label>
          <input type="text" class="form-control" name="sk_dostrak" id="sk_dostrak_sisteminformasi" placeholder="Masukkan SK DOSTRAK">
          <?php if (form_error('sk_dostrak')) : ?>
            <span class="text-danger"><?= form_error('sk_dostrak') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tmt_dostrak_sisteminformasi">TMT DOSTRAK</label>
          <input type="date" class="form-control" name="tmt_dostrak" id="tmt_dostrak_sisteminformasi">
          <?php if (form_error('tmt_dostrak')) : ?>
            <span class="text-danger"><?= form_error('tmt_dostrak') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="pejabat_dostrak_sisteminformasi">Pejabat Yang Mengangkat DOSTRAK</label>
          <input type="text" class="form-control" name="pejabat_dostrak" id="pejabat_dostrak_sisteminformasi" placeholder="Masukkan Pejabat DOSTRAK">
          <?php if (form_error('pejabat_dostrak')) : ?>
            <span class="text-danger"><?= form_error('pejabat_dostrak') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="sk_petap_sisteminformasi">No SK PETAP</label>
          <input type="text" class="form-control" name="sk_petap" id="sk_petap_sisteminformasi" placeholder="Masukkan SK PETAP">
          <?php if (form_error('sk_petap')) : ?>
            <span class="text-danger"><?= form_error('sk_petap') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tmt_petap_sisteminformasi">TMT PETAP</label>
          <input type="date" class="form-control" name="tmt_petap" id="tmt_petap_sisteminformasi">
          <?php if (form_error('tmt_petap')) : ?>
            <span class="text-danger"><?= form_error('tmt_petap') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="pejabat_petap_sisteminformasi">Pejabat Yang Mengangkat PETAP</label>
          <input type="text" class="form-control" name="pejabat_petap" id="pejabat_petap_sisteminformasi" placeholder="Masukkan Pejabat PETAP">
          <?php if (form_error('pejabat_petap')) : ?>
            <span class="text-danger"><?= form_error('pejabat_petap') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="sk_petrak_sisteminformasi">No SK PETRAK</label>
          <input type="text" class="form-control" name="sk_petrak" id="sk_petrak_sisteminformasi" placeholder="Masukkan SK PETRAK">
          <?php if (form_error('sk_petrak')) : ?>
            <span class="text-danger"><?= form_error('sk_petrak') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tmt_petrak_sisteminformasi">TMT PETRAK</label>
          <input type="date" class="form-control" name="tmt_petrak" id="tmt_petrak_sisteminformasi">
          <?php if (form_error('tmt_petrak')) : ?>
            <span class="text-danger"><?= form_error('tmt_petrak') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="pejabat_petrak_sisteminformasi">Pejabat Yang Mengangkat PETRAK</label>
          <input type="text" class="form-control" name="pejabat_petrak" id="pejabat_petrak_sisteminformasi" placeholder="Masukkan Pejabat PETRAK">
          <?php if (form_error('pejabat_petrak')) : ?>
            <span class="text-danger"><?= form_error('pejabat_petrak') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="nip_sisteminformasi">NIP</label>
          <input type="text" class="form-control" name="nip" id="nip_sisteminformasi" placeholder="Masukkan NIP">
          <?php if (form_error('nip')) : ?>
            <span class="text-danger"><?= form_error('nip') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="nidn_sisteminformasi">NIDN</label>
          <input type="text" class="form-control" name="nidn" id="nidn_sisteminformasi" placeholder="Masukkan NIDN">
          <?php if (form_error('nidn')) : ?>
            <span class="text-danger"><?= form_error('nidn') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="nik_sisteminformasi">NIK</label>
          <input type="text" class="form-control" name="nik" id="nik_sisteminformasi" placeholder="Masukkan NIK">
          <?php if (form_error('nik')) : ?>
            <span class="text-danger"><?= form_error('nik') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="total_ak1_sisteminformasi">Total AK Asisten Ahli/III.a (100)</label>
          <input type="text" class="form-control" name="total_ak1" id="total_ak1_sisteminformasi" placeholder="Masukkan Total AK Asisten Ahli/III.a (100)">
          <?php if (form_error('total_ak1')) : ?>
            <span class="text-danger"><?= form_error('total_ak1') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tmt1_sisteminformasi">TMT Asisten Ahli/III.a (100)</label>
          <input type="date" class="form-control" name="tmt1" id="tmt1_sisteminformasi">
          <?php if (form_error('tmt1')) : ?>
            <span class="text-danger"><?= form_error('tmt1') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_sk1_sisteminformasi">No SK PAK Asisten Ahli/III.a (100)</label>
          <input type="text" class="form-control" name="no_sk1" id="no_sk1_sisteminformasi" placeholder="Masukkan No SK PAK Asisten Ahli/III.a (100)">
          <?php if (form_error('no_sk1')) : ?>
            <span class="text-danger"><?= form_error('no_sk1') ?></span>
          <?php endif; ?>
        </div>

        <div class="form-group">
          <label for="total_ak2_sisteminformasi">Total AK Asisten Ahli/III.b (150)</label>
          <input type="text" class="form-control" name="total_ak2" id="total_ak2_sisteminformasi" placeholder="Masukkan Total AK Asisten Ahli/III.b (150)">
          <?php if (form_error('total_ak2')) : ?>
            <span class="text-danger"><?= form_error('total_ak2') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tmt2_sisteminformasi">TMT Asisten Ahli/III.b (150)</label>
          <input type="date" class="form-control" name="tmt2" id="tmt2_sisteminformasi">
          <?php if (form_error('tmt2')) : ?>
            <span class="text-danger"><?= form_error('tmt2') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_sk2_sisteminformasi">No SK PAK Asisten Ahli/III.b (150)</label>
          <input type="text" class="form-control" name="no_sk2" id="no_sk2_sisteminformasi" placeholder="Masukkan No SK PAK Asisten Ahli/III.b (150)">
          <?php if (form_error('no_sk2')) : ?>
            <span class="text-danger"><?= form_error('no_sk2') ?></span>
          <?php endif; ?>
        </div>

        <div class="form-group">
          <label for="total_ak3_sisteminformasi">Total AK Lektor/III.c (200)</label>
          <input type="text" class="form-control" name="total_ak3" id="total_ak3_sisteminformasi" placeholder="Masukkan Total AK Lektor/III.c (200)">
          <?php if (form_error('total_ak3')) : ?>
            <span class="text-danger"><?= form_error('total_ak3') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tmt3_sisteminformasi">TMT Lektor/III.c (200)</label>
          <input type="date" class="form-control" name="tmt3" id="tmt3_sisteminformasi">
          <?php if (form_error('tmt3')) : ?>
            <span class="text-danger"><?= form_error('tmt3') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_sk3_sisteminformasi">No SK PAK Lektor/III.c (200)</label>
          <input type="text" class="form-control" name="no_sk3" id="no_sk3_sisteminformasi" placeholder="Masukkan No SK PAK Lektor/III.c (200)">
          <?php if (form_error('no_sk3')) : ?>
            <span class="text-danger"><?= form_error('no_sk3') ?></span>
          <?php endif; ?>
        </div>

        <div class="form-group">
          <label for="total_ak4_sisteminformasi">Total AK Lektor/III.d (300)</label>
          <input type="text" class="form-control" name="total_ak4" id="total_ak4_sisteminformasi" placeholder="Masukkan Total AK Lektor/III.d (300)">
          <?php if (form_error('total_ak4')) : ?>
            <span class="text-danger"><?= form_error('total_ak4') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tmt4_sisteminformasi">TMT Lektor/III.d (300)</label>
          <input type="date" class="form-control" name="tmt4" id="tmt4_sisteminformasi">
          <?php if (form_error('tmt4')) : ?>
            <span class="text-danger"><?= form_error('tmt4') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_sk4_sisteminformasi">No SK PAK Lektor/III.d (300)</label>
          <input type="text" class="form-control" name="no_sk4" id="no_sk4_sisteminformasi" placeholder="Masukkan No SK PAK Lektor/III.d (300)">
          <?php if (form_error('no_sk4')) : ?>
            <span class="text-danger"><?= form_error('no_sk4') ?></span>
          <?php endif; ?>
        </div>

        <div class="form-group">
          <label for="total_ak5_sisteminformasi">Total AK Lekor Kepala/IV.a (400)</label>
          <input type="text" class="form-control" name="total_ak5" id="total_ak5_sisteminformasi" placeholder="Masukkan Total AK Lekor Kepala/IV.a (400)">
          <?php if (form_error('total_ak5')) : ?>
            <span class="text-danger"><?= form_error('total_ak5') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tmt5_sisteminformasi">TMT Lekor Kepala/IV.a (400)</label>
          <input type="date" class="form-control" name="tmt5" id="tmt5_sisteminformasi">
          <?php if (form_error('tmt5')) : ?>
            <span class="text-danger"><?= form_error('tmt5') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_sk5_sisteminformasi">No SK PAK Lekor Kepala/IV.a (400)</label>
          <input type="text" class="form-control" name="no_sk5" id="no_sk5_sisteminformasi" placeholder="Masukkan No SK PAK Lekor Kepala/IV.a (400)">
          <?php if (form_error('no_sk5')) : ?>
            <span class="text-danger"><?= form_error('no_sk5') ?></span>
          <?php endif; ?>
        </div>

        <div class="form-group">
          <label for="total_ak6_sisteminformasi">Total AK Lekor Kepala/IV.b (550)</label>
          <input type="text" class="form-control" name="total_ak6" id="total_ak6_sisteminformasi" placeholder="Masukkan Total AK Lekor Kepala/IV.b (550)">
          <?php if (form_error('total_ak6')) : ?>
            <span class="text-danger"><?= form_error('total_ak6') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tmt6_sisteminformasi">TMT Lekor Kepala/IV.b (550)</label>
          <input type="date" class="form-control" name="tmt6" id="tmt6_sisteminformasi">
          <?php if (form_error('tmt6')) : ?>
            <span class="text-danger"><?= form_error('tmt6') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_sk6_sisteminformasi">No SK PAK Lekor Kepala/IV.b (550)</label>
          <input type="text" class="form-control" name="no_sk6" id="no_sk6_sisteminformasi" placeholder="Masukkan No SK PAK Lekor Kepala/IV.b (550)">
          <?php if (form_error('no_sk6')) : ?>
            <span class="text-danger"><?= form_error('no_sk6') ?></span>
          <?php endif; ?>
        </div>

    
        <div class="form-group">
          <label for="tmt7_sisteminformasi">TMT Penata Muda/III.a</label>
          <input type="text" class="form-control" name="tmt7" id="tmt7_sisteminformasi" placeholder="Masukkan TMT Penata Muda/III.a">
          <?php if (form_error('tmt7')) : ?>
            <span class="text-danger"><?= form_error('tmt7') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="no_sk7_sisteminformasi">No SK Penata Muda/III.a</label>
          <input type="text" class="form-control" name="no_sk7" id="no_sk7_sisteminformasi" placeholder="Masukkan No SK Penata Muda/III.a">
          <?php if (form_error('no_sk7')) : ?>
            <span class="text-danger"><?= form_error('no_sk7') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tgl_sk7_sisteminformasi">Tanggal SK Penata Muda/III.a</label>
          <input type="date" class="form-control" name="tgl_sk7" id="tgl_sk7_sisteminformasi">
          <?php if (form_error('tgl_sk7')) : ?>
            <span class="text-danger"><?= form_error('tgl_sk7') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="bkn_sk7_sisteminformasi">No BKN Penata Muda/III.a</label>
          <input type="text" class="form-control" name="bkn_sk7" id="bkn_sk7_sisteminformasi" placeholder="Masukkan BKN Penata Muda/III.a">
          <?php if (form_error('bkn_sk7')) : ?>
            <span class="text-danger"><?= form_error('bkn_sk7') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tglbkn_sk7_sisteminformasi">Tanggal BKN Penata Muda/III.a</label>
          <input type="date" class="form-control" name="tglbkn_sk7" id="tglbkn_sk7_sisteminformasi">
          <?php if (form_error('tglbkn_sk7')) : ?>
            <span class="text-danger"><?= form_error('tglbkn_sk7') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="jenis_pangkat7_sisteminformasi">Jenis Pangkat Penata Muda/III.a</label>
          <input type="text" class="form-control" name="jenis_pangkat7" id="jenis_pangkat7_sisteminformasi" placeholder="Masukkan Jenis Pangkat Penata Muda/III.a">
          <?php if (form_error('jenis_pangkat7')) : ?>
            <span class="text-danger"><?= form_error('jenis_pangkat7') ?></span>
          <?php endif; ?>
        </div>
        
<div class="form-group">
  <label for="tmt8_sisteminformasi">TMT Penata Muda Tk.I/III.b</label>
  <input type="text" class="form-control" name="tmt8" id="tmt8_sisteminformasi" placeholder="Masukkan TMT Penata Muda Tk.I/III.b">
  <?php if (form_error('tmt8')) : ?>
    <span class="text-danger"><?= form_error('tmt8') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="no_sk8_sisteminformasi">No SK Penata Muda Tk.I/III.b</label>
  <input type="text" class="form-control" name="no_sk8" id="no_sk8_sisteminformasi" placeholder="Masukkan No SK Penata Muda Tk.I/III.b">
  <?php if (form_error('no_sk8')) : ?>
    <span class="text-danger"><?= form_error('no_sk8') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="tgl_sk8_sisteminformasi">Tanggal SK Penata Muda Tk.I/III.b</label>
  <input type="date" class="form-control" name="tgl_sk8" id="tgl_sk8_sisteminformasi">
  <?php if (form_error('tgl_sk8')) : ?>
    <span class="text-danger"><?= form_error('tgl_sk8') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="bkn_sk8_sisteminformasi">BKN Penata Muda Tk.I/III.b</label>
  <input type="text" class="form-control" name="bkn_sk8" id="bkn_sk8_sisteminformasi" placeholder="Masukkan BKN Penata Muda Tk.I/III.b">
  <?php if (form_error('bkn_sk8')) : ?>
    <span class="text-danger"><?= form_error('bkn_sk8') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="tglbkn_sk8_sisteminformasi">Tanggal BKN Penata Muda Tk.I/III.b</label>
  <input type="date" class="form-control" name="tglbkn_sk8" id="tglbkn_sk8_sisteminformasi">
  <?php if (form_error('tglbkn_sk8')) : ?>
    <span class="text-danger"><?= form_error('tglbkn_sk8') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="jenis_pangkat8_sisteminformasi">Jenis Pangkat Penata Muda Tk.I/III.b</label>
  <input type="text" class="form-control" name="jenis_pangkat8" id="jenis_pangkat8_sisteminformasi" placeholder="Masukkan Jenis Pangkat 8">
  <?php if (form_error('jenis_pangkat8')) : ?>
    <span class="text-danger"><?= form_error('jenis_pangkat8') ?></span>
  <?php endif; ?>
</div>


<div class="form-group">
  <label for="tmt9_sisteminformasi">TMT Penata/III.c</label>
  <input type="text" class="form-control" name="tmt9" id="tmt9_sisteminformasi" placeholder="Masukkan TMT Penata/III.c">
  <?php if (form_error('tmt9')) : ?>
    <span class="text-danger"><?= form_error('tmt9') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="no_sk9_sisteminformasi">No SK Penata/III.c</label>
  <input type="text" class="form-control" name="no_sk9" id="no_sk9_sisteminformasi" placeholder="Masukkan No SK Penata/III.c">
  <?php if (form_error('no_sk9')) : ?>
    <span class="text-danger"><?= form_error('no_sk9') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="tgl_sk9_sisteminformasi">Tanggal SK Penata/III.c</label>
  <input type="date" class="form-control" name="tgl_sk9" id="tgl_sk9_sisteminformasi">
  <?php if (form_error('tgl_sk9')) : ?>
    <span class="text-danger"><?= form_error('tgl_sk9') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="bkn_sk9_sisteminformasi">BKN Penata/III.c</label>
  <input type="text" class="form-control" name="bkn_sk9" id="bkn_sk9_sisteminformasi" placeholder="Masukkan BKN Penata/III.c">
  <?php if (form_error('bkn_sk9')) : ?>
    <span class="text-danger"><?= form_error('bkn_sk9') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="tglbkn_sk9_sisteminformasi">Tanggal BKN Penata/III.c</label>
  <input type="date" class="form-control" name="tglbkn_sk9" id="tglbkn_sk9_sisteminformasi">
  <?php if (form_error('tglbkn_sk9')) : ?>
    <span class="text-danger"><?= form_error('tglbkn_sk9') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="jenis_pangkat9_sisteminformasi">Jenis Pangkat Penata/III.c</label>
  <input type="text" class="form-control" name="jenis_pangkat9" id="jenis_pangkat9_sisteminformasi" placeholder="Masukkan Jenis Pangkat Penata/III.c">
  <?php if (form_error('jenis_pangkat9')) : ?>
    <span class="text-danger"><?= form_error('jenis_pangkat9') ?></span>
  <?php endif; ?>
</div>


<div class="form-group">
  <label for="tmt10_sisteminformasi">TMT Penata Tk.I/III.d</label>
  <input type="text" class="form-control" name="tmt10" id="tmt10_sisteminformasi">
  <?php if (form_error('tmt10')) : ?>
    <span class="text-danger"><?= form_error('tmt10') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="no_sk10_sisteminformasi">No SK Penata Tk.I/III.d</label>
  <input type="text" class="form-control" name="no_sk10" id="no_sk10_sisteminformasi" placeholder="Masukkan No SK Penata Tk.I/III.d">
  <?php if (form_error('no_sk10')) : ?>
    <span class="text-danger"><?= form_error('no_sk10') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="tgl_sk10_sisteminformasi">Tanggal SK Penata Tk.I/III.d</label>
  <input type="date" class="form-control" name="tgl_sk10" id="tgl_sk10_sisteminformasi">
  <?php if (form_error('tgl_sk10')) : ?>
    <span class="text-danger"><?= form_error('tgl_sk10') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="bkn_sk10_sisteminformasi">BKN Penata Tk.I/III.d</label>
  <input type="text" class="form-control" name="bkn_sk10" id="bkn_sk10_sisteminformasi" placeholder="Masukkan BKN Penata Tk.I/III.d">
  <?php if (form_error('bkn_sk10')) : ?>
    <span class="text-danger"><?= form_error('bkn_sk10') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="tglbkn_sk10_sisteminformasi">Tanggal BKN Penata Tk.I/III.d</label>
  <input type="date" class="form-control" name="tglbkn_sk10" id="tglbkn_sk10_sisteminformasi">
  <?php if (form_error('tglbkn_sk10')) : ?>
    <span class="text-danger"><?= form_error('tglbkn_sk10') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="jenis_pangkat10_sisteminformasi">Jenis Pangkat Penata Tk.I/III.d</label>
  <input type="text" class="form-control" name="jenis_pangkat10" id="jenis_pangkat10_sisteminformasi" placeholder="Masukkan Jenis Pangkat Penata Tk.I/III.d">
  <?php if (form_error('jenis_pangkat10')) : ?>
    <span class="text-danger"><?= form_error('jenis_pangkat10') ?></span>
  <?php endif; ?>
</div>


<div class="form-group">
  <label for="tmt11_sisteminformasi">TMT Pembina/IV.a</label>
  <input type="text" class="form-control" name="tmt11" id="tmt11_sisteminformasi">
  <?php if (form_error('tmt11')) : ?>
    <span class="text-danger"><?= form_error('tmt11') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="no_sk11_sisteminformasi">No SK Pembina/IV.a</label>
  <input type="text" class="form-control" name="no_sk11" id="no_sk11_sisteminformasi" placeholder="Masukkan No SK Pembina/IV.a">
  <?php if (form_error('no_sk11')) : ?>
    <span class="text-danger"><?= form_error('no_sk11') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="tgl_sk11_sisteminformasi">Tanggal SK Pembina/IV.a</label>
  <input type="date" class="form-control" name="tgl_sk11" id="tgl_sk11_sisteminformasi">
  <?php if (form_error('tgl_sk11')) : ?>
    <span class="text-danger"><?= form_error('tgl_sk11') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="bkn_sk11_sisteminformasi">BKN Pembina/IV.a</label>
  <input type="text" class="form-control" name="bkn_sk11" id="bkn_sk11_sisteminformasi" placeholder="Masukkan BKN Pembina/IV.a">
  <?php if (form_error('bkn_sk11')) : ?>
    <span class="text-danger"><?= form_error('bkn_sk11') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="tglbkn_sk11_sisteminformasi">Tanggal BKN Pembina/IV.a</label>
  <input type="date" class="form-control" name="tglbkn_sk11" id="tglbkn_sk11_sisteminformasi">
  <?php if (form_error('tglbkn_sk11')) : ?>
    <span class="text-danger"><?= form_error('tglbkn_sk11') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="jenis_pangkat11_sisteminformasi">Jenis Pangkat Pembina/IV.a</label>
  <input type="text" class="form-control" name="jenis_pangkat11" id="jenis_pangkat11_sisteminformasi" placeholder="Masukkan Jenis Pangkat Pembina/IV.a">
  <?php if (form_error('jenis_pangkat11')) : ?>
    <span class="text-danger"><?= form_error('jenis_pangkat11') ?></span>
  <?php endif; ?>
</div>


<div class="form-group">
  <label for="tmt12_sisteminformasi">TMT Pembina Tk.I/IV.b</label>
  <input type="text" class="form-control" name="tmt12" id="tmt12_sisteminformasi">
  <?php if (form_error('tmt12')) : ?>
    <span class="text-danger"><?= form_error('tmt12') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="no_sk12_sisteminformasi">No SK Pembina Tk.I/IV.b</label>
  <input type="text" class="form-control" name="no_sk12" id="no_sk12_sisteminformasi" placeholder="Masukkan No SK Pembina Tk.I/IV.b">
  <?php if (form_error('no_sk12')) : ?>
    <span class="text-danger"><?= form_error('no_sk12') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="tgl_sk12_sisteminformasi">Tanggal SK Pembina Tk.I/IV.b</label>
  <input type="date" class="form-control" name="tgl_sk12" id="tgl_sk12_sisteminformasi">
  <?php if (form_error('tgl_sk12')) : ?>
    <span class="text-danger"><?= form_error('tgl_sk12') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="bkn_sk12_sisteminformasi">BKN Pembina Tk.I/IV.b</label>
  <input type="text" class="form-control" name="bkn_sk12" id="bkn_sk12_sisteminformasi" placeholder="Masukkan BKN Pembina Tk.I/IV.b">
  <?php if (form_error('bkn_sk12')) : ?>
    <span class="text-danger"><?= form_error('bkn_sk12') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="tglbkn_sk12_sisteminformasi">Tanggal BKN Pembina Tk.I/IV.b</label>
  <input type="date" class="form-control" name="tglbkn_sk12" id="tglbkn_sk12_sisteminformasi">
  <?php if (form_error('tglbkn_sk12')) : ?>
    <span class="text-danger"><?= form_error('tglbkn_sk12') ?></span>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="jenis_pangkat12_sisteminformasi">Jenis Pangkat Pembina Tk.I/IV.b</label>
  <input type="text" class="form-control" name="jenis_pangkat12" id="jenis_pangkat12_sisteminformasi" placeholder="Masukkan Jenis Pangkat Pembina Tk.I/IV.b">
  <?php if (form_error('jenis_pangkat12')) : ?>
    <span class="text-danger"><?= form_error('jenis_pangkat12') ?></span>
  <?php endif; ?>
</div>

        <!-- Repeat similar blocks for tmt8 to tmt12, no_sk8 to no_sk12, tgl_sk8 to tgl_sk12, bkn_sk8 to bkn_sk12, tglbkn_sk8 to tglbkn_sk12, jenis_pangkat8 to jenis_pangkat12 -->

        <div class="form-group">
        <label for="status_kawin_sisteminformasi">Status Pegawai</label>
          <select class="form-control" name="status_kawin" id="status_kawin_sisteminformasi">
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
          <label for="nama_ayah_sisteminformasi">Nama Ayah</label>
          <input type="text" class="form-control" name="nama_ayah" id="nama_ayah_sisteminformasi" placeholder="Masukkan Nama Ayah">
          <?php if (form_error('nama_ayah')) : ?>
            <span class="text-danger"><?= form_error('nama_ayah') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="nama_ibu_sisteminformasi">Nama Ibu</label>
          <input type="text" class="form-control" name="nama_ibu" id="nama_ibu_sisteminformasi" placeholder="Masukkan Nama Ibu">
          <?php if (form_error('nama_ibu')) : ?>
            <span class="text-danger"><?= form_error('nama_ibu') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="nama_pasangan_sisteminformasi">Nama Pasangan</label>
          <input type="text" class="form-control" name="nama_pasangan" id="nama_pasangan_sisteminformasi" placeholder="Masukkan Nama Pasangan">
          <?php if (form_error('nama_pasangan')) : ?>
            <span class="text-danger"><?= form_error('nama_pasangan') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="nama_anak_sisteminformasi">Nama Anak</label>
          <input type="text" class="form-control" name="nama_anak" id="nama_anak_sisteminformasi" placeholder="Masukkan Nama Anak">
          <?php if (form_error('nama_anak')) : ?>
            <span class="text-danger"><?= form_error('nama_anak') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="npwp_sisteminformasi">NPWP</label>
          <input type="text" class="form-control" name="npwp" id="npwp_sisteminformasi" placeholder="Masukkan NPWP">
          <?php if (form_error('npwp')) : ?>
            <span class="text-danger"><?= form_error('npwp') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="nomor_rekening_sisteminformasi">Nomor Rekening</label>
          <input type="text" class="form-control" name="nomor_rekening" id="nomor_rekening_sisteminformasi" placeholder="Masukkan Nomor Rekening">
          <?php if (form_error('nomor_rekening')) : ?>
            <span class="text-danger"><?= form_error('nomor_rekening') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="nama_kartu_sisteminformasi">Nama Kartu</label>
          <input type="text" class="form-control" name="nama_kartu" id="nama_kartu_sisteminformasi" placeholder="Masukkan Nama Kartu">
          <?php if (form_error('nama_kartu')) : ?>
            <span class="text-danger"><?= form_error('nama_kartu') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="nomor_kartu_sisteminformasi">Nomor Kartu</label>
          <input type="text" class="form-control" name="nomor_kartu" id="nomor_kartu_sisteminformasi" placeholder="Masukkan Nomor Kartu">
          <?php if (form_error('nomor_kartu')) : ?>
            <span class="text-danger"><?= form_error('nomor_kartu') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
        <label for="gol_darah_sisteminformasi">Golongan Darah</label>
          <select class="form-control" name="gol_darah" id="gol_darah_sisteminformasi">
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
          <label for="status_pegawai_sisteminformasi">Status Pegawai</label>
          <select class="form-control" name="status_pegawai" id="status_pegawai_sisteminformasi">
            <option value="Tetap" selected>Tetap</option>
            <option value="Kontrak">Kontrak</option>
          </select>
          <?php if (form_error('status_pegawai')) : ?>
            <span class="text-danger"><?= form_error('status_pegawai') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="dosen_pns_sisteminformasi">Dosen PNS</label>
          <select class="form-control" name="dosen_pns" id="dosen_pns_sisteminformasi">
            <option value="1" selected>Ya</option>
            <option value="0">Tidak</option>
          </select>
          <?php if (form_error('dosen_pns')) : ?>
            <span class="text-danger"><?= form_error('dosen_pns') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="dosen_tetap_sisteminformasi">Dosen Tetap</label>
          <select class="form-control" name="dosen_tetap" id="dosen_tetap_sisteminformasi">
            <option value="1" selected>Ya</option>
            <option value="0">Tidak</option>
          </select>
          <?php if (form_error('dosen_tetap')) : ?>
            <span class="text-danger"><?= form_error('dosen_tetap') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="dosen_kontrak_sisteminformasi">Dosen Kontrak</label>
          <select class="form-control" name="dosen_kontrak" id="dosen_kontrak_sisteminformasi">
            <option value="1" selected>Ya</option>
            <option value="0">Tidak</option>
          </select>
          <?php if (form_error('dosen_kontrak')) : ?>
            <span class="text-danger"><?= form_error('dosen_kontrak') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tendik_pns_sisteminformasi">Tendik PNS</label>
          <select class="form-control" name="tendik_pns" id="tendik_pns_sisteminformasi">
            <option value="1" selected>Ya</option>
            <option value="0">Tidak</option>
          </select>
          <?php if (form_error('tendik_pns')) : ?>
            <span class="text-danger"><?= form_error('tendik_pns') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tendik_tetap_sisteminformasi">Tendik Tetap</label>
          <select class="form-control" name="tendik_tetap" id="tendik_tetap_sisteminformasi">
            <option value="1" selected>Ya</option>
            <option value="0">Tidak</option>
          </select>
          <?php if (form_error('tendik_tetap')) : ?>
            <span class="text-danger"><?= form_error('tendik_tetap') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tendik_kontrak_sisteminformasi">Tendik Kontrak</label>
          <select class="form-control" name="tendik_kontrak" id="tendik_kontrak_sisteminformasi">
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
