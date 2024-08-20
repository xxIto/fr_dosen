<!-- Begin Page Content -->
<div class="container">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<a href="<?= base_url('jabatan') ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali</a>
		<h1 class="h3 mb-0">Edit Jabatan</h1>
	</div>

	<!-- Content Row -->
	<div class="card shadow-sm p-3 mb-5 bg-white rounded">
		<div class="card-body">
			<div class="container mt-3">
				<form action="<?= base_url('jabatan/update/' . $jabatans['jabatan_id']); ?>" method="POST">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan nama" required value="<?= $jabatans['nama'] ?>">
						<?php if (form_error('jabatan')) : ?>
							<span class="text-danger"><?= form_error('jabatan') ?></span>
						<?php endif; ?>
					</div>					
					<div class="form-group row">
						<div class="col">
							<button class="form-control btn btn-success" type="submit">
								Update Data
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
