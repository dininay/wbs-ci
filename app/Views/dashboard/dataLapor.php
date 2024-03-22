<!DOCTYPE html>
<html lang="en">

<?php
    echo view("dashboard/layout//head.php")
?>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.html -->
      <?php
      echo view("dashboard/layout//navbar.php")
      ?>
      <!-- partial -->
      <!-- Sidebar -->
      <?php
      echo view("dashboard/layout//sidebar.php")
      ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Pengaduan</h4>
                  <div id="dataLapor" class="table-responsive">
                    <div class="table-responsive">
                        <div class="form-group">
                            <input type="text" class="form-control" id="searchInput" placeholder="Cari...">
                        </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID Pengaduan</th>
                                        <th>Sifat Pelapor</th>
                                        <th>Nama</th>
                                        <th>Nomor Identitas</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Email</th>
                                        <th>Nomor Telepon</th>
                                        <th>Jenis Pelanggaran</th>
                                        <th>Nama Terlapor</th>
                                        <th>Divisi</th>
                                        <th>Departemen</th>
                                        <th>Waktu</th>
                                        <th>Lokasi</th>
                                        <th>Kronologi</th>
                                        <th>Nominal Kerugian</th>
                                        <th>Dokumen</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $item): ?>
                                    <tr>
                                        <td><?php echo $item['id']; ?></td>
                                        <td><?php echo $item['sifat_pelapor']; ?></td>
                                        <td><?php echo $item['firstName']; ?></td>
                                        <td><?php echo $item['noIdentitas']; ?></td>
                                        <td><?php echo $item['jk']; ?></td>
                                        <td><?php echo $item['alamat']; ?></td>
                                        <td><?php echo $item['email']; ?></td>
                                        <td><?php echo $item['phone']; ?></td>
                                        <td><?php echo $item['jenisPelanggaran']; ?></td>
                                        <td><?php echo $item['firstNameTerlapor']; ?></td>
                                        <td><?php echo $item['divisi']; ?></td>
                                        <td><?php echo $item['departemen']; ?></td>
                                        <td><?php echo $item['waktu']; ?></td>
                                        <td><?php echo $item['lokasi']; ?></td>
                                        <td><?php echo $item['kronologi']; ?></td>
                                        <td><?php echo $item['nominalKerugian']; ?></td>
                                        <td><?php echo $item['dokumen']; ?></td>
                                        <td>
                                            <a class="badge badge-warning" href="<?php echo site_url('dashboard/edit/'.$item['noIdentitas']); ?>">
                                                <p class="fa fa-edit">Edit</p>
                                            </a>
                                            <a type="button" rel="tooltip" title="Hapus" class="badge badge-danger" onclick="deleteConfirm('<?php echo site_url('dashboard/delete/'.$item['noIdentitas']); ?>')">
                                                <p class="fa fa-trash">Hapus</p>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        <div class="pagination justify-content-center">
                            <?= $pager->links() ?>
                        </div>
                    </div>
                  </div>
              </div>
              </div>
            </div>
        </div>
          <?php
            echo view("dashboard/layout//footer.php")
          ?>
      </div>
    </div>
  </div>
  <!-- container-scroller -->
  <?php
    echo view("dashboard/layout//js.php")
  ?>
</body>

</html>
