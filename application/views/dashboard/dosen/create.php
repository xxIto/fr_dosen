<head>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
</head>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<a href="<?= base_url('dosen') ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
			<i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
		</a>
		<h1 class="h3 mb-0">Tambah Dosen</h1>
	</div>

	<!-- Content Row -->
	<form id="form-dosen" action="<?= base_url('dosen/store'); ?>" method="POST">

		<!-- Dosen Form -->
		<div class="card mt-3">
			<div class="card-header">
				<h3 class="card-title">Dosen</h3>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label for="kode_dosen">NIDN</label>
					<input type="text" class="form-control" name="nidn" id="nidn" placeholder="Masukan NIDN">
					<?php if (form_error('nidn')) : ?>
						<span class="text-danger"><?= form_error('nidn') ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email Dosen" required>
					<?php if (form_error('email')) : ?>
						<span class="text-danger"><?= form_error('email') ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label for="nama_dosen">Nama</label>
					<input type="text" class="form-control" name="nama" id="nama_dosen" placeholder="Masukan nama">
					<?php if (form_error('nama')) : ?>
						<span class="text-danger"><?= form_error('nama') ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label for="jenis_kelamin_dosen">Jenis Kelamin</label>
					<select class="form-control" name="jenis_kelamin" id="jenis_kelamin_dosen">
						<option value="laki" selected>Laki - Laki</option>
						<option value="perempuan">Perempuan</option>
					</select>
					<?php if (form_error('jenis_kelamin')) : ?>
						<span class="text-danger"><?= form_error('jenis_kelamin') ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label for="jurusan_dosen">Jurusan</label>
					<select class="form-control" name="id_jurusan" id="jurusan_dosen">
						<option value="0">Pilih Jurusan</option>
						<?php foreach ($jurusans as $jurusan) : ?>
							<option value="<?= $jurusan['jurusan_id'] ?>"><?= $jurusan['nama'] ?></option>
						<?php endforeach; ?>
					</select>
					<?php if (form_error('id_jurusan')) : ?>
						<span class="text-danger"><?= form_error('id_jurusan') ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label for="jabatan_dosen">Jabatan Fungsional</label>
					<select class="form-control" name="id_jabatan" id="jabatan_dosen">
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
					<label for="tmt_dosen">TMT</label>
					<select class="form-control" name="tmt" id="tmt_dosen">
						<option value="-" selected>Pilih TMT</option>
						<option value="V">V</option>
						<option value="VI">VI</option>
						<option value="VII">VII</option>
						<option value="VIII">VIII</option>
						<option value="IX">IX</option>
						<option value="X">X</option>
						<option value="XI">XI</option>
					</select>
					<?php if (form_error('tmt_dosen')) : ?>
						<span class="text-danger"><?= form_error('tmt_dosen') ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label for="no_sk_dosen">No SK PAK</label>
					<input type="text" class="form-control" name="no_sk" id="no_sk_dosen" placeholder="Masukan No SK PAK">
					<?php if (form_error('no_sk')) : ?>
						<span class="text-danger"><?= form_error('no_sk') ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label for="tahun_dosen">Tahun</label>
					<input type="text" class="form-control" name="tahun" id="tahun_dosen" placeholder="Masukan Tahun" autocomplete="off">
					<?php if (form_error('tahun')) : ?>
						<span class="text-danger"><?= form_error('tahun') ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label for="dok_pak_dosen">Dok PAK</label>
					<select class="form-control" name="dok_pak" id="dok_pak_dosen">
						<option value="1" selected>Ada</option>
						<option value="0">Tidak Ada</option>
					</select>
					<?php if (form_error('dok_pak')) : ?>
						<span class="text-danger"><?= form_error('dok_pak') ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label for="pendidikan_dosen">Pendidikan</label>
					<select class="form-control" name="id_pendidikan" id="pendidikan_dosen">
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
					<label for="status_dosen">Status</label>
					<select class="form-control" name="status" id="status_dosen">
						<option value="aktif" selected>Aktif</option>
						<option value="tidak_aktif">Tidak Aktif</option>
						<option value="tugas_belajar">Tugas Belajar</option>
					</select>
					<?php if (form_error('status')) : ?>
						<span class="text-danger"><?= form_error('status') ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label for="status_sertifikasi">Sertifikasi Dosen</label>
					<select class="form-control" name="status_sertifikasi" id="status_sertifikasi" required>
						<option value="1">Sudah Tersertifikasi</option>
						<option value="0">Belum Tersertifikasi</option>
					</select>
					<?php if (form_error('status_sertifikasi')) : ?>
						<span class="text-danger"><?= form_error('status_sertifikasi') ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label for="profesi_dosen">Profesi</label>
					<select class="form-control" name="profesi" id="profesi_dosen">
						<option value="1" selected>Ya</option>
						<option value="0">Tidak</option>
					</select>
					<?php if (form_error('profesi')) : ?>
						<span class="text-danger"><?= form_error('profesi') ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label for="status_pegawai_dosen">Status Pegawai</label>
					<select class="form-control" name="status_pegawai" id="status_pegawai_dosen">
						<option value="pns" selected>PNS</option>
						<option value="non_asn">Non ASN</option>
						<option value="pppk">PPPK</option>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script>
	$(document).ready(function() {
		$('#tahun_dosen').datepicker({
			format: "yyyy",
			viewMode: "years",
			minViewMode: "years",
			autoclose: true
		});
	});
</script>
