<!-- Begin Page Content -->
<div class="container">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<a href="<?= base_url('dashboard') ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Back</a>
		<h1 class="h3 mb-0">Ubah Password</h1>
	</div>

	<!-- Content Row -->
	<div class="card shadow-sm p-3 mb-5 bg-white rounded">
		<div class="card-body">
			<div class="container mt-3">
				<?php if ($this->session->flashdata('error')) { ?>
					<div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
						<strong><?= $this->session->flashdata('error'); ?></strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php } ?>
				<form action="<?= base_url('user/changePassword'); ?>" method="POST">
					<div class="form-group">
						<label>Password Lama</label>
						<input type="password" class="form-control" name="currentpass" placeholder="Masukan password lama">
						<?php if (form_error('currentpass')) : ?>
							<span class="text-danger"><?= form_error('currentpass') ?></span>
						<?php endif; ?>
					</div>
					<div class="form-group">
						<label>Password Baru</label>
						<input type="password" class="form-control" name="newpass" placeholder="Masukan password baru">
						<?php if (form_error('newpass')) : ?>
							<span class="text-danger"><?= form_error('newpass') ?></span>
						<?php endif; ?>
					</div>
					<div class="form-group">
						<label>Konfirmasi Password Baru</label>
						<input type="password" class="form-control" name="confirmpass" placeholder="Masukan konfirmasi password baru">s
						<?php if (form_error('confirmpass')) : ?>
							<span class="text-danger"><?= form_error('confirmpass') ?></span>
						<?php endif; ?>
					</div>
					<div class="form-group row">
						<div class="col">
							<button class="form-control btn btn-primary" type="submit">
								Ubah Password
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
