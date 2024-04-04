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
      <canvas id="myChart" width="400" height="400"></canvas>

    

    </div>
  </div>
  <!-- container-scroller -->
  <?php
    echo view("dashboard/layout/js.php")
  ?>

    <script>
      function deleteConfirm(url)
      {
        $('#btn-delete').attr('href', url);
        $('#hapus').modal();
      }
    </script>
</body>

</html>
