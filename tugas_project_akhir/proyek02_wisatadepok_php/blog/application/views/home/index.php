<!DOCTYPE html>
<html lang="en">

<head>
  <!--====== Required meta tags ======-->
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!--====== Title ======-->
  <title>Wisata Depok</title>

  <!--====== Favicon Icon ======-->
  <link rel="shortcut icon" href="<?php echo base_url('asets/images/favicon.svg') ?>" type="image/svg" />

  <!--====== Bootstrap css ======-->
  <link rel="stylesheet" href="<?php echo base_url('asets/css/bootstrap.min.css') ?>" />

  <!--====== Line Icons css ======-->
  <link rel="stylesheet" href="<?php echo base_url('asets/css/lineicons.css') ?>" />

  <!--====== Tiny Slider css ======-->
  <link rel="stylesheet" href="<?php echo base_url('asets/css/tiny-slider.css') ?>" />

  <!--====== gLightBox css ======-->
  <link rel="stylesheet" href="<?php echo base_url('asets/css/glightbox.min.css') ?>" />

  <link rel="stylesheet" href="<?php echo base_url('asets/style.css') ?>" />
</head>

<body>

  <!--====== NAVBAR NINE PART START ======-->

  <section class="navbar-area navbar-nine" style="background-color: #171721;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="<?php echo base_url('index.php/auth/') ?>">
              <h3 style="color: white;">Wisata Kota Depok</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNine" aria-controls="navbarNine" aria-expanded="false" aria-label="Toggle navigation">
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse sub-menu-bar" id="navbarNine">
              <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <a class="page-scroll active" href="#hero-area">Home</a>
                </li>
                <?php if ($this->session->userdata('role') == 'administrator') { ?>
                  <li class="nav-item">
                    <a href="<?php echo base_url("index.php/tempat_wisata/index") ?>">Wisata</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url("index.php/jenis_wisata/index") ?>">Jenis Wisata</a>
                  </li>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url("index.php/kecamatan/index") ?>">Kecamatan</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url("index.php/komentar/index") ?>">Komentar</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url("index.php/nilai_rating/index") ?>">Nilai Rating</a>
                  </li>
                <?php } elseif ($this->session->userdata('role') == 'public') { ?>
                  <li class="nav-item">
                    <a href="<?php echo base_url("index.php/tempat_wisata/tampil") ?>">Wisata</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url("index.php/jenis_wisata/tampil") ?>">Jenis Wisata</a>
                  </li>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url("index.php/kecamatan/tampil") ?>">Kecamatan</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url("index.php/komentar/tampil") ?>">Komentar</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url("index.php/nilai_rating/tampil") ?>">Nilai Rating</a>
                  </li>
                <?php } ?>
                <li class="nav-item">
                  <a href="<?php echo base_url("index.php/auth/index") ?>">Login</a>
                </li>

              </ul>
            </div>

            <div class="navbar-btn d-none d-lg-inline-block">
              <a class="menu-bar" href="#side-menu-left"><i class="lni lni-menu"></i></a>
            </div>
          </nav>
          <!-- navbar -->
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </section>

  <!--====== NAVBAR NINE PART ENDS ======-->

  <!--====== SIDEBAR PART START ======-->

  <div class="sidebar-left">
    <div class="sidebar-close">
      <a class="close" href="#close"><i class="lni lni-close"></i></a>
    </div>
    <div class="sidebar-content">
      <div class="sidebar-logo">
        <a href="index.html">
          <h4>Profile</h3>
        </a>
      </div>
      <p class="text"></p>
      <!-- logo -->
      <!-- menu -->
      <div class="sidebar-social align-items-center justify-content-center">
        <p class="social-title">Follow Us On</p>
        <ul>
          <li>
            <a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
          </li>
          <li>
            <a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
          </li>
          <li>
            <a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
          </li>
          <li>
            <a href="https://www.instagram.com/sttterpadunf/?hl=id" target="_blank"><i class="lni lni-instagram-filled"></i></a>
          </li>
        </ul>
      </div>
      <!-- sidebar social -->
    </div>
    <!-- content -->
  </div>
  <div class="overlay-left"></div>

  <!--====== SIDEBAR PART ENDS ======-->

  <!-- Start header Area -->
  <section id="hero-area" class="header-area header-eight" style="background-color: #FFC212" ;>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 col-12">
          <div class="header-content">
            <h1>Lagi Nyari Wisata Kota Depok?</h1>
            <p style="font-size: 20px;">
              Sedang mencari informasi tentang tempat wisata Depok? Tertarik mengunjungi kota Depok sebagai tujuan tempat wisata?
            </p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12">
          <div class="header-image">
            <img src="<?php echo base_url('asets/tugu-depok.png') ?>" alt="#" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End header Area -->

  <!--====== ABOUT FIVE PART START ======-->

  <section class="about-area about-five">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-12">
          <div class="about-image-five">
            <img src="<?php echo base_url('asets/taman-bunga.jpg') ?>" alt="about" />
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="about-five-content">
            <h6 class="small-title text-lg">Destinasi Wisata Depok</h6>
            <h2 class="main-title fw-bold">Berikut merupakan beberapa dari tempat <span class="text-primary">Wisata Depok</span>yang harus dikunjungi</h2>
            <div class="about-five-tab">
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-who-tab" data-bs-toggle="tab" data-bs-target="#nav-who" type="button" role="tab" aria-controls="nav-who" aria-selected="true">Wisata Depok</button>
                  <button class="nav-link" id="nav-vision-tab" data-bs-toggle="tab" data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision" aria-selected="false">Sering Dikunjungi</button>
                  <!-- <button class="nav-link" id="nav-history-tab" data-bs-toggle="tab" data-bs-target="#nav-history"
                    type="button" role="tab" aria-controls="nav-history" aria-selected="false">TUJUAN</button> -->
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-who" role="tabpanel" aria-labelledby="nav-who-tab">
                  <p>Banyak sekali tempat wisata Depok yang sangat indah untuk diminati, yaitu :</p>
                  <p>1. Taman Bunga Wiladatika</p>
                  <p>2. Masjid Dian Al-Mahri</p>
                  <p>3. Situ Pengasinan Depok</p>
                </div>
                <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                  <p>Dari tempat wisata yang ada di Depok , ada juga tempat wisata yang sering dikunjungi oleh para wisatawan loh, apa aja? ini dia</p>
                  <p>1. Mall Margonda Depok</p>
                  <p>2. Arum Jeram Sungai Ciliwung</p>
                  <p>3. Cagar Alam Kota Depok, dll</p>
                </div>
                <!-- <div class="tab-pane fade" id="nav-history" role="tabpanel" aria-labelledby="nav-history-tab">
                  <p>1.Menghasilkan sarjana yang kompeten, profesional, berakhlak mulia, sehingga mampu berkompetisi di dunia kerja.</p>
                  <p>2.Menghasilkan karya-karya ilmiah dibidang teknologi informasi berwawasan masa depan yang inovatif dan bercirikan keterbukaan (openness) seperti open source, open standar dan open access/content, sehingga bermanfaat bagi bangsa Indonesia dan diakui secara Internasional.</p>
                  <p>3.Menerapkan ilmu pengetahuan dan teknologi tepat guna bagi masyarakat dengan melibatkan sivitas akademika.</p>
                  <p>4.Menciptakan kultur akademik yang inovatif, kompetitif dan kondusif untuk mewujudkan institusi yang unggul dan terkemuka.</p>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- container -->
  </section>

  <!--====== ABOUT FIVE PART ENDS ======-->

  <!-- ===== service-area start ===== -->
  <!-- ========================= contact-section start ========================= -->
  <section id="contact" class="contact-section" style="background-color: #FFC212; display:flex;">
    <div class="container col-2" style="background-color: #fff; border-radius: 10px 10px 10px 10px; margin-bottom:30px">
      <figure style="margin:8px;">
        <figcaption>
          <h6 class="text-center" style="margin:10px;">Taman Bunga Wiladatika</h6>
        </figcaption>
        <img src="<?php echo base_url("asets/taman-bunga-wiladatika.jpg"); ?>" alt="Taman Bunga Wiladatika">
        <p class="text-dark">Taman Wiladatika sudah menjadi salah satu referensi wisata warga Depok dan sekitarnya segera setelah diresmikan oleh Presiden Soeharto pada 29 Juni 1980</p>
        <!-- <p class="text-dark">Meski begitu, tempatnya yang asri dan fasilitasnya yang lengkap membuat taman ini ramai oleh wisatawan umum sebagai tujuan rekreasi. Baik Sekedar bersantai atau mengajak anak bermain di taman ini juga cukup menyenangkan</p> -->
        <button class="btn btn-primary" type="submit" name="submit" value="" size="5" style="margin-top:10px; margin-bottom:10px">
          Beri Komentar?
        </button>
      </figure>
    </div>
    <div class="container col-2" style="background-color: #fff; border-radius: 10px 10px 10px 10px; margin-bottom:30px">
      <figure style="margin:8px;">
        <figcaption>
          <h6 class="text-center" style="margin:10px;">Masjid Dian Al-Mahri</h6>
        </figcaption>
        <img src="<?php echo base_url("asets/masjid-dian-almahri.jpg"); ?>" alt="Masjid Dian Al Mahri">
        <p class="text-dark">Masjid Dian Al-Mahri atau lebih dikenal dengan Masjid Kubah Emas, menjadi destinasi wisata ribuan muslim setiap harinya.</p>
        <!-- <p class="text-dark">Gaya bangunan masjid ini mengadopsi arsitektur masjid Timur Tengah, seperti Masjid Nabawi dan Masjidil Aqso. Hal itu tercermin dari kubah, menara, plaza masjid dengan hiasan dekoratif yang menggunakan elemen geometris dan obelisk.</p> -->
        <button class="btn btn-primary" type="submit" name="submit" value="" size="5" style="margin-top:10px; margin-bottom:10px">
          Beri Komentar?
        </button>
      </figure>
    </div>
    <div class="container col-2" style="background-color: #fff; border-radius: 10px 10px 10px 10px; margin-bottom:30px">
      <figure style="margin:8px;">
        <figcaption>
          <h6 class="text-center" style="margin:10px;">Taman Wisata Pasir Putih</h6>
        </figcaption>
        <img src="<?php echo base_url("asets/taman-wisata-pasirputih.jpg"); ?>" alt="Taman Wisata Pasir Putih">
        <p class="text-dark">Taman Wisata Pasir Putih salah satu kolam renang yang ada di Sawangan, Depok, dan menjadi tempat favorit keluarga untuk mengajak anak-anak berenang</p>
        <!-- <p class="text-dark">Yup, berenang merupakan kegiatan main yang paling mengasyikkan bagi mereka. Apalagi kota Depok memiliki udara yang cukup panas, rasanya dengan berenang badan menjadi adem..</p> -->
        <button class="btn btn-primary" type="submit" name="submit" value="" size="5" style="margin-top:10px; margin-bottom:10px">
          Beri Komentar?
        </button>
      </figure>
    </div>
    <div class="container col-2" style="background-color: #fff; border-radius: 10px 10px 10px 10px; margin-bottom:30px">
      <figure style="margin:8px;">
        <figcaption>
          <h6 class="text-center" style="margin:8px;">Situ Pengasinan Depok</h6>
        </figcaption>
        <img src="<?php echo base_url("asets/situ-pengasinan-depok.jpg"); ?>" alt="Situ Pengasinan Depok">
        <p class="text-dark">Situ Pengasinan yang terletak di Kota Depok ternyata mampu menarik para wisatawan untuk mengisi waktu libur lebaran. Situ tersebut dapat dijadikan sebagai sebagai salah satu wisata alternatif untuk keluarga.</p>
        <!-- <p class="text-dark">Selain bisa menjadi tempat yang nyaman untuk menghilangkan kepenatan, Situ Pengasinan juga menjadi tempat wisata air yang terjangkau bagi semua lapisan masyarakat. Di sana, tersedia fasilitas sepeda air, perahu yang digerakkan dengan menggenjot pedal.</p> -->
        <button class="btn btn-primary" type="submit" name="submit" value="" size="5" style="margin-top:10px; margin-bottom:10px">
          Beri Komentar?
        </button>
      </figure>
    </div>
  </section>
  <br />
  <br />
  <br />
  <br />
  <br />

  <!-- Start Footer Area -->
  <footer class="footer-area footer-eleven">
    <!-- Start Footer Top -->
    <div class="footer-top">
      <div class="container">
        <div class="inner-content">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
              <!-- Single Widget -->
              <div class="footer-widget f-about">
                <div class="logo">
                  <a href="index.html">
                    <img src="<?php echo base_url('asets/lambang-depok.png') ?>" alt="#" class="img-fluid" width="200px" height="50px" />
                  </a>
                </div>
                <p>
                  Depok, Jawa Barat
                </p>
              </div>
              <!-- End Single Widget -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <!-- Single Widget -->
              <div class="footer-widget f-link">
                <p>Hubungi Kami</p>
                <ul>
                  <li><a href="https://elena.nurulfikri.ac.id/" target="_blank">Hubungi : 0878-0988-09</a></li>
                  <li><a href="https://ais.nurulfikri.ac.id/welcome" target="_blank">Email : wisatadepok@gmail.com</a></li>
                  <li><a href="https://alumni.nurulfikri.ac.id/" target="_blank">Instagram : @wisatadepok</a></li>
                  <li><a href="https://lpmi.nurulfikri.ac.id/" target="_blank">Twitter : @wisatadepok</a></li>
                  <li><a href="https://info.nurulfikri.ac.id/" target="_blank">Youtube : @wisatadepok</a></li>
                </ul>
              </div>
              <!-- End Single Widget -->
            </div>
            <div class="col-lg-2 col-md-6 col-12">
              <!-- Single Widget
              <div class="footer-widget f-link">
                <br/>
                <br/>
                <ul>
                  <li><a href="https://info.nurulfikri.ac.id/" target="_blank">SIAK</a></li>
                  <li><a href="https://library.nurulfikri.ac.id/" target="_blank">E-Library</a></li>
                  <li><a href="https://journal.nurulfikri.ac.id/" target="_blank">LPPM</a></li>
                  <li><a href="https://nurulfikri.ac.id/penelitian/" target="_blank">Jurnal</a></li>
                  <li><a href="https://slibc.nurulfikri.ac.id/" target="_blank">Inkubator Bisnis</a></li>
                </ul>
              </div> -->
              <!-- End Single Widget -->
            </div>
            <div class="col-lg-3 col-md-6 col-12" style="margin-left:20px;">
              <!-- Single Widget -->
              <div class="footer-widget newsletter">
                <p>Mau dapat keuntungan?</p>
                <p>Silahkan masukkan email kalian jika kalian ingin mendapatkan info terbaru dari kami</p>
                <form action="#" method="get" target="_blank" class="newsletter-form">
                  <input name="EMAIL" placeholder="Email address" required="required" type="email" />
                  <div class="button">
                    <button class="sub-btn">
                      <i class="lni lni-envelope"></i>
                    </button>
                  </div>
                </form>
              </div>
              <!-- End Single Widget -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ End Footer Top -->
  </footer>
  <!--/ End Footer Area -->

  <div class="made-in-ayroui mt-4">
    <a href="https://admisi.nurulfikri.ac.id/" target="_blank" rel="nofollow">
      <img style="width:80px" src="<?php echo base_url('asets/lambang-depok.png') ?>">
    </a>
  </div>

  <a href="#" class="scroll-top btn-hover">
    <i class="lni lni-chevron-up"></i>
  </a>

  <!--====== js ======-->
  <script src="<?php echo base_url('asets/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?php echo base_url('asets/js/glightbox.min.js') ?>"></script>
  <script src="<?php echo base_url('asets/js/main.js') ?>"></script>
  <script src="<?php echo base_url('asets/js/tiny-slider.js') ?>"></script>

  <script>
    //===== close navbar-collapse when a  clicked
    let navbarTogglerNine = document.querySelector(
      ".navbar-nine .navbar-toggler"
    );
    navbarTogglerNine.addEventListener("click", function() {
      navbarTogglerNine.classList.toggle("active");
    });

    // ==== left sidebar toggle
    let sidebarLeft = document.querySelector(".sidebar-left");
    let overlayLeft = document.querySelector(".overlay-left");
    let sidebarClose = document.querySelector(".sidebar-close .close");

    overlayLeft.addEventListener("click", function() {
      sidebarLeft.classList.toggle("open");
      overlayLeft.classList.toggle("open");
    });
    sidebarClose.addEventListener("click", function() {
      sidebarLeft.classList.remove("open");
      overlayLeft.classList.remove("open");
    });

    // ===== navbar nine sideMenu
    let sideMenuLeftNine = document.querySelector(".navbar-nine .menu-bar");

    sideMenuLeftNine.addEventListener("click", function() {
      sidebarLeft.classList.add( "open");
      overlayLeft.classList.add("open");
    });

    //========= glightbox
    GLightbox({
      'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
      'type': 'video',
      'source': 'youtube', //vimeo, youtube or local
      'width': 900,
      'autoplayVideos': true,
    });
  </script>
</body>

</html>