<!DOCTYPE html>
<html lang="en">

<?php
    echo view("dashboard/layout/head.php")
?>

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
        <div class="content-wrapper">
            <div class="col-lg grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Pengaduan</h4>
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
                            <button type="submit" class="btn btn-primary">Perbarui Status</button>
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
