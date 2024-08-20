<!-- Begin Page Content -->
<div class="container">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0">Detail User</h1>
	</div>

	<!-- Content Row -->
	<div class="card shadow-sm p-3 mb-5 bg-white rounded">
		<div class="card-body">
			<div class="container mt-3">
				<div class="form-group">
					<label>Email</label>
					<input type="text" class="form-control" name="email" id="email" placeholder="Masukan email" required value="<?= $users['email']; ?>" readonly>
					<?php if (form_error('email')) : ?>
						<span class="text-danger"><?= form_error('email') ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label>Nama Depan</label>
					<input type="text" class="form-control" name="nama_depan" id="nama_depan" placeholder="Masukan nama depan" required value="<?= $users['nama_depan'] ?>" readonly>
					<?php if (form_error('nama_depan')) : ?>
						<span class="text-danger"><?= form_error('nama_depan') ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label>Nama Belakang</label>
					<input type="text" class="form-control" name="nama_belakang" id="nama_belakang" placeholder="Masukan nama belakang" required value="<?= $users['nama_belakang'] ?>" readonly>
					<?php if (form_error('nama_belakang')) : ?>
						<span class="text-danger"><?= form_error('nama_belakang') ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Masukan nama lengkap" required value="<?= $users['nama_lengkap'] ?>" readonly>
					<?php if (form_error('nama_lengkap')) : ?>
						<span class="text-danger"><?= form_error('nama_lengkap') ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label>No Telepon</label>
					<input type="text" class="form-control" name="no_telepon" id="nama_belakang" placeholder="Masukan no telepon" required value="<?= $users['no_telepon']; ?>" readonly>
					<?php if (form_error('no_telepon')) : ?>
						<span class="text-danger"><?= form_error('no_telepon') ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username" id="nama_lengkap" placeholder="Masukan username" required value="<?= $users['username']; ?>" readonly>
					<?php if (form_error('username')) : ?>
						<span class="text-danger"><?= form_error('username') ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label>Role</label>
					<input type="text" class="form-control" name="id_role" id="id_role" placeholder="Masukan Role" required value="<?= $users['id_role'] == 1 ? 'Staf Dekan' : 'Dekan'; ?>" readonly>
				</div>
				<div class="form-group row">
					<div class="col">
						<a href="<?= base_url('user') ?>" class=" btn btn-outline-danger">
							Kembali
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->
