<!DOCTYPE html>
<html lang="en">

<?php
    echo view("dashboard/layout/head.php")
  ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.html -->
      <?php
      echo view("dashboard/layout/navbar.php")
      ?>
      <!-- partial -->
      <!-- Sidebar -->
      <?php
      echo view("dashboard/layout/sidebar.php")
      ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="col-lg-12">
          <div class="content-wrapper">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="statusChart" width="400" height="400" class="mx-2"></canvas>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="card-body">
                            <div id="statusData" class="data-list"></div>
                        </div>
                    </div>
                </div>
                  <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="jenisPelanggaranChart" width="400" height="400" class="mx-2"></canvas>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="card-body">
                            <div id="jenisPelanggaran" class="data-list"></div>
                        </div>
                    </div>
                </div>
                  <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="reportTypeChart" width="400" height="400" class="mx-2"></canvas>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="card-body">
                            <div id="reportTypeData" class="data-list"></div>
                        </div>
                    </div>
                </div>
                  <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="totalChart" width="400" height="400" class="mx-2"></canvas>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="card-body">
                            <div id="totalData" class="data-list"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
    <!-- Daily Chart Card -->
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <canvas id="dailyChart" width="400" height="400" class="mx-2"></canvas>
            </div>
        </div>
        <div class="card mt-2">
            <div class="card-body">
                <div id="dailyData" class="data-list"></div>
            </div>
        </div>
    </div>
    <!-- Monthly Chart Card -->
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <canvas id="monthlyChart" width="400" height="400" class="mx-2"></canvas>
            </div>
        </div>
        <div class="card mt-2">
            <div class="card-body">
                <div id="monthlyData" class="data-list"></div>
            </div>
        </div>
    </div>
    <!-- Yearly Chart Card -->
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <canvas id="yearlyChart" width="400" height="400" class="mx-2"></canvas>
            </div>
        </div>
        <div class="card mt-2">
            <div class="card-body">
                <div id="yearlyData" class="data-list"></div>
            </div>
        </div>
    </div>
    <!-- Gender Chart Card -->
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <canvas id="genderChart" width="400" height="400" class="mx-2"></canvas>
            </div>
        </div>
        <div class="card mt-2">
            <div class="card-body">
                <div id="genderData" class="data-list"></div>
            </div>
        </div>
    </div>
