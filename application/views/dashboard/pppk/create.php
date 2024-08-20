<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="<?= base_url('pppk') ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
      <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
    </a>
    <h1 class="h3 mb-0">Tambah pppk</h1>
  </div>

  <!-- Content Row -->
  <form id="form-pppk" action="<?= base_url('pppk/store'); ?>" method="POST">
   
    <!-- pppk Form -->
    <div class="card mt-3">
      <div class="card-header">
        <h3 class="card-title">pppk</h3>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="dosen_pppk">Dosen</label>
          <select class="form-control" name="id_dosen" id="dosen_pppk">
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
          <label for="jurusan_pppk">Jurusan</label>
          <select class="form-control" name="id_jurusan" id="jurusan_pppk">
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
          <label for="jabatan">Jabatan Fungsional Sekarang</label>
          <select class="form-control" name="id_jabatan" id="jabatan">
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
          <label for="tmt">TMT</label>
          <input type="text" class="form-control" name="tmt" id="tmt" placeholder="Masukan TMT" value="<?= set_value('tmt') ?>">
          <?php if (form_error('tmt')) : ?>
            <span class="text-danger"><?= form_error('tmt') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="status_dosen">Status</label>
          <select class="form-control" name="status" id="status_dosen">
            <option value="aktif" selected>Aktif</option>
            <option value="tugas_belajar">Tugas Belajar</option>
            <option value="tidak_aktif">Tidak Aktif</option>
          </select>
          <?php if (form_error('status')) : ?>
            <span class="text-danger"><?= form_error('status') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="status_pegawai_pppk">Status Pegawai</label>
          <select class="form-control" name="status_pegawai" id="status_pegawai_pppk">
            <option value="pns" <?= set_select('status_pegawai', 'pns', true) ?>>PNS</option>
            <option value="non_asn" <?= set_select('status_pegawai', 'non_asn') ?>>Non ASN</option>
            <option value="pppk" <?= set_select('status_pegawai', 'pppk') ?>>PPPK</option>
          </select>
          <?php if (form_error('status_pegawai')) : ?>
            <span class="text-danger"><?= form_error('status_pegawai') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="tmt_pppk">TMT PPPK</label>
          <input type="text" class="form-control" name="tmt_pppk" id="tmt_pppk" placeholder="Masukan TMT PPPK" value="<?= set_value('tmt_pppk') ?>">
          <?php if (form_error('tmt_pppk')) : ?>
            <span class="text-danger"><?= form_error('tmt_pppk') ?></span>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label for="jabatan_pppk">Jabatan Fungsional PPPK</label>
          <select class="form-control" name="id_jabatan_pppk" id="jabatan_pppk">
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
          <label for="keterangan">Keterangan</label>
          <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Masukan Keterangan" value="<?= set_value('keterangan') ?>">
          <?php if (form_error('keterangan')) : ?>
            <span class="text-danger"><?= form_error('keterangan') ?></span>
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
