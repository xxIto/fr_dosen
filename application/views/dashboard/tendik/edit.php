<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<a href="<?= base_url('tendik') ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali</a>
		<h1 class="h3 mb-0">Edit Data</h1>
	</div>

	<!-- Content Row -->
	<form id="form-tendik-tendik" action="<?= base_url('tendik/update/' . $data['tendik_id']); ?>" method="POST">
		<div class="card">
			<div class="container mt-3">
				<!-- Form tendik -->
				<div class="card mt-3" id="tendik-form">
					<div class="card-header">
						<h3 class="card-title">Tendik</h3>
					</div>
					<div class="container mt-3">
						<div class="form-group">
							<label>NIPPPK</label>
							<input type="text" class="form-control" name="kode" id="kode" placeholder="Masukan NIPPPK" value="<?= $data['kode'] ?>">
							<?php if (form_error('kode')) : ?>
								<span class="text-danger"><?= form_error('kode') ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Nama Pegawai</label>
							<input type="text" class="form-control" name="nama" id="nama_tendik" placeholder="Masukan nama" value="<?= $data['nama'] ?>">
							<?php if (form_error('nama')) : ?>
								<span class="text-danger"><?= form_error('nama') ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label for="pendidikan_tendik">Pendidikan</label>
							<input type="text" class="form-control" name="pendidikan" id="pendidikan_tendik" placeholder="Masukkan Pendidikan" value="<?= $data['pendidikan'] ?>">
							<?php if (form_error('pendidikan')) : ?>
								<span class="text-danger"><?= form_error('pendidikan') ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Jabatan</label>
							<select class="form-control" name="id_jabatan" id="jabatan_tendik">
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
							<label>Golongan</label>
							<input type="text" class="form-control" name="golongan" id="golongan" placeholder="Masukan Golongan" value="<?= $data['golongan'] ?>">
							<?php if (form_error('golongan')) : ?>
								<span class="text-danger"><?= form_error('golongan') ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>TMT</label>
							<input type="date" class="form-control" name="tmt" id="tmt_tendik" placeholder="Masukan TMT" value="<?= $data['tmt'] ?>">
							<?php if (form_error('tmt')) : ?>
								<span class="text-danger"><?= form_error('tmt') ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Keterangan</label>
							<input type="text" class="form-control" name="ket" id="ket" placeholder="Masukan Keterangan" value="<?= $data['ket'] ?>">
							<?php if (form_error('ket')) : ?>
								<span class="text-danger"><?= form_error('ket') ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Penempatan</label>
							<select class="form-control" name="id_penempatan" id="penempatan_tendik">
								<option value="0">Pilih Penempatan</option>
								<?php foreach ($penempatans as $penempatan) : ?>
									<option value="<?= $penempatan['penempatan_id'] ?>" <?= $data['id_penempatan'] == $penempatan['penempatan_id'] ? 'selected' : '' ?>><?= $penempatan['nama'] ?></option>
								<?php endforeach; ?>
							</select>
							<?php if (form_error('id_penempatan')) : ?>
								<span class="text-danger"><?= form_error('id_penempatan') ?></span>
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
		// Initialize form visibility based on the type (tendik/tendik)
		let jenis = "<?= $data['jenis'] ?>"; // assuming the type is stored in $data['jenis']
		if (jenis == 'tendik') {
			$('#tendik-form').show();
			$('#tendik-form').hide();
		} else if (jenis == 'tendik') {
			$('#tendik-form').show();
			$('#tendik-form').hide();
		} else {
			$('#tendik-form').hide();
			$('#tendik-form').hide();
		}

		// No need for the type dropdown since we are showing based on existing data
	});
</script>