</div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- container-scroller -->
  <?php
    echo view("dashboard/layout/js.php")
  ?>
  
  <!-- Chart.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <!-- Chart.js Datalabels Plugin -->
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var totalData = <?= json_encode($total) ?>;
            var genderData = <?= json_encode($genderData) ?>;
            var reportTypeData = <?= json_encode($reportTypeData) ?>;
            var dataPerDay = <?= json_encode($dataPerDay) ?>;
            var dataPerMonth = <?= json_encode($dataPerMonth) ?>;
            var dataPerYear = <?= json_encode($dataPerYear) ?>;
            var statusData = <?= json_encode($statusChart) ?>;
            var jenisPelanggaranData = <?= json_encode($jenisPelanggaranChart) ?>;

            // Total Reports Chart
            var totalChartCtx = document.getElementById('totalChart').getContext('2d');
            var totalChart = new Chart(totalChartCtx, {
                type: 'bar',
                data: {
                    labels: ['Total Reports'],
                    datasets: [{
                        label: 'Total Reports',
                        data: [totalData],
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            // Update total data list
            var totalDataList = document.getElementById('totalData');
            totalDataList.innerHTML = ''; // Clear previous data
            totalDataList.innerHTML = `<span style="font-size: small;">Total Reports: ${totalData}</span>`;


            // Gender Chart
            var genderChartCtx = document.getElementById('genderChart').getContext('2d');
            var genderChart = new Chart(genderChartCtx, {
                type: 'pie',
                data: {
                    labels: genderData.map(item => item.jk),
                    datasets: [{
                        label: 'Gender',
                        data: genderData.map(item => item.total),
                        backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)'],
                        borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)'],
                        borderWidth: 1
                    }]
                }
            });
            // Update gender data list
            var genderDataList = document.getElementById('genderData');
            genderDataList.innerHTML = ''; // Clear previous data
            genderData.forEach(item => {
                genderDataList.innerHTML += `<span style="font-size: small;">${item.jk}: ${item.total}</span><br>`;
            });

            // Report Type Chart
            var reportTypeChartCtx = document.getElementById('reportTypeChart').getContext('2d');
            var reportTypeChart = new Chart(reportTypeChartCtx, {
                type: 'bar',
                data: {
                    labels: reportTypeData.map(item => item.sifat_pelapor),
                    datasets: [{
                        label: 'Report Type',
                        data: reportTypeData.map(item => item.total),
                        backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)'],
                        borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)'],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });

            // Update report type data list
            var reportTypeDataList = document.getElementById('reportTypeData');
            reportTypeDataList.innerHTML = ''; // Clear previous data
            reportTypeData.forEach(item => {
                reportTypeDataList.innerHTML += `<span style="font-size: small;">${item.sifat_pelapor}: ${item.total}</span><br>`;
            });

            // Daily Chart
            var dailyChartCtx = document.getElementById('dailyChart').getContext('2d');
            var dailyChart = new Chart(dailyChartCtx, {
                type: 'bar',
                data: {
                    labels: dataPerDay.map(item => item.date),
                    datasets: [{
                        label: 'Reports per Day',
                        data: dataPerDay.map(item => item.total),
                        backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)'],
                        borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)'],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            // Update report type data list
            var dailyDataList = document.getElementById('dailyData');
            dailyDataList.innerHTML = ''; // Clear previous data
            dataPerDay.forEach(item => {
                dailyDataList.innerHTML += `<span style="font-size: small;">${item.date}: ${item.total}</span><br>`;
            });

            // Monthly Chart
            var monthlyChartCtx = document.getElementById('monthlyChart').getContext('2d');
            var monthlyChart = new Chart(monthlyChartCtx, {
                type: 'bar',
                data: {
                    labels: dataPerMonth.map(item => item.date),
                    datasets: [{
                        label: 'Reports per Month',
                        data: dataPerMonth.map(item => item.total),
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            // Update report type data list
            var monthlyDataList = document.getElementById('monthlyData');
            monthlyDataList.innerHTML = ''; // Clear previous data
            dataPerMonth.forEach(item => {
                monthlyDataList.innerHTML += `<span style="font-size: small;">${item.date}: ${item.total}</span><br>`;
            });

            // Yearly Chart
            var yearlyChartCtx = document.getElementById('yearlyChart').getContext('2d');
            var yearlyChart = new Chart(yearlyChartCtx, {
                type: 'bar',
                data: {
                    labels: dataPerYear.map(item => item.date),
                    datasets: [{
                        label: 'Reports per Year',
                        data: dataPerYear.map(item => item.total),
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            // Update report type data list
            var yearlyDataList = document.getElementById('yearlyData');
            yearlyDataList.innerHTML = ''; // Clear previous data
            dataPerYear.forEach(item => {
                yearlyDataList.innerHTML += `<span style="font-size: small;">${item.date}: ${item.total}</span><br>`;
            });
        });
    </script>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        var statusLabels = <?= json_encode(array_keys($statusChart)) ?>;
        var statusValues = <?= json_encode(array_values($statusChart)) ?>;

        var statusChartCtx = document.getElementById('statusChart').getContext('2d');
        var statusChart = new Chart(statusChartCtx, {
            type: 'bar',
            data: {
                labels: statusLabels,
                datasets: [{
                    label: 'Status',
                    data: statusValues,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    // Update data list
    var statusDataList = document.getElementById('statusData');
    statusDataList.innerHTML = ''; // Clear previous data

    statusLabels.forEach((label, index) => {
        var listItem = document.createElement('div');
        listItem.textContent = `${label}: ${statusValues[index]}`;
        listItem.innerHTML = `<span style="font-size: small;">${label}: ${statusValues[index]}</span>`;
        statusDataList.appendChild(listItem);
    });
});
</script>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        var jenisPelanggaranLabels = <?= json_encode(array_keys($jenisPelanggaranChart)) ?>;
        var jenisPelanggaranValues = <?= json_encode(array_values($jenisPelanggaranChart)) ?>;

        var jenisPelanggaranChartCtx = document.getElementById('jenisPelanggaranChart').getContext('2d');
        var jenisPelanggaranChart = new Chart(jenisPelanggaranChartCtx, {
            type: 'bar',
            data: {
                labels: jenisPelanggaranLabels,
                datasets: [{
                    label: 'Jenis Pelanggaran',
                    data: jenisPelanggaranValues,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    // Update data list
    var jenisPelanggaranDataList = document.getElementById('jenisPelanggaran');
    jenisPelanggaranDataList.innerHTML = ''; // Clear previous data

    jenisPelanggaranLabels.forEach((label, index) => {
        var listItem = document.createElement('div');
        listItem.textContent = `${label}: ${jenisPelanggaranValues[index]}`;
        listItem.innerHTML = `<span style="font-size: small;">${label}: ${jenisPelanggaranValues[index]}</span>`;
        jenisPelanggaranDataList.appendChild(listItem);
    });
    });
</script>
    <script>
      function deleteConfirm(url)
      {
        $('#btn-delete').attr('href', url);
        $('#hapus').modal();
      }
    </script>
</body>

</html>
