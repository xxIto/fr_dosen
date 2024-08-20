<body id="page-top">
	<div id="wrapper">
		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
				<div class="container-fluid">
					<h1 class="h3 mb-2 text-gray-800">Dashboard</h1>
					<div class="row">
						<!-- Total Dosen -->
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-primary shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
												Total Dosen</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800">
												<?= $total_dosen; ?>
											</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-university fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Total PPPK -->
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-warning shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
												Total PPPK</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800">
												<?= $total_pppk; ?>
											</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-users fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Total Tendik -->
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-info shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-info text-uppercase mb-1">
												Total Tendik</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800">
												<?= $total_tendik; ?>
											</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Total Dosen Sudah Sertifikasi -->
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-success shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
												Dosen Sudah Sertifikasi</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800">
												<?= $dosen_sudah_sertifikasi; ?>
											</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-check-circle fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-6 col-lg-7">
							<!-- Chart 1 -->
							<div class="card shadow mb-4">
								<div class="card-header py-3">
									<h6 class="m-0 font-weight-bold text-primary">Grafik Status Kepegawaian Dosen Berdasarkan Jurusan</h6>
								</div>
								<div class="card-body">
									<div class="chart-bar">
										<canvas id="statusPegawaiChart" width="400" height="200"></canvas>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-6 col-lg-7">
							<!-- Chart 2 -->
							<div class="card shadow mb-4">
								<div class="card-header py-3">
									<h6 class="m-0 font-weight-bold text-primary">Grafik Status Dosen Berdasarkan Jurusan</h6>
								</div>
								<div class="card-body">
									<div class="chart-bar">
										<canvas id="statusChart"></canvas>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-6 col-lg-7">
							<!-- Chart Jabatan -->
							<div class="card shadow mb-4">
								<div class="card-header py-3">
									<h6 class="m-0 font-weight-bold text-primary">Grafik Jumlah Dosen Berdasarkan Jabatan</h6>
								</div>
								<div class="card-body">
									<div class="chart-bar">
										<canvas id="jabatanChart"></canvas>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-6 col-lg-7">
							<div class="card shadow mb-4">
								<div class="card-header py-3">
									<h6 class="m-0 font-weight-bold text-primary">Status Sertifikasi Dosen Berdasarkan Jurusan</h6>
								</div>
								<div class="card-body">
									<div class="chart-bar">
										<canvas id="statusSertifikasiChart"></canvas>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</body>

<script src="<?= base_url('assets/') ?>js/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
	// Fungsi untuk memformat angka menjadi format yang sesuai
	function number_format(number, decimals, dec_point, thousands_sep) {
		number = (number + '').replace(',', '').replace(' ', '');
		var n = !isFinite(+number) ? 0 : +number,
			prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
			sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
			dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
			s = '',
			toFixedFix = function(n, prec) {
				var k = Math.pow(10, prec);
				return '' + Math.round(n * k) / k;
			};
		// Fix untuk bug rounding
		s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
		if (s[0].length > 3) {
			s[0] = s[0].replace(/\B(?=(\d{3})+(?!\d))/g, sep);
		}
		if ((s[1] || '').length < prec) {
			s[1] = s[1] || '';
			s[1] += new Array(prec - s[1].length + 1).join('0');
		}
		return s.join(dec);
	}

	// Chart untuk data jurusan
	var ctxJurusan = document.getElementById("statusChart").getContext('2d');
	var jurusanData = <?= json_encode($jurusan_stats); ?>;

	var labelsJurusan = jurusanData.map(function(item) {
		return item.jurusan_nama;
	});
	var activeDataJurusan = jurusanData.map(function(item) {
		return item.aktif;
	});
	var tubelDataJurusan = jurusanData.map(function(item) {
		return item.tubel;
	});

	new Chart(ctxJurusan, {
		type: 'bar',
		data: {
			labels: labelsJurusan,
			datasets: [{
					label: 'Jumlah Dosen Aktif',
					data: activeDataJurusan,
					backgroundColor: '#4e73df',
					hoverBackgroundColor: '#2e59d9',
					borderColor: '#4e73df',
					borderWidth: 1,
					barPercentage: 0.7,
					categoryPercentage: 0.8
				},
				{
					label: 'Jumlah Dosen Tubel',
					data: tubelDataJurusan,
					backgroundColor: '#f6c23e',
					hoverBackgroundColor: '#f4b619',
					borderColor: '#f6c23e',
					borderWidth: 1,
					barPercentage: 0.7,
					categoryPercentage: 0.8
				}
			]
		},
		options: {
			responsive: true,
			maintainAspectRatio: true,
			scales: {
				x: {
					grid: {
						display: false,
						drawBorder: false
					},
					ticks: {
						color: '#858796',
						font: {
							size: 14
						}
					}
				},
				y: {
					beginAtZero: true,
					grid: {
						color: "rgb(234, 236, 244)",
						zeroLineColor: "rgb(234, 236, 244)",
						drawBorder: false,
						borderDash: [2],
						zeroLineBorderDash: [2]
					},
					ticks: {
						color: '#858796',
						font: {
							size: 14
						},
						padding: 10,
						callback: function(value) {
							return number_format(value);
						}
					}
				}
			},
			plugins: {
				legend: {
					display: true,
					labels: {
						color: '#858796',
						font: {
							size: 14
						}
					}
				},
				tooltip: {
					backgroundColor: "rgba(255,255,255,0.8)",
					titleColor: '#6e707e',
					titleFont: {
						size: 14,
						weight: 'bold'
					},
					bodyColor: '#858796',
					borderColor: '#dddfeb',
					borderWidth: 1,
					padding: 12,
					displayColors: false,
					callbacks: {
						label: function(tooltipItem) {
							var label = tooltipItem.dataset.label || '';
							return label + ': ' + number_format(tooltipItem.raw);
						}
					}
				}
			}
		}
	});
