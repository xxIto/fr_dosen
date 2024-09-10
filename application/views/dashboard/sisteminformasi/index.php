<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
		<?php if ($this->session->userdata('role') == 1) : ?>
			<a href="<?= base_url('sisteminformasi/create') ?>" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm">
				<i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
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
			<div class="table-responsive">
				<table class="table" id="table-sisteminformasi">
					<thead>
						<tr>
							<th>No</th>

							<th width="500px">Nama</th>
							<th width="300px">Jenis Kelamin</th>
							<th width="400px">No HP</th>
							<th width="800px">Alamat</th>

							<th width="800px">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($sisteminformasis as $sisteminformasi) : ?>
							<tr>
								<td><?= $i++; ?></td>

								<td><?= $sisteminformasi['nama'] ?></td>
								<td><?= $sisteminformasi['jenis_kelamin'] ?></td>
								<td><?= $sisteminformasi['no_hp'] ?></td>
								<td><?= $sisteminformasi['alamat'] ?></td>

								<td>
									<a class="btn btn-primary mt-1" href="<?= base_url('sisteminformasi/show/' . $sisteminformasi['sisteminformasi_id']); ?>"><i class="fas fa-eye"></i> Detail</a>
									<?php if ($this->session->userdata('role') == 1) : ?>
										<a class="btn btn-warning mt-1" href="<?= base_url('sisteminformasi/edit/' . $sisteminformasi['sisteminformasi_id']); ?>"><i class="far fa-edit"></i> Edit</a>
										<a class="btn btn-danger mt-1" href="<?= base_url('sisteminformasi/destroy/' . $sisteminformasi['sisteminformasi_id']); ?>"><i class="fas fa-trash"></i> Hapus</a>
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
		$('#table-sisteminformasi').DataTable({
			dom: 'lBfrtip',
			buttons: [{
					extend: 'copy',
					exportOptions: {
						columns: [0, 1, 2, 3, 4]
					}
				},
				{
					extend: 'csv',
					exportOptions: {
						columns: [0, 1, 2, 3, 4]
					}
				},
				{
					extend: 'excel',
					exportOptions: {
						columns: [0, 1, 2, 3, 4]
					}
				},
				{
					extend: 'pdf',
					exportOptions: {
						columns: [0, 1, 2, 3, 4]
					}
				},
				{
					extend: 'print',
					exportOptions: {
						columns: [0, 1, 2, 3, 4]
					}
				},
			]
		});
	});
</script>

<style>
	.table {
		border-collapse: collapse;
		width: 100%;
	}

	.table th,
	.table td {
		border: 1px solid #dfdfdf;
		text-align: left;
	}

	.table th {
		background-color: #f2f2f2;
		font-weight: bold;
	}

	@media print {

		/* Menambahkan padding ke seluruh halaman cetak */
		.container-fluid {
			margin: 0 auto !important;
			padding-left: 10mm;
			padding-right: 10mm;
			width: auto;
			margin-bottom: 0 !important;
		}

		/* Sembunyikan elemen yang tidak diperlukan saat mencetak */
		.sidebar,
		.navbar,
		.footer,
		.btn,
		.page-heading {
			display: none !important;
		}

		/* Menampilkan kop surat dan tanda tangan hanya saat print */
		.kop-surat-container,
		.signature-container {
			display: flex !important;
		}

		/* Hapus padding dan bayangan pada card untuk cetak */
		.card {
			border: none;
			box-shadow: none;
			padding: 0 !important;
		}

		.table {
			margin-bottom: 0 !important;
			page-break-inside: avoid !important;
		}

		/* Mempertebal outline tabel saat dicetak */
		.table th,
		.table td {
			border: 1px solid black !important;
		}

		/* Atur margin bawah tanda tangan agar tidak ada ruang kosong */
		.signature-container {
			margin-top: 60px;
			margin-right: 50px;
		}
	}
</style>