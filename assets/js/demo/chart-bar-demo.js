// Set new default font family and font color to mimic Bootstrap's default styling
(Chart.defaults.global.defaultFontFamily = "Nunito"),
	'-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#858796";

function number_format(number, decimals, dec_point, thousands_sep) {
    var num = (number + '').replace(',', '').replace(' ', '');
    var n = !isFinite(+num) ? 0 : +num,
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
        s[0] = s[0].replace(/\B(?=(\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}

// Contoh penggunaan dalam chart:
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
                        return number_format(value); // Gunakan fungsi number_format yang telah diperbaiki
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
                        return label + ': ' + number_format(tooltipItem.raw); // Gunakan fungsi number_format di sini
                    }
                }
            }
        }
    }
});
