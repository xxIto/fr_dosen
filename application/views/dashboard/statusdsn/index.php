<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
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
	<div class="row">
		<div class="col-lg-8 col-md-4">
			<div class="card shadow-sm p-3 mb-5 bg-white rounded">
				<div class="card-body">
					<h4>Grafik Status Dosen Berdasarkan Jurusan</h4>
					<canvas id="statusChart" width="400" height="200"></canvas>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
	// Set default font family and font color to match Bootstrap's styling
	Chart.defaults.font.family = 'Nunito, -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif';
	Chart.defaults.color = '#858796';

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
		s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
		if (s[0].length > 3) {
			s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
		}
		if ((s[1] || '').length < prec) {
			s[1] = s[1] || '';
			s[1] += new Array(prec - s[1].length + 1).join('0');
		}
		return s.join(dec);
	}

	// Bar Chart Example
	var ctx = document.getElementById("statusChart").getContext('2d');
	var statusData = <?= json_encode($jurusan_stats); ?>;

	var labels = statusData.map(function(item) {
		return item.jurusan_nama;
	});
	var activeData = statusData.map(function(item) {
		return item.aktif;
	});
	var tubelData = statusData.map(function(item) {
		return item.tubel;
	});

	new Chart(ctx, {
		type: 'bar',
		data: {
			labels: labels,
			datasets: [{
					label: 'Jumlah Dosen Aktif',
					data: activeData,
					backgroundColor: '#4e73df',
					hoverBackgroundColor: '#2e59d9',
					borderColor: '#4e73df',
					borderWidth: 1,
					barPercentage: 0.7,
					categoryPercentage: 0.8
				},
				{
					label: 'Jumlah Dosen Tubel',
					data: tubelData,
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
			maintainAspectRatio: true, // Set to true to maintain aspect ratio
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
					beginAtZero: true, // Ensure y-axis starts at 0
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
