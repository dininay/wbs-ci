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
            <div class="row">
              <div class="col-lg-4">
                <canvas class="col-lg-4" id="totalChart" width="5" height="5"></canvas>
              </div>
              <div class="col-lg-4">
                <canvas class="col-lg-4" id="genderChart" width="5" height="5"></canvas>
              </div>
              <div class="col-lg-4">
                <canvas class="col-lg-4" id="reportTypeChart" width="5" height="5"></canvas>
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
  <script>
        document.addEventListener("DOMContentLoaded", function () {
            var totalData = <?= json_encode($total) ?>;
            var genderData = <?= json_encode($genderData) ?>;
            var reportTypeData = <?= json_encode($reportTypeData) ?>;

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

            // Report Type Chart
            var reportTypeChartCtx = document.getElementById('reportTypeChart').getContext('2d');
            var reportTypeChart = new Chart(reportTypeChartCtx, {
                type: 'bar',
                data: {
                    labels: reportTypeData.map(item => item.sifat_pelapor),
                    datasets: [{
                        label: 'Report Type',
                        data: reportTypeData.map(item => item.total),
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
