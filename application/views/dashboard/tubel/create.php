<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="<?= base_url('tubel') ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
      <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
    </a>
    <h1 class="h3 mb-0">Tambah Tubel</h1>
  </div>

  <!-- Content Row -->
  <form id="form-tubel" action="<?= base_url('tubel/store'); ?>" method="POST">
   
    <!-- Tubel Form -->
    <div class="card mt-3">
      <div class="card-header">
        <h3 class="card-title">Tubel</h3>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="dosen_tubel">Dosen</label>
          <select class="form-control" name="id_dosen" id="dosen_tubel">
            <option value="">Pilih Dosen</option>
            <?php foreach ($dosens as $dosen) : ?>
              <option value="<?= $dosen['dosen_id'] ?>"><?= $dosen['nidn'] ?> - <?= $dosen['nama'] ?></option>
            <?php endforeach; ?>
          </select>
          <?php if (form_error('id_dosen')) : ?>
            <span class="text-danger"><?= form_error('id_dosen') ?></span>
          <?php endif; ?>
        </div>
        
        <div class="form-group">
          <label for="jurusan_tubel">Jurusan</label>
          <select class="form-control" name="id_jurusan" id="jurusan_tubel">
            <option value="">Pilih Jurusan</option>
            <?php foreach ($jurusans as $jurusan) : ?>
              <option value="<?= $jurusan['jurusan_id'] ?>"><?= $jurusan['nama'] ?></option>
            <?php endforeach; ?>
          </select>
          <?php if (form_error('id_jurusan')) : ?>
            <span class="text-danger"><?= form_error('id_jurusan') ?></span>
          <?php endif; ?>
        </div>
        
        <div class="form-group">
          <label for="jabatan_tubel">Jabatan Fungsional</label>
          <select class="form-control" name="id_jabatan" id="jabatan_tubel">
            <option value="">Pilih Jabatan</option>
            <?php foreach ($jabatans as $jabatan) : ?>
              <option value="<?= $jabatan['jabatan_id'] ?>"><?= $jabatan['nama'] ?></option>
            <?php endforeach; ?>
          </select>
          <?php if (form_error('id_jabatan')) : ?>
            <span class="text-danger"><?= form_error('id_jabatan') ?></span>
          <?php endif; ?>
        </div>
        
        <div class="form-group">
          <label for="no_sk">No SK Tubel</label>
          <input type="text" class="form-control" name="no_sk" id="no_sk" placeholder="Masukan SK Tubel" value="<?= set_value('no_sk') ?>">
          <?php if (form_error('no_sk')) : ?>
            <span class="text-danger"><?= form_error('no_sk') ?></span>
          <?php endif; ?>
        </div>
        
        <div class="form-group">
          <label for="mulai_tubel">Mulai Tubel</label>
          <input type="text" class="form-control" name="mulai_tubel" id="mulai_tubel" placeholder="Masukan Mulai Tubel" value="<?= set_value('mulai_tubel') ?>">
          <?php if (form_error('mulai_tubel')) : ?>
            <span class="text-danger"><?= form_error('mulai_tubel') ?></span>
          <?php endif; ?>
        </div>
        
        <div class="form-group">
          <label for="univ_tubel">Univ Tubel</label>
          <input type="text" class="form-control" name="univ_tubel" id="univ_tubel" placeholder="Masukan Univ Tubel" value="<?= set_value('univ_tubel') ?>">
          <?php if (form_error('univ_tubel')) : ?>
            <span class="text-danger"><?= form_error('univ_tubel') ?></span>
          <?php endif; ?>
        </div>
        
        <div class="form-group">
          <label for="status_pegawai_tubel">Status Pegawai</label>
          <select class="form-control" name="status_pegawai" id="status_pegawai_tubel">
            <option value="pns" <?= set_select('status_pegawai', 'pns', true) ?>>PNS</option>
            <option value="non_asn" <?= set_select('status_pegawai', 'non_asn') ?>>Non ASN</option>
            <option value="pppk" <?= set_select('status_pegawai', 'pppk') ?>>PPPK</option>
          </select>
          <?php if (form_error('status_pegawai')) : ?>
            <span class="text-danger"><?= form_error('status_pegawai') ?></span>
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
