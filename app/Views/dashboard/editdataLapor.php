<!DOCTYPE html>
<html lang="en">

<?php
    echo view("dashboard/layout/head.php")
?>

<body class="text-left">
<div class="app-admin-wrap layout-sidebar-compact sidebar-dark-purple sidenav-open clearfix">
        
      <!-- partial:partials/_navbar.html -->
      <?php
      echo view("dashboard/layout/right-sidebar.php")
      ?>
      <div class="main-content-wrap d-flex flex-column">
      <!-- partial -->
      <!-- Sidebar -->
      <?php
      echo view("dashboard/layout/top-sidebar.php")
      ?>
      <!-- partial -->
      <div class="main-content">
                <div class="breadcrumb">
                    <h1>Edit Pengaduan</h1>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <!-- end of row-->
                <div class="row mb-">
                    <div class="col-md-12 mb-">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb"></h4>
                        <form action="<?= site_url('DashboardController/update/'.$data['id'])?>" method="post">
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?= $data['id'] ?? '' ?>">
                            </div>
                            <div class="form-group">
                                <label for="status">Status :</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="Sedang ditinjau" <?= (isset($data['status']) && $data['status'] == 'Sedang ditinjau') ? 'selected' : '' ?>>Sedang ditinjau</option>
                                    <option value="Dalam proses penyelidikan" <?= (isset($data['status']) && $data['status'] == 'Dalam proses penyelidikan') ? 'selected' : '' ?>>Dalam proses penyelidikan</option>
                                    <option value="Laporan disetujui" <?= (isset($data['status']) && $data['status'] == 'Laporan disetujui') ? 'selected' : '' ?>>Laporan disetujui</option>
                                    <option value="Laporan selesai" <?= (isset($data['status']) && $data['status'] == 'Laporan selesai') ? 'selected' : '' ?>>Laporan selesai</option>
                                </select>
                            </div>
                            <div class="form-group">
                              <label for="catatan">Catatan :</label>
                              <textarea class="w-100" name="catatan" id="catatan" cols="30" rows="10"><?= $data['catatan'] ?? '' ?></textarea>
                            </div>
                            <a href="javascript:history.back()" class="btn btn-primary">Kembali</a>
                            <button type="submit" class="btn btn-success">Perbarui Status</button>
                        </form>

                  <!-- End Form -->
                            </div>
                        </div>
                    </div>
                </div>
          <?php
            echo view("dashboard/layout/footer.php")
          ?>
</div>
</div>
      </div>
    </div>
  </div>
  <!-- container-scroller -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript">
      $(document).ready(function() {
          $('#searchForm').on('submit', function(e) {
              e.preventDefault(); // Mencegah pengiriman formulir secara tradisional

              var formData = $(this).serialize();
              $.ajax({
                  url: $(this).attr('action'), // Menggunakan URL aksi formulir
                  method: $(this).attr('method'),
                  data: formData,
                  success: function(response) {
                      $('#dataLapor').html(response); // Memperbarui tabel data dengan hasil pencarian
                  }
              });
          });
      });
  </script>
  <?php
    echo view("dashboard/layout/js.php")
  ?>
</body>

</html>
