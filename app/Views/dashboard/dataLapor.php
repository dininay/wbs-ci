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
                  <h4 class="card-title">Pengaduan</h4>
                  <div class="col-6 justify-content-end">
                  <!-- <form id="searchForm" action="/dashboard/dataLapor" method="post">
                      <div class="input-group mb-3">
                          <input type="text" class="form-control" id="keyword" placeholder="Masukkan Keyword Pencarian" aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword">
                          <div class="input-group-append">
                              <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                          </div>
                      </div>
                  </form> -->

                  </div>
                  <div id="dataLapor" class="table-responsive">
                    <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                      <th >No</th>
                                        <th>ID Pengaduan</th>
                                        <th>Sifat Pelapor</th>
                                        <th>Jenis Pelanggaran</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php $i = 1 + (10 * ($currentPage - 1)); ?>
                                    <?php foreach ($data as $item): ?>
                                    <tr>
                                      <td scope="row"><?= $i++; ?></td>
                                        <td><?php echo $item['id']; ?></td>
                                        <td><?php echo $item['sifat_pelapor']; ?></td>
                                        <td><?php echo $item['jenisPelanggaran']; ?></td>
                                        <td><?php echo $item['status']; ?></td>
                                        <td>
                                            <a href="/dashboardcontroller/detail/<?= $item['id']; ?>" class="btn btn-primary btn-sm">Detail</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        <div class="pagination justify-content-center">
                            <?= $pager->links('data','dataLapor_pagination') ?>
                        </div>
                    </div>
                  </div>
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
