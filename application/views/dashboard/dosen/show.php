<!-- CSS -->
<style>
	@media print {

		/* Sembunyikan elemen yang tidak diperlukan saat mencetak */
		.sidebar,
		.navbar,
		.footer,
		.btn {
			display: none !important;
		}

		/* Menambahkan padding ke seluruh halaman cetak */
		.container-fluid {
			margin: 0 auto;
			padding-left: 20mm;
			/* Tambahkan padding kiri */
			padding-right: 20mm;
			/* Tambahkan padding kanan */
			width: auto;
			/* Pastikan lebar disesuaikan secara otomatis */
		}

		/* Hapus padding dan bayangan pada card untuk cetak */
		.card {
			border: none;
			box-shadow: none;
			padding: 0 !important;
		}

		/* Style Kop Surat */
		.kop-surat-container {
			display: flex;
			align-items: center;
			justify-content: center;
			margin-bottom: 20px;
		}

		.kop-surat-container img {
			width: 120px;
			height: 120px;
			margin-right: 20px;
		}

		.kop-surat {
			text-align: center;
			font-family: 'Times New Roman', Times, serif;
			flex: 1;
		}

		.kop-surat h2,
		.kop-surat h3,
		.kop-surat p {
			margin: 0;
		}

		hr {
			display: block;
			width: 100%;
			margin-top: 10px;
			border: 1px solid black;
			clear: both;
		}

		/* Styling untuk tabel */
		.table-container {
			width: 100%;
			margin-top: 20px;
			border-collapse: collapse;
			table-layout: fixed;
		}

		.table-container th,
		.table-container td {
			border: 1px solid black;
			padding: 10px;
			font-size: 12px;
			font-family: 'Times New Roman', Times, serif;
		}

		.table-container th {
			width: 30%;
			background-color: #f2f2f2;
			text-align: left;
		}

		.table-container td {
			width: 70%;
			text-align: left;
		}

		/* Styling untuk tanggal dan tanda tangan menggunakan flexbox */
		.signature-container {
			display: flex;
			justify-content: flex-end;
			margin-top: 60px;
			margin-right: 50px;
		}

		.signature-content {
			text-align: center;
			font-family: 'Times New Roman', Times, serif;
		}

		.signature-content .date {
			margin-bottom: 20px;
		}

		.signature-content .position {
			margin-bottom: 5px;
		}

		.signature-content .position2 {
			margin-bottom: 80px;
		}

		.signature-content .name {
			font-weight: bold;
			margin-bottom: 2px;
		}

		.signature-content .nip {
			font-size: 18px;
		}

		.signature-content .separator {
			border-top: 1px solid black;
			width: 200px;
			margin: 5px auto;
		}
	}
</style>

<!-- HTML -->
<div class="container-fluid">
	<!-- Kop Surat -->
	<div class="kop-surat-container">
		<img src="<?= base_url('assets/img/logo_musamus.jpg') ?>" alt="Logo Universitas">
		<div class="kop-surat">
			<h2>KEMENTERIAN PENDIDIKAN, KEBUDAYAAN,<br> RISET DAN TEKNOLOGI</h2>
			<h3 class="univ-text">UNIVERSITAS MUSAMUS</h3>
			<p>Jalan Kamizaun Mopah Lama Merauke 99611</p>
			<p>Telepon: 0971-3306515 Fax 0971 325976 </p>
			<p>Email: <span>@unmus.ac.id</span></p>
		</div>
	</div>
	<hr>

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Detail Data Dosen</h1>
		<a href="<?= base_url('dosen') ?>" class="btn btn-outline-danger">
			<i class="fas fa-arrow-left"></i> Kembali
		</a>
	</div>

	<!-- Content Row -->
	<div class="card">
		<div class="card-body">
			<!-- Print Button -->
			<button onclick="printDetail()" class="btn btn-outline-primary mb-3">
				<i class="fas fa-print"></i> Print
			</button>

			<div id="detail-content" class="table-responsive">
				<table class="table-container">
					<tbody>
						<tr>
							<th>NIDN</th>
							<td>&emsp;: <?= $data['nidn'] ?></td>
						</tr>
						<tr>
							<th>Email</th>
							<td>&emsp;: <?= $data['email'] ?></td>
						</tr>
						<tr>
							<th>Nama</th>
							<td>&emsp;: <?= $data['nama'] ?></td>
						</tr>
						<tr>
							<th>Jenis Kelamin</th>
							<td>&emsp;: <?= $data['jenis_kelamin'] == 'laki' ? 'Laki - Laki' : 'Perempuan' ?></td>
						</tr>
						<tr>
							<th>Jurusan</th>
							<td>&emsp;: <?= $data['jurusan_nama'] ?></td>
						</tr>
						<tr>
							<th>Jabatan Fungsional</th>
							<td>&emsp;: <?= $data['jabatan_nama'] ?></td>
						</tr>
						<tr>
							<th>TMT Jabatan Fungsional</th>
							<td>&emsp;: <?= $data['tmt'] ?></td>
						</tr>
						<tr>
							<th>TMT Pangkat Golongan/PNS</th>
							<td>&emsp;: <?= $data['tmt_golongan'] ?></td>
						</tr>
						<tr>
							<th>No SK PAK</th>
							<td>&emsp;: <?= $data['no_sk'] ?></td>
						</tr>
						<tr>
							<th>Tahun</th>
							<td>&emsp;: <?= $data['tahun'] ?></td>
						</tr>
						<tr>
							<th>Dok PAK</th>
							<td>&emsp;: <?= $data['dok_pak'] == '1' ? 'Ada' : 'Tidak Ada' ?></td>
						</tr>
						<tr>
							<th>Pendidikan</th>
							<td>&emsp;: <?= $data['pendidikan_nama'] ?></td>
						</tr>
						<tr>
							<th>Status</th>
							<td>&emsp;: <?= $data['status'] == 'aktif' ? 'Aktif' : ($data['status'] == 'aktif_tugas_belajar' ? 'Aktif - Tugas Belajar' : ($data['status'] == 'tidak_aktif' ? 'Tidak Aktif' : 'Tugas Belajar')) ?></td>
						</tr>
						<tr>
							<th>Sertifikasi Dosen</th>
							<td>&emsp;: <?= $data['status_sertifikasi'] == '1' ? 'Sudah Tersertifikasi' : 'Belum Tersertifikasi' ?></td>
						</tr>
						<tr>
							<th>Profesi</th>
							<td>&emsp;: <?= $data['profesi'] == '1' ? 'Ya' : 'Tidak' ?></td>
						</tr>
						<tr>
							<th>Status Pegawai</th>
							<td>&emsp;: <?= $data['status_pegawai'] == 'pns' ? 'PNS' : ($data['status_pegawai'] == 'non_asn' ? 'Non ASN' : 'PPPK') ?></td>
						</tr>
					</tbody>
				</table>
			</div>

			<!-- Tanggal dan Tanda Tangan -->
			<div class="signature-container">
				<div class="signature-content">
					<p class="date">Merauke, <?= date('d F Y'); ?></p>
					<p class="position">Menyetujui</p>
					<p class="position2">Rektor</p>
					<div class="separator"></div>
					<p class="name">Ir. Jarot Budiasto, S.T., M.T.</p>
					<p class="nip">NIP: 198103042012121004</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- JavaScript -->
<script>
	function printDetail() {
		window.print();
	}
</script>
