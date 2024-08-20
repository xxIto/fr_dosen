<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<a href="<?= base_url('jabatan') ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali</a>
		<h1 class="h3 mb-0">Tambah Jabatan</h1>
	</div>

	<!-- Content Row -->
	<div class="card">
		<div class="container mt-3">
			<form action="<?= base_url('jabatan/store'); ?>" method="POST">
				<div class="form-group">
					<label>Nama</label>
					<input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan nama" required <?= (isset($nama)) ? "value= $nama " : '' ?>>
					<?php if (form_error('nama')) : ?>
						<span class="text-danger"><?= form_error('nama') ?></span>
					<?php endif; ?>
				</div>				
				<div class="form-group row">
					<div class="col">
						<button class="form-control btn btn-success" type="submit">
							Save Data
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
