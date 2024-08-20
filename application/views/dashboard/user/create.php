<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<a href="<?= base_url('user') ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali</a>
		<h1 class="h3 mb-0">Tambah User</h1>
	</div>

	<!-- Content Row -->
	<div class="card">
		<div class="container mt-3">
			<form action="<?= base_url('user/store'); ?>" method="POST">
				<div class="form-group">
					<label>Email</label>
					<input type="text" class="form-control" name="email" id="email" placeholder="Masukan email" required <?= (isset($email)) ? "value= $email " : '' ?>>
					<?php if (form_error('email')) : ?>
						<span class="text-danger"><?= form_error('email') ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label>Nama Depan</label>
					<input type="text" class="form-control" name="nama_depan" id="nama_depan" placeholder="Masukan nama depan" required <?= (isset($nama_depan)) ? "value= $nama_depan " : '' ?>>
					<?php if (form_error('nama_depan')) : ?>
						<span class="text-danger"><?= form_error('nama_depan') ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label>Nama Belakang</label>
					<input type="text" class="form-control" name="nama_belakang" id="nama_belakang" placeholder="Masukan nama belakang" required <?= (isset($nama_belakang)) ? "value= $nama_belakang " : '' ?>>
					<?php if (form_error('nama_belakang')) : ?>
						<span class="text-danger"><?= form_error('nama_belakang') ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" class="form-control" name="nama_lengkap" id="name" placeholder="Masukan nama lengkap" required <?= (isset($nama_lengkap)) ? "value= $nama_lengkap " : '' ?>>
					<?php if (form_error('nama_lengkap')) : ?>
						<span class="text-danger"><?= form_error('nama_lengkap') ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label>No Telepon</label>
					<input type="text" class="form-control" name="no_telepon" id="no_telepon" placeholder="Masukan no_telepon" required <?= (isset($no_telepon)) ? "value= $no_telepon " : '' ?>>
					<?php if (form_error('no_telepon')) : ?>
						<span class="text-danger"><?= form_error('no_telepon') ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username" id="username" placeholder="Masukan username" required <?= (isset($username)) ? "value= $username " : '' ?>>
					<?php if (form_error('username')) : ?>
						<span class="text-danger"><?= form_error('username') ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" placeholder="Masukan password" required>
					<?php if (form_error('password')) : ?>
						<span class="text-danger"><?= form_error('password') ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label>Konfirmasi Password</label>
					<input type="password" class="form-control" name="passwordconf" id="passwordconf" placeholder="Masukan password kembali" required>
					<?php if (form_error('passwordconf')) : ?>
						<span class="text-danger"><?= form_error('passwordconf') ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label>Role</label>
					<select name="id_role" class="form-control" id="id_role" required>
						<option selected hidden value="">-- Role --</option>
						<option value="1">Staf Dekan</option>
            <option value="2">Dekan</option>
					</select>
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
