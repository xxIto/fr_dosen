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
  // Menyesuaikan Chart.js dengan Bootstrap dan Chart sebelumnya
  Chart.defaults.font.family = 'Nunito, -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif';
  Chart.defaults.color = '#858796';

  $(document).ready(function() {
    var ctx = document.getElementById('statusChart').getContext('2d');
    var statusData = <?= json_encode($jurusan_stats); ?>;
    
    var labels = statusData.map(function(item) { return item.jurusan_nama; });
    var pppkData = statusData.map(function(item) { return item.pppk; });
    var pnsData = statusData.map(function(item) { return item.pns; });
    var nonPnsData = statusData.map(function(item) { return item.non_asn; });

    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: labels,
        datasets: [
          {
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

