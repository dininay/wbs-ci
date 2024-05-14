<!DOCTYPE html>
<html lang="en">

<?php
    echo view("dashboard/layout/head.php")
?>
<style>
    .form-label-bold {
        font-weight: bold;
    }
</style>

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
                    <h1>Detail Pengaduan</h1>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <!-- end of row-->
                <div class="row mb-">
                    <div class="col-md-12 mb-">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-"></h4>
                  <form action="" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="id" class="form-label-bold">ID Pengaduan:</label>
                                <p><?= $data['id'] ?? '' ?></p>
                            </div>
                            <div class="form-group">
                                <label for="sifat_pelapor" class="form-label-bold">Sifat Pelapor:</label>
                                <p><?= $data['sifat_pelapor'] ?? '' ?></p>
                            </div>
                            <div class="form-group">
                                <label for="firstName" class="form-label-bold">Nama Pelapor:</label>
                                <p><?= $data['firstName'] ?? '' ?></p>
                            </div>
                            <div class="form-group">
                                <label for="noIdentitas" class="form-label-bold">Nomor Identitas Pelapor:</label>
                                <p><?= $data['noIdentitas'] ?? '' ?></p>
                            </div>
                            <div class="form-group">
                                <label for="jk" class="form-label-bold">Jenis Kelamin Pelapor:</label>
                                <p><?= $data['jk'] ?? '' ?></p>
                            </div>
                            <div class="form-group">
                                <label for="alamat" class="form-label-bold">Alamat Pelapor:</label>
                                <p><?= $data['alamat'] ?? '' ?></p>
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label-bold">Email Pelapor:</label>
                                <p><?= $data['email'] ?? '' ?></p>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="form-label-bold">Nomor Telepon Pelapor:</label>
                                <p><?= $data['phone'] ?? '' ?></p>
                            </div>
                            <div class="form-group">
                                <label for="jenisPelanggaran" class="form-label-bold">Jenis Pelanggaran:</label>
                                <p><?= $data['jenisPelanggaran'] ?? '' ?></p>
                            </div>
                            <div class="form-group">
                                <label for="firstNameTerlapor" class="form-label-bold">Nama Terlapor:</label>
                                <p><?= $data['firstNameTerlapor'] ?? '' ?></p>
                            </div>
                            <div class="form-group">
                                <label for="divisi" class="form-label-bold">Divisi Terlapor:</label>
                                <p><?= $data['divisi'] ?? '' ?></p>
                            </div>
                            <div class="form-group">
                                <label for="departemen" class="form-label-bold">Departemen Terlapor:</label>
                                <p><?= $data['departemen'] ?? '' ?></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="waktu" class="form-label-bold">Waktu Pelanggaran:</label>
                                <p><?= $data['waktu'] ?? '' ?></p>
                            </div>
                            <div class="form-group">
                                <label for="lokasi" class="form-label-bold">Lokasi Pelanggaran:</label>
                                <p><?= $data['lokasi'] ?? '' ?></p>
                            </div>
                            <div class="form-group">
                                <label for="kronologi" class="form-label-bold">Kronologi Pelanggaran:</label>
                                <p><?= $data['kronologi'] ?? '' ?></p>
                            </div>
                            <div class="form-group">
                                <label for="nominalKerugian" class="form-label-bold">Nominal Kerugian:</label>
                                <p><?= $data['nominalKerugian'] ?? '' ?></p>
                            </div>
                            <div class="form-group">
                                <label for="dokumen" class="form-label-bold">Dokumen:</label>
                                <p><?= $data['dokumen'] ?? '' ?></p>
                            </div>
                            <div class="form-group">
                                <label for="cerita" class="form-label-bold">Pernah Diceritakan:</label>
                                <p><?= $data['cerita'] ?? '' ?></p>
                            </div>
                            <div class="form-group">
                                <label for="status" class="form-label-bold">Status :</label>
                                <p><?= $data['status'] ?? '' ?></p>
                            </div>
                            <div class="form-group">
                                <label for="status" class="form-label-bold">Catatan :</label>
                                <p><?= $data['catatan'] ?? '' ?></p>
                            </div>
                            <div class="form-group">
                                <label for="created_at" class="form-label-bold">Tanggal Dibuat:</label>
                                <p><?= $data['created_at'] ?? '' ?></p>
                            </div>
                            <div class="form-group">
                                <label for="updated_at" class="form-label-bold">Tanggal Diperbarui:</label>
                                <p><?= $data['updated_at'] ?? '' ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="javascript:history.back()" class="btn btn-primary">Kembali</a>
                            <a href="/DashboardController/edit/<?= $data['id']; ?>" class="btn btn-warning">Edit</a>
                            <form action="/dashboard/delete/<?= $data['id']; ?>" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
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