</script>
<script>
	// Menyesuaikan Chart.js dengan Bootstrap dan Chart sebelumnya
	Chart.defaults.font.family = 'Nunito, -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif';
	Chart.defaults.color = '#858796';

	$(document).ready(function() {
		var ctx = document.getElementById('statusPegawaiChart').getContext('2d');
		var statusData = <?= json_encode($jurusan_stats); ?>;

		// Log the structure of statusData to confirm the correct format
		console.log(statusData);

		var labels = statusData.map(function(item) {
			return item.jurusan_nama;
		});

		// Check if data arrays are being populated
		var pppkData = statusData.map(function(item) {
			return item.pppk || 0; // Use default value 0 if undefined
		});
		var pnsData = statusData.map(function(item) {
			return item.pns || 0;
		});
		var nonPnsData = statusData.map(function(item) {
			return item.non_asn || 0;
		});

		console.log('PPPK Data:', pppkData);
		console.log('PNS Data:', pnsData);
		console.log('Non ASN Data:', nonPnsData);

		// Initialize Chart
		new Chart(ctx, {
			type: 'bar',
			data: {
				labels: labels,
				datasets: [{
						label: 'Jumlah Dosen PPPK',
						data: pppkData,
						backgroundColor: '#f6c23e',
						hoverBackgroundColor: '#f4b619',
						borderColor: '#f6c23e',
						borderWidth: 1,
						barPercentage: 0.7,
						categoryPercentage: 0.8
					},
					{
						label: 'Jumlah Dosen PNS',
						data: pnsData,
						backgroundColor: '#4e73df',
						hoverBackgroundColor: '#2e59d9',
						borderColor: '#4e73df',
						borderWidth: 1,
						barPercentage: 0.7,
						categoryPercentage: 0.8
					},
					{
						label: 'Jumlah Dosen NON ASN',
						data: nonPnsData,
						backgroundColor: '#1cc88a',
						hoverBackgroundColor: '#17a673',
						borderColor: '#1cc88a',
						borderWidth: 1,
						barPercentage: 0.7,
						categoryPercentage: 0.8
					}
				]
			},
			options: {
				responsive: true,
				maintainAspectRatio: true,
				scales: {
					x: {
						grid: {
							display: false,
							drawBorder: false
						},
						ticks: {
							color: '#858796',
							font: {
								size: 14
							}
						}
					},
					y: {
						beginAtZero: true,
						grid: {
							color: "rgb(234, 236, 244)",
							zeroLineColor: "rgb(234, 236, 244)",
							drawBorder: false,
							borderDash: [2],
							zeroLineBorderDash: [2]
						},
						ticks: {
							color: '#858796',
							font: {
								size: 14
							},
							padding: 10,
							callback: function(value) {
								return value;
							}
						}
					}
				},
				plugins: {
					legend: {
						display: true,
						labels: {
							color: '#858796',
							font: {
								size: 14
							}
						}
					},
					tooltip: {
						backgroundColor: "rgba(255,255,255,0.8)",
						titleColor: '#6e707e',
						titleFont: {
							size: 14,
							weight: 'bold'
						},
						bodyColor: '#858796',
						borderColor: '#dddfeb',
						borderWidth: 1,
						padding: 12,
						displayColors: false,
						callbacks: {
							label: function(tooltipItem) {
								var label = tooltipItem.dataset.label || '';
								return label + ': ' + tooltipItem.raw;
							}
						}
					}
				}
			}
		});
	});
