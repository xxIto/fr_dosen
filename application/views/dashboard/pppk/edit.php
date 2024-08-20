<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="<?= base_url('pppk') ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
      <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
    </a>
    <h1 class="h3 mb-0">Edit Data</h1>
  </div>

  <!-- Content Row -->
  <form id="form-pppk" action="<?= base_url('pppk/update/' . $data['pppk_id']); ?>" method="POST">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">PPPK</h3>

        <div class="form-group">
          <label for="dosen_pppk">Dosen</label>
          <select class="form-control" name="id_dosen" id="dosen_pppk">
            <option value="">Pilih Dosen</option>
            <?php foreach ($dosens as $dosen) : ?>
              <option value="<?= $dosen['dosen_id'] ?>" <?= set_select('id_dosen', $dosen['dosen_id'], $data['id_dosen'] == $dosen['dosen_id']) ?>>
                <?= $dosen['nidn'] ?> - <?= $dosen['nama'] ?>
              </option>
            <?php endforeach; ?>
          </select>
          <?= form_error('id_dosen', '<span class="text-danger">', '</span>'); ?>
        </div>

        <div class="form-group">
          <label for="jurusan_dosen">Jurusan</label>
          <select class="form-control" name="id_jurusan" id="jurusan_dosen">
            <option value="">Pilih Jurusan</option>
            <?php foreach ($jurusans as $jurusan) : ?>
              <option value="<?= $jurusan['jurusan_id'] ?>" <?= set_select('id_jurusan', $jurusan['jurusan_id'], $data['id_jurusan'] == $jurusan['jurusan_id']) ?>>
                <?= $jurusan['nama'] ?>
              </option>
            <?php endforeach; ?>
          </select>
          <?= form_error('id_jurusan', '<span class="text-danger">', '</span>'); ?>
        </div>

        <div class="form-group">
          <label for="jabatan_dosen">Jabatan Fungsional Sekarang</label>
          <select class="form-control" name="id_jabatan" id="jabatan_dosen">
            <option value="">Pilih Jabatan</option>
            <?php foreach ($jabatans as $jabatan) : ?>
              <option value="<?= $jabatan['jabatan_id'] ?>" <?= set_select('id_jabatan', $jabatan['jabatan_id'], $data['id_jabatan'] == $jabatan['jabatan_id']) ?>>
                <?= $jabatan['nama'] ?>
              </option>
            <?php endforeach; ?>
          </select>
          <?= form_error('id_jabatan', '<span class="text-danger">', '</span>'); ?>
        </div>

        <div class="form-group">
          <label for="tmt">TMT</label>
          <input type="text" class="form-control" name="tmt" id="tmt" placeholder="Masukan TMT" value="<?= set_value('tmt', $data['tmt']) ?>">
          <?= form_error('tmt', '<span class="text-danger">', '</span>'); ?>
        </div>
        <div class="form-group">
          <label for="status">Status</label>
          <select class="form-control" name="status" id="status">
            <option value="aktif" <?= set_select('status', 'aktif', $data['status'] == 'aktif') ?>>Aktif</option>
            <option value="tugas_belajar" <?= set_select('status', 'tugas_belajar', $data['status'] == 'tugas_belajar') ?>>Tugas Belajar</option>
            <option value="tidak_aktif" <?= set_select('status', 'tidak_aktif', $data['status'] == 'tidak_aktif') ?>>Tidak Aktif</option>
           
          </select>
          <?= form_error('status', '<span class="text-danger">', '</span>'); ?>
        </div>


        <div class="form-group">
          <label for="status_pegawai_dosen">Status Pegawai</label>
          <select class="form-control" name="status_pegawai" id="status_pegawai_dosen">
            <option value="pns" <?= set_select('status_pegawai', 'pns', $data['status_pegawai'] == 'pns') ?>>PNS</option>
            <option value="non_asn" <?= set_select('status_pegawai', 'non_asn', $data['status_pegawai'] == 'non_asn') ?>>Non ASN</option>
            <option value="pppk" <?= set_select('status_pegawai', 'pppk', $data['status_pegawai'] == 'pppk') ?>>PPPK</option>
          </select>
          <?= form_error('status_pegawai', '<span class="text-danger">', '</span>'); ?>
        </div>

        <div class="form-group">
          <label for="tmt_pppk">TMT PPPK</label>
          <input type="text" class="form-control" name="tmt_pppk" id="tmt_pppk" placeholder="TMT PPPK" value="<?= set_value('tmt_pppk', $data['tmt_pppk']) ?>">
          <?= form_error('tmt_pppk', '<span class="text-danger">', '</span>'); ?>
        </div>
        <div class="form-group">
          <label for="jabatan_pppk">Jabatan Fungsional PPPK</label>
          <select class="form-control" name="id_jabatan_pppk" id="jabatan_dosen_pppk">
            <option value="">Pilih Jabatan</option>
            <?php foreach ($jabatans as $jabatan) : ?>
              <option value="<?= $jabatan['jabatan_id'] ?>" <?= set_select('id_jabatan_pppk', $jabatan['jabatan_id'], $data['id_jabatan_pppk'] == $jabatan['jabatan_id']) ?>>
                <?= $jabatan['nama'] ?>
              </option>
            <?php endforeach; ?>
          </select>
          <?= form_error('id_jabatan_pppk', '<span class="text-danger">', '</span>'); ?>
        </div>
        <div class="form-group">
          <label for="keterangan">Keterangan</label>
          <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Masukan Keterangan" value="<?= set_value('keterangan', $data['keterangan']) ?>">
          <?= form_error('keterangan', '<span class="text-danger">', '</span>'); ?>
        </div>

       

        <div class="form-group row">
          <div class="col">
            <button class="btn btn-success btn-block" type="submit">Update Data</button>
          </div>
        </div>
      </div>
    </div>
  </form>

</div>
<!-- /.container-fluid -->
