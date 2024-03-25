<!DOCTYPE html>
<html lang="en" dir="">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>WBS MieGacoan | Whistleblowing System MieGacoan</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="../favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="assets/vendor/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
  <link rel="stylesheet" href="assets/vendor/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
  <link rel="stylesheet" href="assets/vendor/quill/dist/quill.snow.css">
  <link rel="stylesheet" href="assets/vendor/tom-select/dist/css/tom-select.bootstrap5.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="assets/css/theme.min.css">
  <style>
    .div-1 {
        background-color: #21325B;
	 }
	.div-2 {
        background-color: #00B2D8;
    }
  </style>
</head>

<body>
  <!-- ========== HEADER ========== -->
  <header id="header" class="navbar navbar-expand-lg navbar-end navbar-light bg-white">
    <!-- Topbar -->
    <!-- End Topbar -->

    <div class="container">
      <nav class="navbar-nav-wrap">
        <!-- Default Logo -->
        <a class="navbar-brand" href="#" aria-label="Front">
          <img class="navbar-brand-logo" src="assets/img/logo.png" alt="Logo">
        </a>
        <!-- End Default Logo -->

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-default">
            <i class="bi-list"></i>
          </span>
          <span class="navbar-toggler-toggled">
            <i class="bi-x"></i>
          </span>
        </button>
        <!-- End Toggler -->
      
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="btn btn-primary btn-sm" href="index.php">Kembali</a>                         
            </div>
            </li>
          </ul>
        <!-- End Collapse -->
      </nav>
    </div>
  </header>

  <!-- ========== END HEADER ========== -->
  
  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero -->
    <div class="div-1">
      <div class="container content-space-2">
        <div class="row justify-content-lg-between align-items-md-center">
          <div class="col-md-6 mb-5 mb-md-0">

            <!-- Links -->
            <div class="mb-4">
              <h3><font color="#FFFFFF">Laporkan Indikasi Tindak Pidana Korupsi, Fraud, Pelanggaran Kode Etik ataupu Tindakan Hukum.</font></h3>
            </div>
            <div class="d-flex mb-10">
              <p class="text-nowrap"><font color="#FFFFFF">Anda dapat menggunakan sistem ini. </font></p>
				      <p class="text-nowrap"><font color="#FFFFFF">&nbsp;<em><strong>Jadilah whistleblower bagi Perusahaan Kita !!</strong></em></font> </p>
            </div>
            <!-- End Links -->
          </div>
          <!-- End Col -->
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
    </div>
    <!-- End Hero -->

    <!-- Card Grid -->
	<div class="container content-space-1 content-space-t-lg-0 content-space-b-lg-2 mt-lg-n10">
      <div class="row">

        <div class="col-lg-9">
          <div class="d-grid gap-3 gap-lg-5">
          <form action="/laporcontroller/save" method="POST" enctype="multipart/form-data">
            <div class="card">
              <div class="card-header border-bottom div-2">
                <h4 class="card-header-title">Identitas Pelapor</h4>
              </div>
              <div class="card-body">
                  <div class="row mb-4">
                    <div class="col-sm-9">
                      <!-- Media -->
                      <div class="d-flex align-items-center">
                        <!-- Avatar -->
                      </div>
                      <!-- End Media -->
                    </div>
                  </div>
                  <div class="row mb-4">
                    <label for="sifat_pelapor" class="col-sm-3 col-form-label form-label">Sifat Pelapor<font color="#FF0509">*</font></label>

                    <div class="col-sm-9">
                      <div class="input-group input-group-md-down-break">
                        <!-- Radio Check -->
                        <label class="form-control" for="sp_anonymous">
                          <span class="form-check">
                            <input type="radio" class="form-check-input" name="sifat_pelapor" id="sp_anonymous" value="Anonymous">
                            <span class="form-check-label">Anonymous</span>
                          </span>
                        </label>
                        <!-- End Radio Check -->

                        <!-- Radio Check -->
                        <label class="form-control" for="sp_terbuka">
                          <span class="form-check">
                            <input type="radio" class="form-check-input" name="sifat_pelapor" id="sp_terbuka" value="Terbuka" checked>
                            <span class="form-check-label">Terbuka</span>
                          </span>
                        </label>
                        <!-- End Radio Check -->
                      </div>
                    </div>
                  </div>
                  
                  <div class="row mb-4">
                    <label class="col-sm-3 col-form-label form-label">Nama Lengkap <font color="#FF0509">*</font></label>

                    <div class="col-sm-9">
                      <div class="input-group">
                        <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Nama Awal" aria-label="" value="">
                        <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Nama Akhir" aria-label="" value="">
                      </div>
                    </div>
                  </div>

                  <div class="row mb-4">
                    <label for="noIdentitas" class="col-sm-3 col-form-label form-label">No.Identitas <font color="#FF0509">*</font></label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="noIdentitas" id="noIdentitas" placeholder="No Identitas (ID Pegawai)" aria-label="" value="">
                    </div>
                  </div>

                  <div class="row mb-4">
                      <label for="jk" class="col-sm-3 col-form-label form-label">Jenis Kelamin <font color="#FF0509">*</font></label>

                      <div class="col-sm-9">
                          <div class="input-group input-group-md-down-break">
                              <!-- Radio Check -->
                              <label class="form-control" for="jk_laki">
                                  <span class="form-check">
                                      <input type="radio" class="form-check-input" name="jk" id="jk_laki" value="Laki-Laki">
                                      <span class="form-check-label">Laki-Laki</span>
                                  </span>
                              </label>
                              <!-- End Radio Check -->

                              <!-- Radio Check -->
                              <label class="form-control" for="jk_perempuan">
                                  <span class="form-check">
                                      <input type="radio" class="form-check-input" name="jk" id="jk_perempuan" value="Perempuan" checked>
                                      <span class="form-check-label">Perempuan</span>
                                  </span>
                              </label>
                              <!-- End Radio Check -->
                          </div>
                      </div>
                  </div>


                  <div class="row mb-4">
                    <label class="col-sm-3 col-form-label form-label" for="alamat">Alamat Lengkap Domisili <font color="#FF0509">*</font></label>

                    <div class="col-sm-9">
                      <textarea type="text" class="form-control" name="alamat" id="alamat" rows="10" cols="50" placeholder="Alamat Lengkap (Nama Jalan - Kelurahan - Kecamatan - Kota)" aria-label="" >
                      </textarea>
                    </div>
                  </div>

                  <div class="row mb-4">
                    <label for="email" class="col-sm-3 col-form-label form-label">Alamat Email <font color="#FF0509">*</font></label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" name="email" id="email" placeholder="gacoan@gmail.com" aria-label="" value="">
                    </div>
                  </div>

                  <div class="row mb-4">
                    <label for="phone" class="col-sm-3 col-form-label form-label">No Telepon <font color="#FF0509">*</font></label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="phone" id="phone" placeholder="+62 8123 4567 890" aria-label="" value="">
                    </div>
                  </div>
                </div>
            </div>
            <div class="card">
              <div class="card-header border-bottom div-2">
                <h4 class="card-header-title">Pengaduan</h4>
              </div>
              <div class="card-body">
                  <!-- Form -->
                  <div class="row mb-4">
                    <div class="col-sm-9">
                      <!-- Media -->
                      <div class="d-flex align-items-center">
                        <!-- Avatar -->
                      </div>
                      <!-- End Media -->
                    </div>
                  </div>

                  <div class="row mb-4">
                    <div class="col-sm-3">
                      <span class="col-sm-3 col-form-label form-label">Tindakan/perbuatan yang dilaporkan <font color="#FF0509">*</font></span>
                    </div>

                    <div class="col-sm-9">
                      <!-- Select -->
                      <div class="tom-select-custom">
                        <select class="js-select form-select" id="jenisPelanggaran" name="jenisPelanggaran">
                          <option value="Fraud" data-option-template='<div class="d-flex align-items-start"><div class="flex-shrink-0"><span class="svg-icon svg-icon-xs text-muted mt-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" fill="#035A4B"/>
                          <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M11.7357 20.9962C6.8874 20.8564 3 16.8822 3 12C3 11.9168 3.00113 11.8339 3.00337 11.7513C3.66233 11.8143 4.85637 11.9574 4.91263 12.4204C4.99049 13.0609 4.91263 13.8616 5.45805 14.1018C6.00346 14.342 6.15932 13.1409 6.62675 13.4613C7.09418 13.7816 8.34087 14.0899 8.34087 14.6562C8.34087 15.2224 8.10715 16.1035 8.34087 16.2636C8.57458 16.4238 9.50897 17.5447 9.50921 17.7048C9.50957 17.865 9.83858 18.6794 9.7404 18.9907C9.65905 19.2487 9.24858 20.0502 8.8506 20.4146C9.75315 20.7621 10.7236 20.9658 11.7358 20.9961L11.7357 20.9962ZM8.28274 3.80112C9.41585 3.28656 10.6745 3 12 3C15.5115 3 18.5532 5.01097 20.0365 7.94408C20.0697 8.72412 20.0638 9.39135 20.2361 9.63274C21.1132 10.8601 18.0995 11.7043 18.5573 13.5605C18.759 14.3795 16.5528 14.1197 16.014 14.8864C15.4748 15.6527 14.1575 15.1378 13.852 14.9905C13.5466 14.8432 12.3767 15.3342 12.4789 14.4995C12.5806 13.6646 13.2923 13.6156 14.0556 13.272C14.8185 12.9287 15.9189 11.7872 15.3782 11.638C12.8323 10.9362 11.9638 8.47852 11.9638 8.47852C11.8111 8.44901 11.8494 6.74109 11.1884 6.69207C10.5268 6.6428 10.1705 6.88841 9.20436 6.69207C8.23766 6.49573 8.44145 5.85744 8.28873 4.48256C8.25455 4.17416 8.2562 3.95717 8.28274 3.80112ZM20.9992 11.877C20.9997 11.918 21 11.9589 21 12C21 16.9407 17.0188 20.9515 12.0895 20.9996C16.9702 20.9503 20.9337 16.8884 20.9992 11.877V11.877Z" fill="#035A4B"/>
                          </svg>
                          </span></div><div class="flex-grow-1 ms-2"><span class="d-block fw-semibold">Fraud</span><span class="tom-select-custom-hide small">Pengertian fraud adalah penyajian laporan keuangan palsu secara sengaja dengan menghilangkan atau menambahkan jumlah tertentu untuk menipu pemilik hak dari laporan keuangan tersebut.span></div></div>'>Fraud
                          </option>
                          <option value="Pelanggaran Kode Etik" data-option-template='<div class="d-flex align-items-start"><div class="flex-shrink-0"><span class="svg-icon svg-icon-xs text-muted mt-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="#035A4B"/>
                          <path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="#035A4B"/>
                          </svg>
                          </span></div><div class="flex-grow-1 ms-2"><span class="d-block fw-semibold">Pelanggaran Kode Etik</span><span class="tom-select-custom-hide small">Pelanggaran Kode Etik adalah tindakan apa pun yang bertentangan dengan kebijakan dan pedoman yang ditetapkan perusahaan.</span></div></div>'>Pelanggaran Kode Etik
                          </option>
                          <option value="Pelanggaran Benturan Kepentingan" data-option-template='<div class="d-flex align-items-start"><div class="flex-shrink-0"><span class="svg-icon svg-icon-xs text-muted mt-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="#035A4B"/>
                          <path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="#035A4B"/>
                          </svg>
                          </span></div><div class="flex-grow-1 ms-2"><span class="d-block fw-semibold">Pelanggaran Benturan Kepentingan</span><span class="tom-select-custom-hide small">Benturan kepentingan adalah situasi dimana terdapat konflik kepentingan seseorang yang memanfaatkan kedudukan dan wewenang yang dimilikinya (baik dengan sengaja maupun tidak sengaja) untuk kepentingan pribadi, keluarga, atau golongannya sehingga tugas yang diamanatkan tidak dapat dilaksanakan dengan obyektif dan berpotensi menimbulkan kerugian  kepada pihak tertentu.</span></div></div>'>Pelanggaran Benturan Kepentingan
                          </option>
                          <option value="Pelanggaran Hukum" data-option-template='<div class="d-flex align-items-start"><div class="flex-shrink-0"><span class="svg-icon svg-icon-xs text-muted mt-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="#035A4B"/>
                          <path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="#035A4B"/>
                          </svg>
                          </span></div><div class="flex-grow-1 ms-2"><span class="d-block fw-semibold">Pelanggaran Hukum</span><span class="tom-select-custom-hide small">BPelanggaran hukum adalah tindakan seseorang atau sekelompok yang melanggar aturan yang tidak sesuai dengan hukum-hukum yang berlaku. Pelanggaran hukum adalah bentuk pembangkangan terhadap hukum yang berlaku.</span></div></div>'>Pelanggaran Hukum
                          </option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                  </div>

                  <div class="row mb-4">
                    <label class="col-sm-3 col-form-label form-label">Nama Terlapor <font color="#FF0509">*</font></label>

                    <div class="col-sm-9">
                      <div class="input-group">
                        <input type="text" class="form-control" name="firstNameTerlapor" id="firstNameTerlapor" placeholder="Nama Awal" aria-label="" value="">
                        <input type="text" class="form-control" name="lastNameTerlapor" id="lastNameTerlapor" placeholder="Nama Akhir" aria-label="" value="">
                      </div>
                    </div>
                  </div>
            
                  <div class="row mb-4">
                    <label class="col-sm-3 col-form-label form-label">Nama Divisi & Departemen <font color="#FF0509">*</font></label>

                    <div class="col-sm-9">
                      <div class="input-group">
                        <input type="text" class="form-control" name="divisi" id="divisiLabel" placeholder="Divisi" aria-label="" value="">
                        <input type="text" class="form-control" name="departemen" id="departemenLabel" placeholder="Departemen" aria-label="" value="">
                      </div>
                    </div>
                  </div>

                  <div class="row mb-4">
                    <label for="waktu" class="col-sm-3 col-form-label form-label">Waktu Kegiatan (tanggal dan Periode) <font color="#FF0509">*</font></label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="waktu" id="waktu" placeholder="5-20 Januari 2024 atau selama Bulan Januari 2024" aria-label="5-20 Januari 2024 atau selama Bulan Januari 2024" value="">
                    </div>
                  </div>

                  <div class="row mb-4">
                    <label for="lokasi" class="col-sm-3 col-form-label form-label">Lokasi Kejadian <font color="#FF0509">*</font></label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Lokasi Kejadian" aria-label="" value="">
                    </div>
                  </div>

                  <div class="row mb-4">
                    <label for="kronologi" class="col-sm-3 col-form-label form-label">Kronologi Kejadian<font color="#FF0509">*</font></label>
                    <div class="col-sm-9">
                      <textarea type="text" class="form-control" name="kronologi" id="kronologi" rows="10" cols="50" placeholder="Kronologi Kejadian" aria-label="" value="">
                      </textarea>
                    </div>
                  </div>

                  <div class="row mb-4">
                    <label for="nominalKerugian" class="col-sm-3 col-form-label form-label">Nominal Kerugian <font color="#FF0509">*</font></label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nominalKerugian" id="nominalKerugian" placeholder="Rp. 0" aria-label="" value="">
                    </div>
                  </div>

                  <div class="row mb-4">
                      <label for="dokumen" class="col-sm-3 col-form-label form-label">Dokumen Pendukung Lainnya<font color="#FF0509">*</font></label>

                      <div class="col-sm-9">
                      <input type="file" name="dokumen" id="dokumen[]" class="form-control" multiple>
                      </div>
                  </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header border-bottom div-2">
                <h4 class="card-header-title">Disclaimer</h4>
              </div>
              <div class="card-body">
                <div class="mb-4">
                  <!-- Check -->
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="deleteAccountCheckbox">
                    <label class="form-check-label" for="deleteAccountCheckbox">Seluruh informasi dan dokumen yang disampaikan adalah sesuai dengan yang sebenarnya. Bila dikemudian hari ditemukan ketidaksesuaian, maka Gajoan berhak membatalkan pengaduan ini.</label>
                  </div>
                  <!-- End Check -->
                </div>
              </div>
              <!-- End Body -->
            </div>
            <div class="d-flex justify-content-end">
              <button type="submit" class="btn btn-primary" id="submitBtn">Submit</button>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  <footer class="bg-dark">
    <div class="container pb-1 pb-lg-5">
      <div class="row content-space-t-2">
        <div class="col-lg-3 mb-7 mb-lg-0">
          <!-- Logo -->
          <div class="mb-5">
            <a class="navbar-brand" href="./index.html" aria-label="Space">
              <img class="navbar-brand-logo" src="assets/img/logo.png" alt="Image Description">
            </a>
          </div>
          <!-- End Logo -->

          <!-- List -->
          <ul class="list-unstyled list-py-1">
            <li><a class="link-sm link-light" href="#"><i class="bi-geo-alt-fill me-1"></i>Jl. S. Supriadi No.74, Sukun, Kec. Sukun, Kota Malang, Jawa Timur 65148</a></li>
            <li><a class="link-sm link-light" href="tel:1-062-109-9222"><i class="bi-telephone-inbound-fill me-1"></i>helpdesk@miegacoan.co.id</a></li>
          </ul>
          <!-- End List -->
        
        </div>
        <!-- End Col -->
        <!-- End Col -->
        <!-- End Col -->
        <!-- End Col -->
      </div>
      <!-- End Row -->

      <div class="border-top border-white-10 my-7"></div>

      <div class="row mb-7">
        <div class="col-sm mb-3 mb-sm-0">
          <!-- Socials -->
          <ul class="list-inline list-separator list-separator-light mb-0">
            <li class="list-inline-item">
              <a class="link-sm link-light" href="#">Privacy &amp; Policy</a>
            </li>
            <li class="list-inline-item">
              <a class="link-sm link-light" href="#">Terms</a>
            </li>
            <li class="list-inline-item">
              <a class="link-sm link-light" href="#">Site Map</a>
            </li>
          </ul>
          <!-- End Socials -->
        </div>

        <div class="col-sm-auto">
          <!-- Socials -->
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a class="btn btn-soft-light btn-xs btn-icon" href="#">
                <i class="bi-facebook"></i>
              </a>
            </li>
          
            <li class="list-inline-item">
              <a class="btn btn-soft-light btn-xs btn-icon" href="#">
                <i class="bi-google"></i>
              </a>
            </li>
          
            <li class="list-inline-item">
              <a class="btn btn-soft-light btn-xs btn-icon" href="#">
                <i class="bi-twitter"></i>
              </a>
            </li>
          
            <li class="list-inline-item">
              <a class="btn btn-soft-light btn-xs btn-icon" href="#">
                <i class="bi-github"></i>
              </a>
            </li>
          
            <li class="list-inline-item">
              <!-- Button Group -->
              <div class="btn-group">
                <button type="button" class="btn btn-soft-light btn-xs dropdown-toggle" id="footerSelectLanguage" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                  <span class="d-flex align-items-center">
                    <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Image description" width="16"/>
                    <span>English (US)</span>
                  </span>
                </button>

                <div class="dropdown-menu" aria-labelledby="footerSelectLanguage">
                  <a class="dropdown-item d-flex align-items-center active" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Image description" width="16"/>
                    <span>English (US)</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Image description" width="16"/>
                    <span>Deutsch</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/es.svg" alt="Image description" width="16"/>
                    <span>Español</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="Image description" width="16"/>
                    <span>中文 (繁體)</span>
                  </a>
                </div>
              </div>
              <!-- End Button Group -->
            </li>
          </ul>
          <!-- End Socials -->
        </div>
      </div>

      <!-- Copyright -->
      <div class="w-md-85 text-lg-center mx-lg-auto">
        <p class="text-white-50 small">&copy; Whistleblower. 2024 Pesta Pora Abadi. All rights reserved.</p>
      </div>
      <!-- End Copyright -->
    </div>
  </footer>

  <!-- ========== END FOOTER ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
 

  <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
     data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": "2rem"
         },
         "show": {
           "bottom": "2rem"
         },
         "hide": {
           "bottom": "-2rem"
         }
       }
     }'>
    <i class="bi-chevron-up"></i>
  </a>
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="./assets/vendor/hs-header/dist/hs-header.min.js"></script>
  <script src="./assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
  <script src="./assets/vendor/hs-show-animation/dist/hs-show-animation.min.js"></script>
  <script src="./assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
  <script src="./assets/vendor/hs-file-attach/dist/hs-file-attach.min.js"></script>
  <script src="./assets/vendor/hs-add-field/dist/hs-add-field.min.js"></script>
  <script src="./assets/vendor/imask/dist/imask.min.js"></script>
  <script src="./assets/vendor/quill/dist/quill.min.js"></script>
  <script src="./assets/vendor/tom-select/dist/js/tom-select.complete.min.js"></script>

  <!-- JS Front -->
  <script src="./assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    (function() {
      // INITIALIZATION OF HEADER
      // =======================================================
      new HSHeader('#header').init()


      // INITIALIZATION OF MEGA MENU
      // =======================================================
      new HSMegaMenu('.js-mega-menu', {
          desktop: {
            position: 'left'
          }
        })


      // INITIALIZATION OF SHOW ANIMATIONS
      // =======================================================
      new HSShowAnimation('.js-animation-link')


      // INITIALIZATION OF BOOTSTRAP VALIDATION
      // =======================================================
      HSBsValidation.init('.js-validate', {
        onSubmit: data => {
          data.event.preventDefault()
          alert('Submited')
        }
      })


      // INITIALIZATION OF BOOTSTRAP DROPDOWN
      // =======================================================
      HSBsDropdown.init()


      // INITIALIZATION OF GO TO
      // =======================================================
      new HSGoTo('.js-go-to')


      // INITIALIZATION OF FILE ATTACH
      // =======================================================
      new HSFileAttach('.js-file-attach')


      // INITIALIZATION OF ADD FIELD
      // =======================================================
      new HSAddField('.js-add-field', {
        addedField: el => {
          el.querySelectorAll('.js-select-dynamic').forEach(item => {
            HSCore.components.HSTomSelect.init(item)
          })

          HSCore.components.HSMask.init('.js-input-mask-dynamic')
        }
      })


      // INITIALIZATION OF INPUT MASK
      // =======================================================
      HSCore.components.HSMask.init('.js-input-mask')


      // INITIALIZATION OF QUILLJS EDITOR
      // =======================================================
      HSCore.components.HSQuill.init('.js-quill')

      
      // INITIALIZATION OF SELECT
      // =======================================================
      HSCore.components.HSTomSelect.init('.js-select', {
        render: {
          'option': function(data, escape) {
            return data.optionTemplate || `<div>${data.text}</div>>`
          },
          'item': function(data, escape) {
            return data.optionTemplate || `<div>${data.text}</div>>`
          }
        }
      })          
    })()

    var radioAnonymous = document.getElementById('sp_anonymous');
    var radioTerbuka = document.getElementById('sp_terbuka');

    // Mendapatkan elemen input fields
    var inputFirstName = document.getElementById('firstName');
    var inputLastName = document.getElementById('lastName');
    var inputNoIdentitas = document.getElementById('noIdentitas');

    // Menambahkan event listener untuk perubahan pada radio buttons
    radioAnonymous.addEventListener('change', function() {
        if (this.checked) {
            inputFirstName.disabled = true;
            inputLastName.disabled = true;
            inputNoIdentitas.disabled = true;
            inputFirstName.value = ''; // Mengosongkan nilai input
            inputLastName.value = ''; // Mengosongkan nilai input
            inputNoIdentitas.value = ''; // Mengosongkan nilai input
            inputNoIdentitas.value = null;
          } else {
        // Mengembalikan input menjadi tidak disabled jika radio button bukan anonymous
        inputFirstName.disabled = false;
        inputLastName.disabled = false;
        inputNoIdentitas.disabled = false;
    }
});

