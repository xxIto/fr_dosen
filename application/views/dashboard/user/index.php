<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
		<a href="<?= base_url('user/create') ?>" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah User</a>
	</div>

	<?php if ($this->session->flashdata('success')) { ?>
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong><?= $this->session->flashdata('success'); ?></strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php } else if ($this->session->flashdata('error')) { ?>
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong><?= $this->session->flashdata('error'); ?></strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php } ?>

	<!-- Content Row -->
	<div class="card shadow-sm p-3 mb-5 bg-white rounded">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table" id="table-user">
					<thead>
						<tr>
							<th>No</th>
							<th width="800px">Name</th>
							<th width="400px">Role</th>
							<th width="800px">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($users as $user) : ?>
							<tr>
								<td><?= $i++; ?></td>
								<td><?= $user['nama_lengkap'] ?></td>
								<td><?= $user['id_role'] == 1 ? 'Staf Dekan' : 'Dekan' ?></td>
								<td>
									<a class="btn btn-warning mt-1" href="<?= base_url('user/edit/' . $user['user_id']); ?>"><i class="far fa-edit"></i> Edit</a>
									<a class="btn btn-primary mt-1" href="<?= base_url('user/show/' . $user['user_id']); ?>"><i class="fas fa-eye"></i> Detail</a>
									<a class="btn btn-danger mt-1" href="<?= base_url('user/destroy/' . $user['user_id']); ?>"><i class="fas fa-trash"></i> Hapus</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

<script>
	$(document).ready(function() {
		$('#table-user').DataTable({
			dom: 'lBfrtip',
			buttons: [{
					extend: 'copy',
					exportOptions: {
						columns: [0, 1, 2]
					}
				},
				{
					extend: 'csv',
					exportOptions: {
						columns: [0, 1, 2]
					}
				},
				{
					extend: 'excel',
					exportOptions: {
						columns: [0, 1, 2]
					}
				},
				{
					extend: 'pdf',
					exportOptions: {
						columns: [0, 1, 2]
					}
				},
				{
					extend: 'print',
					exportOptions: {
						columns: [0, 1, 2]
					}
				},
			]
		});
	});
</script>
