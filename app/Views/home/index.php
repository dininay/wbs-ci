<!DOCTYPE html>
<html lang="en" dir="">

<?php
echo view("layout//head.php")
?>

<body>
  <!-- ========== HEADER ========== -->

  <?php
  echo view("layout//header.php")
  ?>

  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Swiper Slider -->
    <div class="border-bottom">
      <!-- Main Slider -->
      <div class="js-swiper-main swiper vh-md-70">
        <div class="swiper-wrapper">
          <!-- Slide -->
          <div class="swiper-slide gradient-y-overlay-sm-gray-900 bg-img-start" style="background-image: url(assets/img/1920x800/img2.jpg);">
            <div class="container d-md-flex align-items-md-center vh-md-70 content-space-t-4 content-space-b-3 content-space-md-0">
              <div class="w-75 w-lg-70">
                <h3 class="text-white">Whistleblowing System</h3>
                <h1 class="display-4 text-white mb-0">Speak Up Bravely for Better Mie Gacoan</h1>
              </div>
            </div>
          </div>
          <!-- End Slide -->

          <!-- Slide 
          <div class="swiper-slide gradient-y-overlay-sm-gray-900 bg-img-start" style="background-image: url(assets/img/1920x800/img3.jpg);">
            <div class="container d-md-flex align-items-md-center vh-md-70 content-space-t-4 content-space-b-3 content-space-md-0">
              <div class="w-175 w-lg-150">
                <h3 class="text-white">It is an</h3>
                <h2 class="display-4 text-white mb-0">Easy business with Front template</h2>
              </div>
            </div>
          </div>-->
          <!-- End Slide -->
        </div>

        <!-- Arrows -->
        <div class="d-none d-md-inline-block">
          <!--<div class="js-swiper-main-button-next swiper-button-next swiper-button-next-soft-white"></div>
          <div class="js-swiper-main-button-prev swiper-button-prev swiper-button-prev-soft-white"></div>-->
        </div>
      </div>
      <!-- End Main Slider -->

      <!-- Thumbs Slider -->
      <div class="js-swiper-thumbs swiper">
        <div class="swiper-wrapper">
          <!-- Slide -->
          <div class="swiper-slide">
            <div class="d-flex align-items-center bg-white position-relative vh-md-30">
              <div class="container content-space-2">
                <div class="row">
                  <div class="col-md-4">
                    <span class="fs-3 fw-semibold">&nbsp;</span>
                    <h3 class="text-primary">Insan Gacoan</h3>
                    <p class="mb-0"><em>Speak Up Bravely for Better Mie Gacoan</em></p>
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->
              </div>

              <div class="col-md-5 d-none d-md-inline-block bg-primary position-absolute top-0 end-0 bottom-0">
                <div class="position-absolute top-50 translate-middle-y p-7">
                  <h3 class="text-white">Whistleblowing Mie Gacoan</h3>
                  <p class="text-white-70 mb-0">Speak Up Bravely for Better Mie Gacoan adalah saluran atau media whistleblowing system yang digunakan oleh Mie Gacoan untuk menerima pengaduan dugaan pelanggaran dari Pelapor.</p>
                </div>
              </div>
              <!-- End Col -->
            </div>
          </div>
          <!-- End Slide -->

          <!-- Slide 
          <div class="swiper-slide">
            <div class="d-flex align-items-center bg-white position-relative vh-md-30">
              <div class="container content-space-2">
                <div class="row">
                  <div class="col-md-4">
                    <span class="fs-3 fw-semibold">02.</span>
                    <h3 class="text-primary">Fully responsive</h3>
                    <p class="mb-0">Let visitors to view your content from their choice of device.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-5 d-none d-md-inline-block bg-dark position-absolute top-0 end-0 bottom-0">
                <div class="position-absolute top-50 translate-middle-y p-7">
                  <h3 class="text-white">Prev: Advanced editing</h3>
                  <p class="text-white-70 mb-0">Modify any aspect of your website with Front</p>
                </div>
              </div>
            </div>
          </div>-->
        </div>
      </div>
      <!-- End Thumbs Slider -->
    </div>
    <!-- Swiper Slider -->
    <!-- Card Grid -->
    <div class="container content-space-2 content-space-t-xl-3 content-space-b-lg-3">
      <!-- Heading -->
      <div class="w-md-75 w-lg-80 text-center mx-md-auto mb-5 mb-md-9">
        <h3 class="text-primary"><strong>Kriteria Pengaduan</strong></h3>
        <p class="mb-0"><em>Jika Anda melihat atau mengetahui dugaan Tindak Pidana Korupsi atau bentuk pelanggaran lainnya yang dilakukan insan Gacoan, silahkan melapor melalui <strong><em>Whistleblowing</em></strong> Mie Gacoan. Jika laporan anda memenuhi syarat/kriteria, maka laporan Anda akan diproses lebih lanjut.</em></p>
      </div>
      <!-- End Heading -->
      <div class="row mb-5 mb-md-0">
        <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
          <!-- Card -->
          <div class="card card-sm h-100">
            <div class="p-2">
              <img class="card-img" src="assets/img/480x220/img1.jpg" alt="Image Description">
            </div>

            <div class="card-body">
              <h4 class="card-title">WHAT</h4>
              <p class="card-text">Apa perbuatan berindikasi Tindak Pidana Korupsi/pelanggaran yang diketahui.</p>

              <!-- List Pointer -->
              <!-- End List Pointer -->
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
          <!-- Card -->
          <div class="card card-sm h-100">
            <div class="p-2">
              <img class="card-img" src="assets/img/480x220/img2.jpg" alt="Image Description">
            </div>

            <div class="card-body">
              <h4 class="card-title">WHO</h4>
              <p class="card-text">Siapa yang bertanggungjawab/terlibat dan terkait dalam perbuatan tersebut.</p>
              <!-- End List Pointer -->
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-4">
          <!-- Card -->
          <div class="card card-sm h-100">
            <div class="p-2">
              <img class="card-img" src="assets/img/480x220/img3.jpg" alt="Image Description">
            </div>

            <div class="card-body">
              <h4 class="card-title">WHERE</h4>
              <p class="card-text">Dimana tempat terjadinya perbuatan tersebut dilakukan.</p>
              <!-- End List Pointer -->
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->
      </div><br>
      <div class="row mb-5 mb-md-0">
        <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
          <!-- Card -->
          <div class="card card-sm h-100">
            <div class="p-2">
              <img class="card-img" src="assets/img/480x220/img4.jpg" alt="Image Description">
            </div>

            <div class="card-body">
              <h4 class="card-title">WHEN</h4>
              <p class="card-text">Kapan waktu perbuatan tersebut dilakukan.</p>

              <!-- List Pointer -->
              <!-- End List Pointer -->
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
          <!-- Card -->
          <div class="card card-sm h-100">
            <div class="p-2">
              <img class="card-img" src="assets/img/480x220/img5.jpg" alt="Image Description">
            </div>

            <div class="card-body">
              <h4 class="card-title">HOW</h4>
              <p class="card-text">Bagaimana cara perbuatan tersebut dilakukan (modus, cara, dan sebagainya).</p>
              <!-- End List Pointer -->
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-4">
          <!-- Card -->
          <div class="card card-sm h-100">
            <div class="p-2">
              <img class="card-img" src="assets/img/480x220/img6.jpg" alt="Image Description">
            </div>

            <div class="card-body">
              <h4 class="card-title">EVIDENCE</h4>
              <p class="card-text">Dilengkapi dengan bukti permulaan (data, dokumen, gambar dan rekaman) yang mendukung.</p>
              <!-- End List Pointer -->
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>

    <!-- End Card Grid -->
    <div class="container content-space-2 content-space-b-lg-1">
    </div>
    <!-- End Clients -->
    <div class="container content-space-2 content-space-lg-3">
      <div class="w-md-75 w-lg-50 text-center mx-md-auto">
        <div class="row justify-content-lg-between">
          <!-- Heading -->
          <div class="mb-5">
            <span class="text-cap">Informasi Pengaduan</span>
            <h2>Masukan nomor pengaduan anda untuk mendapatkan informasi lebih lanjut</h2>
          </div>
          <!-- End Heading -->

          <form id="searchForm" action="/HomeController/searchById" method="post">
            <!-- Input Card -->
            <div class="input-card input-card-sm border mb-3">
              <div class="input-card-form">
                <label for="id" class="form-label visually-hidden">Masukan Nomor Pengaduan</label>
                <input type="text" class="form-control form-control-lg" id="id" name="id" placeholder="0000-wbs-00-000" aria-label="Masukan Nomor Pengaduan">
              </div>
              <button type="submit" class="btn btn-primary btn-lg" id="searchButton" disabled>Cari</button>
            </div>
            <!-- End Input Card -->
          </form>
          <!-- Modal -->
          <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="searchModalLabel">Informasi Pengaduan</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center" id="searchModalContent">
                  <p id="searchResult"></p>
                  <p id="statusMessage"></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
              </div>
            </div>
          </div>



          <!-- End Modal -->

        </div>
      </div>

      <div class="container">
        <div class="w-lg-75 mx-lg-auto">
          <div class="card card-sm overflow-hidden">
            <!-- Card -->
            <div class="card-body">
              <div class="row justify-content-md-start align-items-md-center text-center text-md-start">
                <div class="col-md offset-md-1 mb-1 mb-md-0">
                  <h4 class="card-title">Anda sudah siap membuat laporan/pengaduan ?</h4>
                </div>

                <div class="col-md-auto">
                  <a class="btn btn-primary btn-transition" href="<?= base_url('/lapor') ?>">Buat laporan</a>
                </div>
              </div>

              <!-- SVG Shape -->

              <!-- End SVG Shape -->
            </div>
            <!-- End Card -->
          </div>
        </div>
      </div>


      <!-- Icon Blocks -->
      <div class="overflow-hidden">
        <div class="container content-space-t-2 content-space-t-lg-3 content-space-b-1 content-space-b-lg-3">
          <!-- Heading -->
          <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
            <h2>Tata cara Pengaduan</h2>
            <p>Berikut ini adalah tatacara dalam membuat pengaduan melalui Whistleblowing System Mie Gacoan, yaitu :</p>
          </div>
          <!-- End Heading -->

          <div class="row">
            <div class="col-lg-4 d-none d-lg-block">
              <!-- Card -->
              <div class="position-relative pe-lg-4">
                <a class="card card-transition shadow-none bg-img-start" href="#" style="background-image: url(assets/img/400x500/img26.jpg); min-height: 27rem;">
                  <div class="card-body">
                    <h4 class="card-title">Tata Cara Pengaduan</h4>
                    <p class="card-text text-body">Point-Point Tata Cara Pengaduan Laporan Whistleblowing</p>
                  </div>
                </a>

                <!-- SVG Shape -->
                <div class="position-absolute bottom-0 start-0 zi-n1 mb-n7 ms-n7" style="width: 12rem;">
                  <img class="w-100" src="assets/svg/components/dots-lg.svg" alt="SVG">
                </div>
                <!-- End SVG Shape -->
              </div>
              <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-lg-8">
              <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-7">
                  <!-- Icon Blocks -->
                  <div class="pe-lg-6">
                    <span class="svg-icon text-primary mb-4">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.3" d="M10.9607 12.9128H18.8607C19.4607 12.9128 19.9607 13.4128 19.8607 14.0128C19.2607 19.0128 14.4607 22.7128 9.26068 21.7128C5.66068 21.0128 2.86071 18.2128 2.16071 14.6128C1.16071 9.31284 4.96069 4.61281 9.86069 4.01281C10.4607 3.91281 10.9607 4.41281 10.9607 5.01281V12.9128V12.9128Z" fill="#035A4B" />
                        <path d="M12.9607 10.9128V3.01281C12.9607 2.41281 13.4607 1.91281 14.0607 2.01281C16.0607 2.21281 17.8607 3.11284 19.2607 4.61284C20.6607 6.01284 21.5607 7.91285 21.8607 9.81285C21.9607 10.4129 21.4607 10.9128 20.8607 10.9128H12.9607V10.9128Z" fill="#035A4B" />
                      </svg>

                    </span>

                    <h3 class="h4">Periksa Laporan Anda</h3>
                    <p>Sebelum melaporkan pengaduan Anda di Whistleblowing System Mie Gacoan, terlebih dahulu periksa kelengkapan pengaduan Anda apakah telah sesuai dengan kriteria pengaduan yang telah ditetapkan.</p>
                  </div>
                  <!-- End Icon Blocks -->
                </div>

                <div class="col-sm-6 mb-3 mb-sm-7">
                  <!-- Icon Blocks -->
                  <div class="pe-lg-6">
                    <span class="svg-icon text-primary mb-4">
                      <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.3" d="M16 0.200012H4C1.8 0.200012 0 2.00001 0 4.20001V16.2C0 18.4 1.8 20.2 4 20.2H16C18.2 20.2 20 18.4 20 16.2V4.20001C20 2.00001 18.2 0.200012 16 0.200012ZM15 10.2C15 10.9 14.8 11.6 14.6 12.2H18V16.2C18 17.3 17.1 18.2 16 18.2H12V14.8C11.4 15.1 10.7 15.2 10 15.2C9.3 15.2 8.6 15 8 14.8V18.2H4C2.9 18.2 2 17.3 2 16.2V12.2H5.4C5.1 11.6 5 10.9 5 10.2C5 9.50001 5.2 8.80001 5.4 8.20001H2V4.20001C2 3.10001 2.9 2.20001 4 2.20001H8V5.60001C8.6 5.30001 9.3 5.20001 10 5.20001C10.7 5.20001 11.4 5.40001 12 5.60001V2.20001H16C17.1 2.20001 18 3.10001 18 4.20001V8.20001H14.6C14.8 8.80001 15 9.50001 15 10.2Z" fill="#035A4B" />
                        <path d="M12 1.40002C15.4 2.20002 18 4.80003 18.8 8.20003H14.6C14.1 7.00003 13.2 6.10003 12 5.60003V1.40002V1.40002ZM5.40001 8.20003C5.90001 7.00003 6.80001 6.10003 8.00001 5.60003V1.40002C4.60001 2.20002 2.00001 4.80003 1.20001 8.20003H5.40001ZM14.6 12.2C14.1 13.4 13.2 14.3 12 14.8V19C15.4 18.2 18 15.6 18.8 12.2H14.6V12.2ZM8.00001 14.8C6.80001 14.3 5.90001 13.4 5.40001 12.2H1.20001C2.00001 15.6 4.60001 18.2 8.00001 19V14.8V14.8Z" fill="#035A4B" />
                      </svg>

                    </span>

                    <h4>Isi Formulir Pengaduan</h4>
                    <p>Klik menu "Buat Laporan" yang terdapat di bagian navigasi dan lanjutkan dengan mengisi formulir pengaduan yang telah disediakan dan lanjutkan dengan menekan tombol "Kirim Pengaduan".</p>
                  </div>
                  <!-- End Icon Blocks -->
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                  <!-- Icon Blocks -->
                  <div class="pe-lg-6">
                    <span class="svg-icon text-primary mb-4">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725V8.725Z" fill="#035A4B" />
                        <path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="#035A4B" />
                      </svg>

                    </span>

                    <h4>Simpan Kode Akun</h4>
                    <p>Setelah mengirim pengaduan, Anda akan mendapatkan kode akun yang memastikan Anda dapat masuk ke halaman khusus pelapor yang telah disediakan. Simpan dan jaga kerahasiaan kode akun tersebut.</p>
                  </div>
                  <!-- End Icon Blocks -->
                </div>

                <div class="col-sm-6">
                  <!-- Icon Blocks -->
                  <div class="pe-lg-6">
                    <span class="svg-icon text-primary mb-4">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15 19.5229C15 20.265 15.9624 20.5564 16.374 19.9389L22.2227 11.166C22.5549 10.6676 22.1976 10 21.5986 10H17V4.47708C17 3.73503 16.0376 3.44363 15.626 4.06106L9.77735 12.834C9.44507 13.3324 9.80237 14 10.4014 14H15V19.5229Z" fill="#035A4B" />
                        <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M3 6.5C3 5.67157 3.67157 5 4.5 5H9.5C10.3284 5 11 5.67157 11 6.5C11 7.32843 10.3284 8 9.5 8H4.5C3.67157 8 3 7.32843 3 6.5ZM3 18.5C3 17.6716 3.67157 17 4.5 17H9.5C10.3284 17 11 17.6716 11 18.5C11 19.3284 10.3284 20 9.5 20H4.5C3.67157 20 3 19.3284 3 18.5ZM2.5 11C1.67157 11 1 11.6716 1 12.5C1 13.3284 1.67157 14 2.5 14H6.5C7.32843 14 8 13.3284 8 12.5C8 11.6716 7.32843 11 6.5 11H2.5Z" fill="#035A4B" />
                      </svg>

                    </span>

                    <h4>Pantau Pengaduan</h4>
                    <p>Anda dapat memantau pengaduan yang pernah dikirim, membuat pengaduan baru dan juga dapat melakukan komunikasi secara pribadi dengan administrator WBS melalui halaman khusus pelapor.</p>
                  </div>
                  <!-- End Icon Blocks -->
                </div>
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
      </div>

      <!-- Testimonials -->
      <div class="overflow-hidden content-space-b-2">
        <div class="position-relative bg-dark rounded-2 mx-3 mx-md-10">
          <div class="container content-space-1 content-space-md-2 content-space-lg-3 position-relative zi-2">
            <!-- Blockquote -->
            <figure class="w-md-75 text-center mx-md-auto">
              <div class="mb-3">
                <span class="text-cap text-white-70"><strong>Fakta Integritas</strong></span>
              </div>

              <blockquote class="blockquote blockquote-light mb-5">"Anda tidak perlu khawatir terungkapnya identitas diri anda karena Mie Gacoan akan MERAHASIAKAN & MELINDUNGI Identitas Anda sebagai <em>Whistleblower</em>. Mie Gacoan sangat menghargai informasi yang Anda laporkan. Fokus kami kepada materi informasi yang Anda Laporkan. Sebagai bentuk terimakasih kami terhadap laporan yang Anda kirim, kami berkomitmen untuk merespon laporan Anda selambat-lambatnya 7 (tujuh) hari kerja sejak laporan Anda dikirim."</blockquote>

              <img class="avatar avatar-xl avatar-4x3 mb-5" src="assets/img/logo-putih.png" alt="Logo">
              <figcaption class="blockquote-footer blockquote-light">Team Whistleblower Mie Gacoan
                <span class="blockquote-footer-source">PT Pesta Pora Abadi</span>
              </figcaption>
            </figure>
            <!-- End Blockquote -->

            <!-- SVG Quote -->
            <figure class="position-absolute top-50 start-50 translate-middle zi-n1 mb-10">
              <svg width="400" height="400" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.5001 5.84998C9.0001 7.64998 5.4001 12.15 5.4001 16.2C5.4001 17.1 5.4001 18 5.8501 18.45C6.7501 17.55 8.1001 17.1 9.9001 17.1C13.5001 17.1 16.6501 19.8 16.6501 23.85C16.6501 27.9 13.5001 30.6 9.9001 30.6C6.3001 31.05 4.5001 29.7 3.1501 27.45C1.8001 25.2 1.3501 22.05 1.3501 20.25C1.3501 13.05 4.9501 7.19998 12.6001 3.59998L13.5001 5.84998ZM31.9501 5.84998C27.4501 7.64998 23.8501 12.15 23.8501 16.2C23.8501 17.1 23.8501 18 24.3001 18.45C25.2001 17.55 26.5501 17.1 28.3501 17.1C31.9501 17.1 35.1001 19.8 35.1001 23.85C35.1001 27.9 31.9501 30.6 28.3501 30.6C25.2001 30.6 23.4001 29.25 22.0501 27C19.8001 25.2 19.8001 22.05 19.8001 20.25C19.8001 13.05 23.4001 7.19998 31.0501 3.59998L31.9501 5.84998Z" fill="white" opacity=".025" />
              </svg>
            </figure>
            <!-- End SVG Quote -->

            <!-- SVG Shape -->
            <figure class="position-absolute top-0 start-0 mt-10 ms-10">
              <svg width="70" height="70" opacity=".5" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M60.6655 74.9992C80.4557 74.9992 96.4988 58.9561 96.4988 39.1659C96.4988 19.3757 80.4557 3.33252 60.6655 3.33252C40.8753 3.33252 24.8322 19.3757 24.8322 39.1659C24.8322 58.9561 40.8753 74.9992 60.6655 74.9992Z" stroke="white" stroke-width="5" stroke-miterlimit="10" />
                <path d="M158.5 197.5C168.165 197.5 176 189.665 176 180C176 170.335 168.165 162.5 158.5 162.5C148.835 162.5 141 170.335 141 180C141 189.665 148.835 197.5 158.5 197.5Z" stroke="white" stroke-width="5" stroke-miterlimit="10" />
              </svg>
            </figure>
            <!-- End SVG Shape -->

            <!-- SVG Shape -->
            <figure class="position-absolute bottom-0 end-0 mb-n7 me-n7" style="width: 10rem;">
              <img class="img-fluid" src="assets/svg/components/dots.svg" alt="Image Description">
            </figure>
            <!-- End SVG Shape -->
          </div>
        </div>
      </div>
      <!-- End Testimonials -->

      <!-- Subscribe -->
      <div class="container content-space-2 content-space-lg-3">
        <div class="w-md-75 w-lg-50 text-center mx-md-auto">
          <div class="row justify-content-lg-between">
            <!-- Heading -->
            <div class="mb-5">
              <span class="text-cap">Subscribe</span>
              <h2>Masukan alamat email anda untuk mendapatkan informasi lebih lanjut</h2>
            </div>
            <!-- End Heading -->

            <form>
              <!-- Input Card -->
              <div class="input-card input-card-sm border mb-3">
                <div class="input-card-form">
                  <label for="subscribeForm" class="form-label visually-hidden">Masukan Email</label>
                  <input type="text" class="form-control form-control-lg" id="subscribeForm" placeholder="Enter email" aria-label="Enter email">
                </div>
                <button type="button" class="btn btn-primary btn-lg">Kirim</button>
              </div>
              <!-- End Input Card -->
            </form>
          </div>
        </div>
      </div>
      <!-- End Subscribe -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  <?php
  echo view("layout/footer.php")
  ?>

  <!-- ========== END FOOTER ========== -->

  </div>
  </div>
  </div>

  <!-- Go To -->
  <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;" data-hs-go-to-options='{
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


  <?php
  echo view("layout/js.php")
  ?>

  <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pengaduan Berhasil Diajukan!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          <p>Terimakasih sudah memberitahu kami bahwa terdapat tindakan melawan hukum.</p>
          <p id="ticketCode"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    <?php if (session()->getFlashdata('success_modal')) : ?>
      const fixId = "<?php echo session()->getFlashdata('insert_id'); ?>";
      $(document).ready(function() {
        $('#successModal').modal('show');
        $('#ticketCode').text(`Simpan kode tiket anda (${fixId}), untuk mendapatkan info terkait.`);
      });
    <?php endif; ?>
  </script>
  <script>
    document.getElementById('searchForm').addEventListener('submit', function(event) {
      event.preventDefault();

      var id = document.getElementById('id').value;
    
      fetch('/HomeController/searchById', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({
            id: id !== null ? id : undefined
          })
        })
        .then(response => response.json())
        .then(item => {
          const modalTitle = document.getElementById('searchModalLabel');
          const modalBody = document.getElementById('searchResult');
          const statusMessage = document.getElementById('statusMessage');
          const data = item?.data;

          if (data?.id && data?.status) {
            modalBody.innerText = data.id;
            statusMessage.innerText = 'Data dengan ID ' + data.id + ' ditemukan. Saat ini proses pengajuan anda sampai pada tahap ' + data.status + '. Silahkan cek secara berkala untuk mendapatkan informasi terbaru atas pengaduan anda.';
          } else {
            modalBody.innerText = '';
            statusMessage.innerText = item?.message === 404 ? item?.result : 'Data dengan ID ' + id + ' tidak ditemukan.';
          }

          var myModal = new bootstrap.Modal(document.getElementById('searchModal'));
          myModal.show();
        })
        .catch(error => {
          console.error('Error:', error);
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
      const idInput = document.getElementById('id');
      const searchButton = document.getElementById('searchButton');

      function toggleSearchButton() {
        if (idInput.value.trim() !== '') {
          searchButton.disabled = false;
        } else {
          searchButton.disabled = true;
        }
      }
      idInput.addEventListener('input', toggleSearchButton);
      toggleSearchButton();
    });
  </script>


</body>

</html>