</script>
<script>
	var ctx = document.getElementById('jabatanChart').getContext('2d');
	var jabatanData = <?= json_encode($dosen_by_jabatan); ?>;

	var labels = jabatanData.map(function(item) {
		return item.jabatan_nama;
	});
	var totalData = jabatanData.map(function(item) {
		return item.total;
	});

	new Chart(ctx, {
		type: 'bar',
		data: {
			labels: labels,
			datasets: [{
				label: 'Jumlah Dosen',
				data: totalData,
				backgroundColor: '#4e73df',
				hoverBackgroundColor: '#2e59d9',
				borderColor: '#4e73df',
				borderWidth: 1,
				barPercentage: 0.7,
				categoryPercentage: 0.8
			}]
		},
		options: {
			responsive: true,
			maintainAspectRatio: true,
			scales: {
				x: {
					grid: {
						display: false,
						drawBorder: false
					},
					ticks: {
						color: '#858796',
						font: {
							size: 14
						}
					}
				},
				y: {
					beginAtZero: true,
					grid: {
						color: "rgb(234, 236, 244)",
						zeroLineColor: "rgb(234, 236, 244)",
						drawBorder: false,
						borderDash: [2],
						zeroLineBorderDash: [2]
					},
					ticks: {
						color: '#858796',
						font: {
							size: 14
						},
						padding: 10
					}
				}
			},
			plugins: {
				legend: {
					display: true,
					labels: {
						color: '#858796',
						font: {
							size: 14
						}
					}
				},
				tooltip: {
					backgroundColor: "rgba(255,255,255,0.8)",
					titleColor: '#6e707e',
					titleFont: {
						size: 14,
						weight: 'bold'
					},
					bodyColor: '#858796',
					borderColor: '#dddfeb',
					borderWidth: 1,
					padding: 12,
					displayColors: false
				}
			}
		}
	});
</script>
<script>
	var ctx = document.getElementById('statusSertifikasiChart').getContext('2d');
	var statusSertifikasiData = <?= json_encode($status_sertifikasi_jurusan); ?>;

	var labelsJurusan = statusSertifikasiData.map(function(item) {
		return item.jurusan_nama;
	});
	var sudahSertifikasiData = statusSertifikasiData.map(function(item) {
		return item.sudah_sertifikasi;
	});
	var belumSertifikasiData = statusSertifikasiData.map(function(item) {
		return item.belum_sertifikasi;
	});

	new Chart(ctx, {
		type: 'bar',
		data: {
			labels: labelsJurusan,
			datasets: [{
					label: 'Sudah Sertifikasi',
					data: sudahSertifikasiData,
					backgroundColor: '#4e73df',
					hoverBackgroundColor: '#2e59d9',
					borderColor: '#4e73df',
					borderWidth: 1,
					barPercentage: 0.7,
					categoryPercentage: 0.8
				},
				{
					label: 'Belum Sertifikasi',
					data: belumSertifikasiData,
					backgroundColor: '#f6c23e',
					hoverBackgroundColor: '#f4b619',
					borderColor: '#f6c23e',
					borderWidth: 1,
					barPercentage: 0.7,
					categoryPercentage: 0.8
				}
			]
		},
		options: {
			responsive: true,
			maintainAspectRatio: true,
			scales: {
				x: {
					grid: {
						display: false,
						drawBorder: false
					},
					ticks: {
						color: '#858796',
						font: {
							size: 14
						}
					}
				},
				y: {
					beginAtZero: true,
					grid: {
						color: "rgb(234, 236, 244)",
						zeroLineColor: "rgb(234, 236, 244)",
						drawBorder: false,
						borderDash: [2],
						zeroLineBorderDash: [2]
					},
					ticks: {
						color: '#858796',
						font: {
							size: 14
						},
						padding: 10,
						callback: function(value) {
							return value;
						}
					}
				}
			},
			plugins: {
				legend: {
					display: true,
					labels: {
						color: '#858796',
						font: {
							size: 14
						}
					}
				},
				tooltip: {
					backgroundColor: "rgba(255,255,255,0.8)",
					titleColor: '#6e707e',
					titleFont: {
						size: 14,
						weight: 'bold'
					},
					bodyColor: '#858796',
					borderColor: '#dddfeb',
					borderWidth: 1,
					padding: 12,
					displayColors: false,
					callbacks: {
						label: function(tooltipItem) {
							var label = tooltipItem.dataset.label || '';
							return label + ': ' + tooltipItem.raw;
						}
					}
				}
			}
		}
	});
</script>
