<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<a href="<?= base_url('dosen') ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali</a>
		<h1 class="h3 mb-0">Edit Data</h1>
	</div>

	<!-- Content Row -->
	<form id="form-dosen-tendik" action="<?= base_url('dosen/update/' . $data['dosen_id']); ?>" method="POST">
		<div class="card">
			<div class="container mt-3">
				<!-- Form Dosen -->
				<div class="card mt-3" id="dosen-form">
					<div class="card-header">
						<h3 class="card-title">Dosen</h3>
					</div>
					<div class="container mt-3">
						<div class="form-group">
							<label>NIDN</label>
							<input type="text" class="form-control" name="nidn" id="nidn" placeholder="Masukan NIDN" value="<?= $data['nidn'] ?>">
							<?php if (form_error('nidn')) : ?>
								<span class="text-danger"><?= form_error('nidn') ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" id="email=" placeholder="Masukkan Email Dosen" value="<?= $data['email'] ?>">
							<?php if (form_error('email')) : ?>
								<span class="text-danger"><?= form_error('email') ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Nama</label>
							<input type="text" class="form-control" name="nama" id="nama_dosen" placeholder="Masukan nama" value="<?= $data['nama'] ?>">
							<?php if (form_error('nama')) : ?>
								<span class="text-danger"><?= form_error('nama') ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label>
							<select class="form-control" name="jenis_kelamin" id="jenis_kelamin_dosen">
								<option value="laki" <?= $data['jenis_kelamin'] == 'laki' ? 'selected' : '' ?>>Laki - Laki</option>
								<option value="perempuan" <?= $data['jenis_kelamin'] == 'perempuan' ? 'selected' : '' ?>>Perempuan</option>
							</select>
							<?php if (form_error('jenis_kelamin')) : ?>
								<span class="text-danger"><?= form_error('jenis_kelamin') ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Jurusan</label>
							<select class="form-control" name="id_jurusan" id="jurusan_dosen">
								<option value="0">Pilih Jurusan</option>
								<?php foreach ($jurusans as $jurusan) : ?>
									<option value="<?= $jurusan['jurusan_id'] ?>" <?= $data['id_jurusan'] == $jurusan['jurusan_id'] ? 'selected' : '' ?>><?= $jurusan['nama'] ?></option>
								<?php endforeach; ?>
							</select>
							<?php if (form_error('id_jurusan')) : ?>
								<span class="text-danger"><?= form_error('id_jurusan') ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Jabatan Fungsional</label>
							<select class="form-control" name="id_jabatan" id="jabatan_dosen">
								<option value="0">Pilih Jabatan</option>
								<?php foreach ($jabatans as $jabatan) : ?>
									<option value="<?= $jabatan['jabatan_id'] ?>" <?= $data['id_jabatan'] == $jabatan['jabatan_id'] ? 'selected' : '' ?>><?= $jabatan['nama'] ?></option>
								<?php endforeach; ?>
							</select>
							<?php if (form_error('id_jabatan')) : ?>
								<span class="text-danger"><?= form_error('id_jabatan') ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>TMT</label>
							<input type="text" class="form-control" name="tmt" id="tmt_dosen" placeholder="Masukan TMT" value="<?= $data['tmt'] ?>">
							<?php if (form_error('tmt')) : ?>
								<span class="text-danger"><?= form_error('tmt') ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>No SK PAK</label>
							<input type="text" class="form-control" name="no_sk" id="no_sk_dosen" placeholder="Masukan No SK PAK" value="<?= $data['no_sk'] ?>">
							<?php if (form_error('no_sk')) : ?>
								<span class="text-danger"><?= form_error('no_sk') ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Tahun</label>
							<input type="text" class="form-control" name="tahun" id="tahun_dosen" placeholder="Masukan Tahun" value="<?= $data['tahun'] ?>">
							<?php if (form_error('tahun')) : ?>
								<span class="text-danger"><?= form_error('tahun') ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Dok PAK</label>
							<select class="form-control" name="dok_pak" id="dok_pak_dosen">
								<option value="1" <?= $data['dok_pak'] == '1' ? 'selected' : '' ?>>Ada</option>
								<option value="0" <?= $data['dok_pak'] == '0' ? 'selected' : '' ?>>Tidak Ada</option>
							</select>
							<?php if (form_error('dok_pak')) : ?>
								<span class="text-danger"><?= form_error('dok_pak') ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Pendidikan</label>
							<select class="form-control" name="id_pendidikan" id="pendidikan_dosen">
								<option value="0">Pilih Pendidikan</option>
								<?php foreach ($pendidikans as $pendidikan) : ?>
									<option value="<?= $pendidikan['pendidikan_id'] ?>" <?= $data['id_pendidikan'] == $pendidikan['pendidikan_id'] ? 'selected' : '' ?>><?= $pendidikan['nama'] ?></option>
								<?php endforeach; ?>
							</select>
							<?php if (form_error('id_pendidikan')) : ?>
								<span class="text-danger"><?= form_error('id_pendidikan') ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Status</label>
							<select class="form-control" name="status" id="status_dosen">
								<option value="aktif" <?= $data['status'] == 'aktif' ? 'selected' : '' ?>>Aktif</option>
								<option value="tidak_aktif" <?= $data['status'] == 'tidak_aktif' ? 'selected' : '' ?>>Tidak Aktif</option>
								<option value="tugas_belajar" <?= $data['status'] == 'tugas_belajar' ? 'selected' : '' ?>>Tugas Belajar</option>
							</select>
							<?php if (form_error('status')) : ?>
								<span class="text-danger"><?= form_error('status') ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label for="status_sertifikasi">Sertifikasi Dosen</label>
							<select class="form-control" name="status_sertifikasi" id="status_sertifikasi">
								<option value="1" <?= $data['status_sertifikasi'] == '1' ? 'selected' : '' ?>>Sudah Tersertifikasi</option>
								<option value="0" <?= $data['status_sertifikasi'] == '0' ? 'selected' : '' ?>>Belum Tersertifikasi</option>
							</select>
							<?php if (form_error('status_sertifikasi')) : ?>
								<span class="text-danger"><?= form_error('status_sertifikasi') ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Profesi</label>
							<select class="form-control" name="profesi" id="profesi_dosen">
								<option value="1" <?= $data['profesi'] == '1' ? 'selected' : '' ?>>Ya</option>
								<option value="0" <?= $data['profesi'] == '0' ? 'selected' : '' ?>>Tidak</option>
							</select>
							<?php if (form_error('profesi')) : ?>
								<span class="text-danger"><?= form_error('profesi') ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Status Pegawai</label>
							<select class="form-control" name="status_pegawai" id="status_pegawai_dosen">
								<option value="pns" <?= $data['status_pegawai'] == 'pns' ? 'selected' : '' ?>>PNS</option>
								<option value="non_asn" <?= $data['status_pegawai'] == 'non_asn' ? 'selected' : '' ?>>Non ASN</option>
								<option value="pppk" <?= $data['status_pegawai'] == 'pppk' ? 'selected' : '' ?>>PPPK</option>
							</select>
							<?php if (form_error('status_pegawai')) : ?>
								<span class="text-danger"><?= form_error('status_pegawai') ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group row">
							<div class="col">
								<button class="form-control btn btn-success" type="submit">
									Update Data
								</button>
							</div>
						</div>
					</div>
				</div>



			</div>
		</div>
</div>
</div>
</div>
</form>
</div>
<!-- /.container-fluid -->

<script>
	$(document).ready(function() {
		// Initialize form visibility based on the type (dosen/tendik)
		let jenis = "<?= $data['jenis'] ?>"; // assuming the type is stored in $data['jenis']
		if (jenis == 'dosen') {
			$('#dosen-form').show();
			$('#tendik-form').hide();
		} else if (jenis == 'tendik') {
			$('#tendik-form').show();
			$('#dosen-form').hide();
		} else {
			$('#dosen-form').hide();
			$('#tendik-form').hide();
		}

		// No need for the type dropdown since we are showing based on existing data
	});
</script>
