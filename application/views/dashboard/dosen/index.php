<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
		<?php if ($this->session->userdata('role') == 1) : ?>
			<a href="<?= base_url('dosen/create') ?>" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm">
				<i class="fas fa-plus fa-sm text-white-50"></i> Tambah Dosen</a>
		<?php endif; ?>
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
			<div class="d-flex justify-content-between mb-3">
				<!-- Dropdown Filter -->
				<div>
					<select id="filter-status-sertifikasi" class="form-control">
						<option value="">Semua</option>
						<option value="1">Sudah Tersertifikasi</option>
						<option value="0">Belum Tersertifikasi</option>
					</select>
				</div>

				<!-- Search Box (Tombol search sudah ada dari DataTables) -->
				<div>
					<input type="text" id="table-search" class="form-control" placeholder="Search">
				</div>
			</div>

			<div class="table-responsive">
				<table class="table" id="table-dosen">
					<thead>
						<tr>
							<th>No</th>
							<th>NIDN</th>
							<th>Nama</th>
							<th>Jabatan</th>
							<th>Status</th>
							<th>Status Sertifikasi</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($dosens as $dosen) : ?>
							<tr>
								<td><?= $i++; ?></td>
								<td><?= $dosen['nidn'] ?></td>
								<td><?= $dosen['nama'] ?></td>
								<td><?= $dosen['jabatan_nama'] ?></td>
								<td><?= $dosen['status'] ?></td>
								<td><?= $dosen['status_sertifikasi'] == '1' ? 'Sudah Tersertifikasi' : 'Belum Tersertifikasi' ?></td>
								<td>
									<a class="btn btn-primary mt-1" href="<?= base_url('dosen/show/' . $dosen['dosen_id']); ?>"><i class="fas fa-eye"></i> Detail</a>
									<?php if ($this->session->userdata('role') == 1) : ?>
										<a class="btn btn-warning mt-1" href="<?= base_url('dosen/edit/' . $dosen['dosen_id']); ?>"><i class="far fa-edit"></i> Edit</a>
										<a class="btn btn-danger mt-1" href="<?= base_url('dosen/destroy/' . $dosen['dosen_id']); ?>"><i class="fas fa-trash"></i> Hapus</a>
									<?php endif; ?>
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
		// Inisialisasi DataTables
		var table = $('#table-dosen').DataTable({
			dom: 'lBfrtip',
			buttons: [{
					extend: 'copy',
					exportOptions: {
						columns: [0, 1, 2, 3, 4, 5]
					}
				},
				{
					extend: 'csv',
					exportOptions: {
						columns: [0, 1, 2, 3, 4, 5]
					}
				},
				{
					extend: 'excel',
					exportOptions: {
						columns: [0, 1, 2, 3, 4, 5]
					}
				},
				{
					extend: 'pdf',
					exportOptions: {
						columns: [0, 1, 2, 3, 4, 5]
					}
				},
				{
					extend: 'print',
					exportOptions: {
						columns: [0, 1, 2, 3, 4, 5]
					}
				},
			]
		});

		// Filter berdasarkan status sertifikasi
		$('#filter-status-sertifikasi').on('change', function() {
			var statusSertifikasi = $(this).val();
			if (statusSertifikasi !== "") {
				table.column(5).search(statusSertifikasi == '1' ? 'Sudah Tersertifikasi' : 'Belum Tersertifikasi', true, false).draw();
			} else {
				table.column(5).search('').draw();
			}
		});

		// Search functionality
		$('#table-search').on('keyup', function() {
			table.search(this.value).draw();
		});
	});
</script>
