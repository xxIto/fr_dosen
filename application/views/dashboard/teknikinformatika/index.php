<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
		<?php if ($this->session->userdata('role') == 1) : ?>
			<a href="<?= base_url('teknikinformatika/create') ?>" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm">
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
				<table class="table" id="table-teknikinformatika">
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
						<?php foreach ($teknikinformatikas as $teknikinformatika) : ?>
							<tr>
								<td><?= $i++; ?></td>

								<td><?= $teknikinformatika['nama'] ?></td>
								<td><?= $teknikinformatika['jenis_kelamin'] ?></td>
								<td><?= $teknikinformatika['no_hp'] ?></td>
								<td><?= $teknikinformatika['alamat'] ?></td>

								<td>
									<a class="btn btn-primary mt-1" href="<?= base_url('teknikinformatika/show/' . $teknikinformatika['teknikinformatika_id']); ?>"><i class="fas fa-eye"></i> Detail</a>
									<?php if ($this->session->userdata('role') == 1) : ?>
										<a class="btn btn-warning mt-1" href="<?= base_url('teknikinformatika/edit/' . $teknikinformatika['teknikinformatika_id']); ?>"><i class="far fa-edit"></i> Edit</a>
										<a class="btn btn-danger mt-1" href="<?= base_url('teknikinformatika/destroy/' . $teknikinformatika['teknikinformatika_id']); ?>"><i class="fas fa-trash"></i> Hapus</a>
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
		var table = $('#table-teknikinformatika').DataTable({
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
					},
					title: '',
					messageTop: function() {
						return `
                            <div style="display: flex; align-items: center; margin-bottom: 20px; font-family: 'Times New Roman', Times, serif;">
                                <div style="flex: 0 0 150px; text-align: left;">
                                    <img src="<?= base_url('assets/img/logo_musamus.jpg') ?>" style="width: 150px; height: 150px;" alt="Logo Universitas">
                                </div>
                                <div style="flex: 1; text-align: center;">
                                    <p style="font-weight: bold; margin: 0; font-size: 25px;">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET, DAN TEKNOLOGI</p>
                                    <p style="font-weight: bold; margin: 0; font-size: 25px;">UNIVERSITAS MUSAMUS</p>
                                    <p style="margin: 0; font-size: 24px;">Jalan Kamizaun Mopah Lama Merauke 99611</p>
                                    <p style="margin: 0; font-size: 24px;">Telepon 0971-325923 Faksimile 0971-325976</p>
                                    <p style="margin: 0; font-size: 24px;">Email: <span style="color: blue;">perpustakaan@unmus.ac.id</span></p>
                                </div>
                            </div>
                            <hr style="border: 1px solid black; margin-bottom: 40px;">`;
					},
					messageBottom: function() {
						return `
                        <div style="margin-top: 50px;">
                            <div style="text-align: right;">
                                <p style="margin-right: 30px;">Merauke, <?= date('d F Y'); ?></p>
                                <p style="margin-bottom: 80px; margin-right: 105px;">Dekan</p>
                                <p style="font-weight: bold; margin-bottom: 0;">Ir. Frederik H. Sumbung, S.T., M.Eng.</p>
                                <div style="border-top: 1px solid black; width: 270px; margin: 0; margin-left: 865px;"></div>
                                <p style="margin-right: 25px;">NIP: 197503082005011013</p>
                            </div>
                        </div>`;
					}
				}
			]
		});

		$('#filter-status-sertifikasi').on('change', function() {
			var statusSertifikasi = $(this).val();
			if (statusSertifikasi !== "") {
				table.column(5).search(statusSertifikasi == '1' ? 'Sudah Tersertifikasi' : 'Belum Tersertifikasi', true, false).draw();
			} else {
				table.column(5).search('').draw();
			}
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