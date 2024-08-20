<!-- Begin Page Content -->
<div class="container">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<a href="<?= base_url('user') ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali</a>
		<h1 class="h3 mb-0">Edit User</h1>
	</div>

	<!-- Content Row -->
	<div class="card shadow-sm p-3 mb-5 bg-white rounded">
		<div class="card-body">
			<div class="container mt-3">
				<form action="<?= base_url('user/update/' . $users['user_id']); ?>" method="POST">
					<div class="form-group">
						<label>Email</label>
						<input type="text" class="form-control" name="email" id="email" placeholder="Masukan email" required value="<?= $users['email'] ?>">
						<?php if (form_error('email')) : ?>
							<span class="text-danger"><?= form_error('email') ?></span>
						<?php endif; ?>
					</div>
					<div class="form-group">
						<label>Nama Depan</label>
						<input type="text" class="form-control" name="nama_depan" id="nama_depan" placeholder="Masukan nama depan" required value="<?= $users['nama_depan'] ?>">
						<?php if (form_error('nama_depan')) : ?>
							<span class="text-danger"><?= form_error('nama_depan') ?></span>
						<?php endif; ?>
					</div>
					<div class="form-group">
						<label>Nama Belakang</label>
						<input type="text" class="form-control" name="nama_belakang" id="nama_belakang" placeholder="Masukan nama belakang" required value="<?= $users['nama_belakang'] ?>">
						<?php if (form_error('nama_belakang')) : ?>
							<span class="text-danger"><?= form_error('nama_belakang') ?></span>
						<?php endif; ?>
					</div>
					<div class="form-group">
						<label>Nama Lengkap</label>
						<input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Masukan nama lengkap" required value="<?= $users['nama_lengkap'] ?>">
						<?php if (form_error('nama_lengkap')) : ?>
							<span class="text-danger"><?= form_error('nama_lengkap') ?></span>
						<?php endif; ?>
					</div>
					<div class="form-group">
						<label>No Telepon</label>
						<input type="text" class="form-control" name="no_telepon" id="no_telepon" placeholder="Masukan no telepon" required value="<?= $users['no_telepon'] ?>">
						<?php if (form_error('no_telepon')) : ?>
							<span class="text-danger"><?= form_error('no_telepon') ?></span>
						<?php endif; ?>
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" name="username" id="username" placeholder="Masukan username" required value="<?= $users['username'] ?>">
						<?php if (form_error('username')) : ?>
							<span class="text-danger"><?= form_error('username') ?></span>
						<?php endif; ?>
					</div>
					<div class="form-group">
						<label>Role</label>
						<select name="id_role" class="form-control" id="role_id" required>
							<option selected hidden>-- Role --</option>
							<option value="1" <?= $users['id_role'] == '1' ? 'selected' : '' ?>>Staf Dekan</option>
              <option value="2" <?= $users['id_role'] == '2' ? 'selected' : '' ?>>Dekan</option>
						</select>
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
