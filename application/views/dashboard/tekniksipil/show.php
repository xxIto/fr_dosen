<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Kop Surat -->
	<div class="kop-surat-container">
		<img src="<?= base_url('assets/img/logo_musamus.jpg') ?>" alt="Logo Universitas">
		<div class="kop-surat">
			<p style="font-weight: bold; margin: 0; font-size: 23px;">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET, DAN TEKNOLOGI</p>
			<p style="font-weight: bold; margin: 0; font-size: 25px;">UNIVERSITAS MUSAMUS</p>
			<p style="margin: 0; font-size: 24px;">Jalan Kamizaun Mopah Lama Merauke 99611</p>
			<p style="margin: 0; font-size: 24px;">Telepon 0971-325923 Faksimile 0971-325976</p>
			<p style="margin: 0; font-size: 24px;">Email: <span style="color: blue;">perpustakaan@unmus.ac.id</span></p>
		</div>
	</div>
	<hr>

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4 page-heading">
		<h1 class="h3 mb-0">Detail Data</h1>
		<a href="<?= base_url('tekniksipil') ?>" class="btn btn-outline-danger">
			<i class="fas fa-arrow-left"></i> Kembali
		</a>
	</div>

	<!-- Content Row -->
	<div class="card p-3 mb-5 bg-white rounded">
		<div class="card-body">
			<!-- Print Button -->
			<button onclick="printDetail()" class="btn btn-outline-primary mb-3">
				<i class="fas fa-print"></i> Print
			</button>

			<div id="detail-content" class="table-responsive">
				<table class="table-container">
					<tbody>
						<tr>
							<th>Foto</th>
							<td><img src="<?= base_url('uploads/' . $data['foto']); ?>" alt="Foto" width="200"></td>
						</tr>
						<tr>
							<th>Nomor Surat</th>
							<td>&emsp;: <?= $data['nomor'] ?></td>
						</tr>
						<tr>
							<th>Tanggal</th>
							<td>&emsp;: <?= $data['tanggal'] ?></td>
						</tr>
						<tr>
							<th>Nama</th>
							<td>&emsp;: <?= $data['nama'] ?></td>
						</tr>
						<tr>
							<th>Jenis Kelamin</th>
							<td>&emsp;: <?= $data['jenis_kelamin'] == 'Laki-laki' ? 'Laki-laki' : 'Perempuan' ?></td>
						</tr>
						<tr>
							<th>Tempat Lahir</th>
							<td>&emsp;: <?= $data['tempat_lahir'] ?></td>
						</tr>
						<tr>
							<th>Agama</th>
							<td>&emsp;: <?= $data['agama'] ?></td>
						</tr>
						<tr>
							<th>Alamat</th>
							<td>&emsp;: <?= $data['alamat'] ?></td>
						</tr>
						<tr>
							<th>No HP</th>
							<td>&emsp;: <?= $data['no_hp'] ?></td>
						</tr>
						<tr>
							<th>No Rumah</th>
							<td>&emsp;: <?= $data['no_rumah'] ?></td>
						</tr>
						<tr>
							<th>Asal SD</th>
							<td>&emsp;: <?= $data['asal_sd'] ?></td>
						</tr>
						<tr>
							<th>Tanggal SD</th>
							<td>&emsp;: <?= $data['tanggal_sd'] ?></td>
						</tr>
						<tr>
							<th>No Ijasah SD</th>
							<td>&emsp;: <?= $data['noijasah_sd'] ?></td>
						</tr>
						<tr>
							<th>Asal SLTP</th>
							<td>&emsp;: <?= $data['asal_sltp'] ?></td>
						</tr>
						<tr>
							<th>Tanggal SLTP</th>
							<td>&emsp;: <?= $data['tanggal_sltp'] ?></td>
						</tr>
						<tr>
							<th>No Ijasah SLTP</th>
							<td>&emsp;: <?= $data['noijasah_sltp'] ?></td>
						</tr>
						<tr>
							<th>Asal SLTA</th>
							<td>&emsp;: <?= $data['asal_slta'] ?></td>
						</tr>
						<tr>
							<th>Tanggal SLTA</th>
							<td>&emsp;: <?= $data['tanggal_slta'] ?></td>
						</tr>
						<tr>
							<th>No Ijasah SLTA</th>
							<td>&emsp;: <?= $data['noijasah_slta'] ?></td>
						</tr>
						<tr>
							<th>Kualifikasi D3</th>
							<td>&emsp;: <?= $data['kualifikasi_d3'] ?></td>
						</tr>
						<tr>
							<th>Universitas D3</th>
							<td>&emsp;: <?= $data['universitas_d3'] ?></td>
						</tr>
						<tr>
							<th>Tanggal D3</th>
							<td>&emsp;: <?= $data['tanggal_d3'] ?></td>
						</tr>
						<tr>
							<th>No Ijasah D3</th>
							<td>&emsp;: <?= $data['noijasah_d3'] ?></td>
						</tr>
						<tr>
							<th>Gelar D3</th>
							<td>&emsp;: <?= $data['gelar_d3'] ?></td>
						</tr>
						<tr>
							<th>Kualifikasi S1</th>
							<td>&emsp;: <?= $data['kualifikasi_s1'] ?></td>
						</tr>
						<tr>
							<th>Universitas S1</th>
							<td>&emsp;: <?= $data['universitas_s1'] ?></td>
						</tr>
						<tr>
							<th>Tanggal S1</th>
							<td>&emsp;: <?= $data['tanggal_s1'] ?></td>
						</tr>
						<tr>
							<th>No Ijasah S1</th>
							<td>&emsp;: <?= $data['noijasah_s1'] ?></td>
						</tr>
						<tr>
							<th>Gelar S1</th>
							<td>&emsp;: <?= $data['gelar_s1'] ?></td>
						</tr>
						<tr>
							<th>Kualifikasi S2</th>
							<td>&emsp;: <?= $data['kualifikasi_s2'] ?></td>
						</tr>
						<tr>
							<th>Universitas S2</th>
							<td>&emsp;: <?= $data['universitas_s2'] ?></td>
						</tr>
						<tr>
							<th>Tanggal S2</th>
							<td>&emsp;: <?= $data['tanggal_s2'] ?></td>
						</tr>
						<tr>
							<th>No Ijasah S2</th>
							<td>&emsp;: <?= $data['noijasah_s2'] ?></td>
						</tr>
						<tr>
							<th>Gelar S2</th>
							<td>&emsp;: <?= $data['gelar_s2'] ?></td>
						</tr>
						<tr>
							<th>Kualifikasi S3</th>
							<td>&emsp;: <?= $data['kualifikasi_s3'] ?></td>
						</tr>
						<tr>
							<th>Universitas S3</th>
							<td>&emsp;: <?= $data['universitas_s3'] ?></td>
						</tr>
						<tr>
							<th>Tanggal S3</th>
							<td>&emsp;: <?= $data['tanggal_s3'] ?></td>
						</tr>
						<tr>
							<th>No Ijasah S3</th>
							<td>&emsp;: <?= $data['noijasah_s3'] ?></td>
						</tr>
						<tr>
							<th>Gelar S3</th>
							<td>&emsp;: <?= $data['gelar_s3'] ?></td>
						</tr>
						<tr>
							<th>Sertifikat Formal</th>
							<td>&emsp;: <?= $data['sertifikat_formal'] ?></td>
						</tr>
						<tr>
							<th>Sertifikat Nonformal</th>
							<td>&emsp;: <?= $data['sertifikat_nonformal'] ?></td>
						</tr>
						<tr>
							<th>SK CPNS</th>
							<td>&emsp;: <?= $data['sk_cpns'] ?></td>
						</tr>
						<tr>
							<th>TMT CPNS</th>
							<td>&emsp;: <?= $data['tmt_cpns'] ?></td>
						</tr>
						<tr>
							<th>Pejabat CPNS</th>
							<td>&emsp;: <?= $data['pejabat_cpns'] ?></td>
						</tr>
						<tr>
							<th>SPMT CPNS</th>
							<td>&emsp;: <?= $data['spmt_cpns'] ?></td>
						</tr>
						<tr>
							<th>Tanggal SPMT CPNS</th>
							<td>&emsp;: <?= $data['tglspmt_cpns'] ?></td>
						</tr>
						<tr>
							<th>STTPL CPNS</th>
							<td>&emsp;: <?= $data['sttpl_cpns'] ?></td>
						</tr>
						<tr>
							<th>Tanggal STTPL CPNS</th>
							<td>&emsp;: <?= $data['tglsttpl_cpns'] ?></td>
						</tr>
						<tr>
							<th>SK PNS</th>
							<td>&emsp;: <?= $data['sk_pns'] ?></td>
						</tr>
						<tr>
							<th>TMT PNS</th>
							<td>&emsp;: <?= $data['tmt_pns'] ?></td>
						</tr>
						<tr>
							<th>Pejabat PNS</th>
							<td>&emsp;: <?= $data['pejabat_pns'] ?></td>
						</tr>
						<tr>
							<th>Karis PNS</th>
							<td>&emsp;: <?= $data['karis_pns'] ?></td>
						</tr>
						<tr>
							<th>Taspen PNS</th>
							<td>&emsp;: <?= $data['taspen_pns'] ?></td>
						</tr>
						<tr>
							<th>Karpeg PNS</th>
							<td>&emsp;: <?= $data['karpeg_pns'] ?></td>
						</tr>
						<tr>
							<th>SK DOSTAP</th>
							<td>&emsp;: <?= $data['sk_dostap'] ?></td>
						</tr>
						<tr>
							<th>TMT DOSTAP</th>
							<td>&emsp;: <?= $data['tmt_dostap'] ?></td>
						</tr>
						<tr>
							<th>Pejabat DOSTAP</th>
							<td>&emsp;: <?= $data['pejabat_dostap'] ?></td>
						</tr>
						<tr>
							<th>SK DOSTRAK</th>
							<td>&emsp;: <?= $data['sk_dostrak'] ?></td>
						</tr>
						<tr>
							<th>TMT DOSTRAK</th>
							<td>&emsp;: <?= $data['tmt_dostrak'] ?></td>
						</tr>
						<tr>
							<th>Pejabat DOSTRAK</th>
							<td>&emsp;: <?= $data['pejabat_dostrak'] ?></td>
						</tr>
						<tr>
							<th>SK PETAP</th>
							<td>&emsp;: <?= $data['sk_petap'] ?></td>
						</tr>
						<tr>
							<th>TMT PETAP</th>
							<td>&emsp;: <?= $data['tmt_petap'] ?></td>
						</tr>
						<tr>
							<th>Pejabat PETAP</th>
							<td>&emsp;: <?= $data['pejabat_petap'] ?></td>
						</tr>
						<tr>
							<th>SK PETRAK</th>
							<td>&emsp;: <?= $data['sk_petrak'] ?></td>
						</tr>
						<tr>
							<th>TMT PETRAK</th>
							<td>&emsp;: <?= $data['tmt_petrak'] ?></td>
						</tr>
						<tr>
							<th>Pejabat PETRAK</th>
							<td>&emsp;: <?= $data['pejabat_petrak'] ?></td>
						</tr>
						<tr>
							<th>NIP</th>
							<td>&emsp;: <?= $data['nip'] ?></td>
						</tr>
						<tr>
							<th>NIDN</th>
							<td>&emsp;: <?= $data['nidn'] ?></td>
						</tr>
						<tr>
							<th>NIK</th>
							<td>&emsp;: <?= $data['nik'] ?></td>
						</tr>
						<tr>
							<th>Total AK1</th>
							<td>&emsp;: <?= $data['total_ak1'] ?></td>
						</tr>
						<tr>
							<th>TMT1</th>
							<td>&emsp;: <?= $data['tmt1'] ?></td>
						</tr>
						<tr>
							<th>No SK1</th>
							<td>&emsp;: <?= $data['no_sk1'] ?></td>
						</tr>
						<tr>
							<th>Total AK2</th>
							<td>&emsp;: <?= $data['total_ak2'] ?></td>
						</tr>
						<tr>
							<th>TMT2</th>
							<td>&emsp;: <?= $data['tmt2'] ?></td>
						</tr>
						<tr>
							<th>No SK2</th>
							<td>&emsp;: <?= $data['no_sk2'] ?></td>
						</tr>
						<tr>
							<th>Total AK3</th>
							<td>&emsp;: <?= $data['total_ak3'] ?></td>
						</tr>
						<tr>
							<th>TMT3</th>
							<td>&emsp;: <?= $data['tmt3'] ?></td>
						</tr>
						<tr>
							<th>No SK3</th>
							<td>&emsp;: <?= $data['no_sk3'] ?></td>
						</tr>
						<!-- Tambahkan sesuai pola untuk Total AK4 hingga AK12 -->
						<tr>
							<th>Status Kawin</th>
							<td>&emsp;: <?= $data['status_kawin'] ?></td>
						</tr>
						<tr>
							<th>Nama Ayah</th>
							<td>&emsp;: <?= $data['nama_ayah'] ?></td>
						</tr>
						<tr>
							<th>Nama Ibu</th>
							<td>&emsp;: <?= $data['nama_ibu'] ?></td>
						</tr>
						<tr>
							<th>Nama Pasangan</th>
							<td>&emsp;: <?= $data['nama_pasangan'] ?></td>
						</tr>
						<tr>
							<th>Nama Anak</th>
							<td>&emsp;: <?= $data['nama_anak'] ?></td>
						</tr>
						<tr>
							<th>NPWP</th>
							<td>&emsp;: <?= $data['npwp'] ?></td>
						</tr>
						<tr>
							<th>Nomor Rekening</th>
							<td>&emsp;: <?= $data['nomor_rekening'] ?></td>
						</tr>
						<tr>
							<th>Nama Kartu</th>
							<td>&emsp;: <?= $data['nama_kartu'] ?></td>
						</tr>
						<tr>
							<th>Nomor Kartu</th>
							<td>&emsp;: <?= $data['nomor_kartu'] ?></td>
						</tr>
						<tr>
							<th>Gol Darah</th>
							<td>&emsp;: <?= $data['gol_darah'] ?></td>
						</tr>
						<tr>
							<th>Status Pegawai</th>
							<td>&emsp;: <?= $data['status_pegawai'] ?></td>
						</tr>
						<tr>
							<th>Dosen PNS</th>
							<td>&emsp;: <?= $data['dosen_pns'] == '1' ? 'Ya' : 'Tidak' ?></td>
						</tr>
						<tr>
							<th>Dosen Tetap</th>
							<td>&emsp;: <?= $data['dosen_tetap'] == '1' ? 'Ya' : 'Tidak' ?></td>
						</tr>
						<tr>
							<th>Dosen Kontrak</th>
							<td>&emsp;: <?= $data['dosen_kontrak'] == '1' ? 'Ya' : 'Tidak' ?></td>
						</tr>
						<tr>
							<th>Tendik PNS</th>
							<td>&emsp;: <?= $data['tendik_pns'] == '1' ? 'Ya' : 'Tidak' ?></td>
						</tr>
						<tr>
							<th>Tendik Tetap</th>
							<td>&emsp;: <?= $data['tendik_tetap'] == '1' ? 'Ya' : 'Tidak' ?></td>
						</tr>
						<tr>
							<th>Tendik Kontrak</th>
							<td>&emsp;: <?= $data['tendik_kontrak'] == '1' ? 'Ya' : 'Tidak' ?></td>
						</tr>
					</tbody>
				</table>
			</div>

			<!-- Tanggal dan Tanda Tangan -->
			<div class="signature-container">
				<div class="signature-content">
					<p class="date">Merauke, <?= date('d F Y'); ?></p>
					<p class="position">Menyetujui</p>
					<p class="position2">Dekan</p>
					<p class="name">Ir. Frederik H. Sumbung, S.T., M.Eng.</p>
					<div class="separator"></div>
					<p class="nip">NIP: 197503082005011013</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- JavaScript for Print Function -->
<script>
	function printDetail() {
		window.print();
	}
</script>

<style>
	/* Default state: Sembunyikan kop surat dan tanda tangan di tampilan web */
	.kop-surat-container,
	.signature-container {
		display: none;
	}

	@media print {

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

		/* Menambahkan padding ke seluruh halaman cetak */
		.container-fluid {
			margin: 0 auto;
			padding-left: 10mm;
			padding-right: 10mm;
			width: auto;
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
			width: 150px;
			height: 150px;
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
			width: 270px;
			margin: 5px auto;
		}
	}
</style>