radioTerbuka.addEventListener('change', function() {
    if (this.checked) {
        document.getElementById('sifat_pelapor').value = 'Terbuka';
        inputFirstName.disabled = false;
        inputLastName.disabled = false;
        inputNoIdentitas.disabled = false;
    }
});

            // Menangani penyesuaian nilai sifat_pelapor dan noIdentitas sebelum mengirimkan data ke server
    document.querySelector('form').addEventListener('submit', function(event) {
        // Mendapatkan nilai sifat_pelapor yang dipilih
        var sifat_pelapor = document.querySelector('input[name="sp_anonymous"]:checked').value;

        // Mengganti nilai input sifat_pelapor dengan nilai yang dipilih
        document.querySelector('input[name="sifat_pelapor"]').value = sifat_pelapor;

        // Mengatur nilai noIdentitas sesuai dengan keadaan radio button 'sifat_pelapor'
        if (sifat_pelapor === 'Anonymous') {
            inputNoIdentitas.value = '';
        }
    });

    var checkbox = document.getElementById('deleteAccountCheckbox');
    var submitBtn = document.getElementById('submitBtn');

    // Menonaktifkan tombol submit saat halaman dimuat
    submitBtn.disabled = true;

    // Menambahkan event listener untuk perubahan pada checkbox
    checkbox.addEventListener('change', function() {
        // Memeriksa status checkbox
        if (checkbox.checked) {
            // Mengaktifkan tombol submit jika checkbox diceklis
            submitBtn.disabled = false;
        } else {
            // Menonaktifkan tombol submit jika checkbox tidak diceklis
            submitBtn.disabled = true;
        }
    });
    
  </script>
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="successModalLabel">Sukses!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Data berhasil dikirimkan! Tekan OK untuk kembali ke halaman utama.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>
<script>
    // Ambil parameter success dari URL
    const urlParams = new URLSearchParams(window.location.search);
    const success = urlParams.get('success');

    // Jika parameter success bernilai true, tampilkan popup
    if (success === 'true') {
        $('#successModal').modal('show'); // Tampilkan modal
    }
</script>
</body>
</html>
