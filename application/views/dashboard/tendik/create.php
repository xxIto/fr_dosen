<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="<?= base_url('tendik') ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
      <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
    </a>
    <h1 class="h3 mb-0">Tambah tendik</h1>
  </div>

  <!-- Content Row -->
  <form id="form-tendik" action="<?= base_url('tendik/store'); ?>" method="POST">
   
    <!-- tendik Form -->
    <div class="card mt-3">
      <div class="card-header">
        <h3 class="card-title">Tendik</h3>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="kode_tendik">NIPPPK</label>
          <input type="text" class="form-control" name="kode" id="kode" placeholder="Masukan NIPPPK">
          <?php if (form_error('kode')) : ?>
            <span class="text-danger"><?= form_error('kode') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="nama_tendik">Nama Pegawai</label>
          <input type="text" class="form-control" name="nama" id="nama_tendik" placeholder="Masukan nama">
          <?php if (form_error('nama')) : ?>
            <span class="text-danger"><?= form_error('nama') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="pendidikan_tendik">Pendidikan</label>
          <select class="form-control" name="id_pendidikan" id="pendidikan_tendik">
            <option value="0">Pilih Pendidikan</option>
            <?php foreach ($pendidikans as $pendidikan) : ?>
              <option value="<?= $pendidikan['pendidikan_id'] ?>"><?= $pendidikan['nama'] ?></option>
            <?php endforeach; ?>
          </select>
          <?php if (form_error('id_pendidikan')) : ?>
            <span class="text-danger"><?= form_error('id_pendidikan') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="jabatan_tendik">Jabatan</label>
          <select class="form-control" name="id_jabatan" id="jabatan_tendik">
            <option value="0">Pilih Jabatan</option>
            <?php foreach ($jabatans as $jabatan) : ?>
              <option value="<?= $jabatan['jabatan_id'] ?>"><?= $jabatan['nama'] ?></option>
            <?php endforeach; ?>
          </select>
          <?php if (form_error('id_jabatan')) : ?>
            <span class="text-danger"><?= form_error('id_jabatan') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="golongan_tendik">Golongan</label>
          <input type="text" class="form-control" name="golongan" id="golongan_tendik" placeholder="Masukan Golongan">
          <?php if (form_error('no_sk')) : ?>
            <span class="text-danger"><?= form_error('no_sk') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tmt_tendik">TMT</label>
          <input type="text" class="form-control" name="tmt" id="tmt_tendik" placeholder="Masukan TMT">
          <?php if (form_error('tmt')) : ?>
            <span class="text-danger"><?= form_error('tmt') ?></span>
          <?php endif; ?>
        </div>
        
        <div class="form-group">
          <label for="ket">Keterangan</label>
          <input type="text" class="form-control" name="ket" id="ket" placeholder="Masukan Keterangan">
          <?php if (form_error('ket')) : ?>
            <span class="text-danger"><?= form_error('ket') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="penempatan_tendik">Penempatan</label>
          <select class="form-control" name="id_penempatan" id="penempatan_tendik">
            <option value="0">Pilih Penempatan</option>
            <?php foreach ($penempatans as $penempatan) : ?>
              <option value="<?= $penempatan['penempatan_id'] ?>"><?= $penempatan['nama'] ?></option>
            <?php endforeach; ?>
          </select>
          <?php if (form_error('id_penempatan')) : ?>
            <span class="text-danger"><?= form_error('id_penempatan') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group row">
          <div class="col">
            <button class="btn btn-success btn-block" type="submit">
              Save Data
            </button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
<!-- /.container-fluid -->
