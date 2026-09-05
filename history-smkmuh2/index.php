<?php
/**
 * Website Company Profile & Sejarah SMK Muhammadiyah 2 Kuningan (DOS-Q 28)
 * Designed & Coded by Senior Full Stack Web Developer & UI/UX Designer
 */
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sejarah & Profil - SMK Muhammadiyah 2 Kuningan</title>
  <!-- Meta SEO -->
  <meta name="description" content="Website Sejarah Resmi SMK Muhammadiyah 2 Kuningan (DOS-Q 28). Membangun Generasi Unggul Sejak Tahun 1995. Cari tahu sejarah, pendiri, jurusan, galeri dan fasilitas kami.">
  <meta name="keywords" content="SMK Muhammadiyah 2 Kuningan, DOS-Q 28, Sejarah SMK Muhammadiyah, Vokasi Kuningan, Sekolah Terbaik Kuningan">
  <meta name="author" content="SMK Muhammadiyah 2 Kuningan">

  <!-- Favicon Placeholder (Logo Sekolah) -->
  <link rel="icon" type="image/png" href="assets/img/logo.png">

  <!-- Bootstrap 5.3 CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
  <!-- Bootstrap Icons CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  
  <!-- AOS (Animate On Scroll) CSS CDN -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body data-bs-spy="scroll" data-bs-target="#navbarNav" data-bs-offset="100">

  <!-- ==================== NAVBAR ==================== -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-custom" id="mainNavbar">
    <div class="container">
      <a class="navbar-brand" href="#beranda">
        <!-- Logo Sekolah -->
        <img src="assets/img/logo.png" alt="Logo DOS-Q 28">
        <div class="brand-title-container">
          <span class="brand-name">DOS-Q 28</span>
          <span class="brand-sub">SMK Muhammadiyah 2 Kuningan</span>
        </div>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item">
            <a class="nav-link active" href="#beranda">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tentang">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#sejarah">Sejarah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#perkembangan">Perkembangan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#jurusan">Jurusan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#galeri">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#fasilitas">Fasilitas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#lokasi">Lokasi</a>
          </li>
          <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
            <a class="btn btn-premium-primary py-2 px-4" href="#lokasi">Hubungi Kami</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ==================== HERO SECTION (CAROUSEL) ==================== -->
  <section class="hero-section" id="beranda">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6000">
      <div class="carousel-indicators" style="z-index: 3;">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <!-- Slide 1: Modern School Building (Local Image with fallback) -->
        <div class="carousel-item active" style="background-image: url('assets/img/hero/foto_sekolah.jpeg');">
          <div class="carousel-overlay"></div>
          <div class="carousel-content text-center">
            <p class="carousel-tagline" data-aos="fade-down">Pendidikan Unggul Vokasi</p>
            <h1 class="carousel-title" data-aos="zoom-in" data-aos-delay="200">SEJARAH<br>SMK MUHAMMADIYAH 2 KUNINGAN</h1>
            <p class="carousel-subtitle" data-aos="fade-up" data-aos-delay="400">Membangun Generasi Unggul Sejak Tahun 1995</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap" data-aos="fade-up" data-aos-delay="600">
              <a href="#sejarah" class="btn btn-premium-primary">Jelajahi Sejarah</a>
              <a href="#lokasi" class="btn btn-premium-secondary">Lihat Lokasi</a>
            </div>
          </div>
        </div>
        <!-- Slide 2: Education & Technology -->
        <div class="carousel-item" style="background-image: url('assets/img/hero/foto_lapangan_bagus.jpg');">
          <div class="carousel-overlay"></div>
          <div class="carousel-content text-center">
            <p class="carousel-tagline">DOS-Q 28 Pilihan Terbaik</p>
            <h1 class="carousel-title">FASILITAS LENGKAP &amp; MODERN</h1>
            <p class="carousel-subtitle">Sarana praktik berstandar industri demi masa depan gemilang.</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
              <a href="#fasilitas" class="btn btn-premium-primary">Lihat Fasilitas</a>
              <a href="#jurusan" class="btn btn-premium-secondary">Program Keahlian</a>
            </div>
          </div>
        </div>
        <!-- Slide 3: Happy Students -->
        <div class="carousel-item" style="background-image: url('assets/img/gallery/upacara.jpeg');">
          <div class="carousel-overlay"></div>
          <div class="carousel-content text-center">
            <p class="carousel-tagline">Aktif, Kreatif, Berkarakter</p>
            <h1 class="carousel-title">PRESTASI TANPA BATAS</h1>
            <p class="carousel-subtitle">Menghasilkan lulusan yang siap bersaing secara global dan berakhlakul karimah.</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
              <a href="#galeri" class="btn btn-premium-primary">Galeri Kegiatan</a>
              <a href="#tentang" class="btn btn-premium-secondary">Profil Sekolah</a>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Sebelumnya</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Selanjutnya</span>
      </button>
    </div>
  </section>

  <!-- ==================== SECTION TENTANG ==================== -->
  <section id="tentang">
    <div class="container">
      <div class="row align-items-center g-5">
        <!-- Image Column -->
        <div class="col-lg-6" data-aos="fade-right">
          <div class="about-img-wrapper">
            <img src="assets/img/hero/foto_sekolah.jpeg" alt="Gedung SMK Muhammadiyah 2 Kuningan">
          </div>
        </div>
        <!-- Content Column -->
        <div class="col-lg-6" data-aos="fade-left">
          <div class="section-title-container">
            <span class="section-tagline">Tentang DOS-Q 28</span>
            <h2 class="section-title">Pendidikan Vokasi Unggulan</h2>
          </div>
          <p class="text-justify mb-4">
            SMK Muhammadiyah 2 Kuningan didirikan pada tahun <strong>1995</strong> sebagai bentuk komitmen Muhammadiyah dalam menyediakan pendidikan vokasi yang unggul di Kabupaten Kuningan. 
          </p>
          <p class="text-justify mb-5">
            Sekolah ini dikenal luas dengan nama <strong>DOS-Q 28</strong> yang telah menjadi identitas sekolah sejak awal berdiri dan melambangkan semangat kerja keras, kedisiplinan, serta kualitas pendidikan yang kokoh.
          </p>
          
          <!-- Animated Counter Grid -->
          <div class="row g-4">
            <!-- Counter 1 -->
            <div class="col-sm-6 col-md-3 col-lg-6 col-xl-3">
              <div class="counter-card">
                <span class="counter-number" data-target="1995">0</span>
                <span class="counter-title">Tahun Berdiri</span>
              </div>
            </div>
            <!-- Counter 2 -->
            <div class="col-sm-6 col-md-3 col-lg-6 col-xl-3">
              <div class="counter-card">
                <span class="counter-number" data-target="377">0</span>
                <span class="counter-title">Siswa Pertama</span>
              </div>
            </div>
            <!-- Counter 3 -->
            <div class="col-sm-6 col-md-3 col-lg-6 col-xl-3">
              <div class="counter-card">
                <span class="counter-number" data-target="2">0</span>
                <span class="counter-title">Kampus</span>
              </div>
            </div>
            <!-- Counter 4 -->
            <div class="col-sm-6 col-md-3 col-lg-6 col-xl-3">
              <div class="counter-card">
                <span class="counter-number" data-target="5">0</span>
                <span class="counter-title">Program Keahlian</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== SECTION TIMELINE ==================== -->
  <section id="sejarah" class="bg-light-section">
    <div class="container">
      <div class="section-title-container section-title-center" data-aos="fade-up">
        <span class="section-tagline">Perjalanan Sekolah</span>
        <h2 class="section-title">Timeline Sejarah</h2>
      </div>

      <div class="timeline-container">
        <!-- Milestone 1 -->
        <div class="timeline-item left" data-aos="fade-right">
          <div class="timeline-badge">
            <i class="bi bi-flag-fill"></i>
          </div>
          <div class="timeline-content-wrapper">
            <div class="timeline-card">
              <span class="timeline-year">1995</span>
              <h4 class="h5 font-weight-bold text-dark">Pendirian Sekolah</h4>
              <p class="timeline-text">Peletakan batu pertama dan perumusan awal pembentukan SMK Muhammadiyah 2 Kuningan oleh jajaran Pimpinan Daerah Muhammadiyah Kuningan.</p>
            </div>
          </div>
        </div>

        <!-- Milestone 2 -->
        <div class="timeline-item right" data-aos="fade-left">
          <div class="timeline-badge">
            <i class="bi bi-file-earmark-check-fill"></i>
          </div>
          <div class="timeline-content-wrapper">
            <div class="timeline-card">
              <span class="timeline-year">1995</span>
              <h4 class="h5 font-weight-bold text-dark">Izin Operasional</h4>
              <p class="timeline-text">Keluarnya surat izin operasional resmi dari Departemen Pendidikan sebagai tanda keabsahan dimulainya proses belajar mengajar.</p>
            </div>
          </div>
        </div>

        <!-- Milestone 3 -->
        <div class="timeline-item left" data-aos="fade-right">
          <div class="timeline-badge">
            <i class="bi bi-people-fill"></i>
          </div>
          <div class="timeline-content-wrapper">
            <div class="timeline-card">
              <span class="timeline-year">1995</span>
              <h4 class="h5 font-weight-bold text-dark">377 Siswa Pertama</h4>
              <p class="timeline-text">Penerimaan angkatan pertama sebanyak 377 siswa yang mempercayakan masa depannya di DOS-Q 28.</p>
            </div>
          </div>
        </div>

        <!-- Milestone 4 -->
        <div class="timeline-item right" data-aos="fade-left">
          <div class="timeline-badge">
            <i class="bi bi-award-fill"></i>
          </div>
          <div class="timeline-content-wrapper">
            <div class="timeline-card">
              <span class="timeline-year">2003</span>
              <h4 class="h5 font-weight-bold text-dark">Akreditasi Baik</h4>
              <p class="timeline-text">Sekolah mendapatkan penilaian akreditasi dengan predikat Baik, mencerminkan pemenuhan standar mutu operasional dan pengajaran.</p>
            </div>
          </div>
        </div>

        <!-- Milestone 5 -->
        <div class="timeline-item left" data-aos="fade-right">
          <div class="timeline-badge">
            <i class="bi bi-graph-up-arrow"></i>
          </div>
          <div class="timeline-content-wrapper">
            <div class="timeline-card">
              <span class="timeline-year">Sekarang</span>
              <h4 class="h5 font-weight-bold text-dark">Terus Berkembang</h4>
              <p class="timeline-text">Hingga saat ini sekolah terus berinovasi, berkolaborasi dengan dunia industri, dan mengembangkan kurikulum yang relevan di era modern.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- ==================== SECTION PERKEMBANGAN ==================== -->
  <section id="perkembangan" class="bg-light-section">
    <div class="container">
      <div class="row align-items-center g-5">
        <!-- Text Content -->
        <div class="col-lg-6" data-aos="fade-right">
          <div class="section-title-container">
            <span class="section-tagline">Progress &amp; Prestasi</span>
            <h2 class="section-title">Perkembangan Sekolah</h2>
          </div>
          <p class="text-justify mb-4">
            SMK Muhammadiyah 2 Kuningan (DOS-Q 28) telah melahirkan ribuan lulusan sukses yang terserap di berbagai sektor industri berskala nasional maupun internasional. Kami terus memperluas jaringan kerja sama dengan dunia usaha dan dunia industri (DUDI) untuk memastikan lulusan kami tetap relevan dengan pasar kerja global.
          </p>
          <p class="text-justify mb-4">
            Melalui kurikulum berbasis industri, metode pengajaran saintifik, dan pelatihan kewirausahaan, sekolah ini bertransformasi dari sekadar pusat pendidikan menjadi inkubator talenta muda berprestasi di Kabupaten Kuningan.
          </p>
        </div>
        <!-- Illustration/Image Column -->
        <div class="col-lg-6" data-aos="fade-left">
          <div class="about-img-wrapper">
            <img src="assets/img/hero/foto_sekolah.jpeg" alt="Gedung SMK Muhammadiyah 2 Kuningan">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== SECTION JURUSAN ==================== -->
  <section id="jurusan">
    <div class="container">
      <div class="section-title-container section-title-center" data-aos="fade-up">
        <span class="section-tagline">Program Keahlian</span>
        <h2 class="section-title">Kompetensi Keahlian</h2>
      </div>

      <div class="row g-4 justify-content-center">
        <!-- TKR -->
        <div class="col-md-6 col-lg-4">
          <div class="premium-card jurusan-card">
            <div class="jurusan-icon-wrapper">
              <img src="assets/img/jurusan/tkr.png" alt="Teknik Kendaraan Ringan Logo">
            </div>
            <h3 class="jurusan-title">Teknik Kendaraan Ringan</h3>
            <p class="jurusan-desc">Mempelajari perawatan dan perbaikan mesin, sistem transmisi, sasis, serta kelistrikan mobil dengan teknologi terkini standar bengkel resmi.</p>
          </div>
        </div>

        <!-- TSM -->
        <div class="col-md-6 col-lg-4">
          <div class="premium-card jurusan-card">
            <div class="jurusan-icon-wrapper">
              <img src="assets/img/jurusan/tsm.png" alt="Teknik Sepeda Motor Logo">
            </div>
            <h3 class="jurusan-title">Teknik Sepeda Motor</h3>
            <p class="jurusan-desc">Mengkaji sistem mesin, kelistrikan, sasis kendaraan roda dua, mencetak mekanik motor andal berbekal lisensi dan standar bengkel agen tunggal pemegang merek.</p>
          </div>
        </div>

        <!-- TJKT -->
        <div class="col-md-6 col-lg-4">
          <div class="premium-card jurusan-card">
            <div class="jurusan-icon-wrapper">
              <img src="assets/img/jurusan/tjkt.png" alt="Teknik Jaringan Komputer dan Telekomunikasi Logo">
            </div>
            <h3 class="jurusan-title">Teknik Jaringan Komputer dan Telekomunikasi</h3>
            <p class="jurusan-desc">Fokus pada instalasi jaringan LAN/WAN, administrasi server, fiber optic, cybersecurity, serta sistem komunikasi nirkabel berbasis teknologi tinggi.</p>
          </div>
        </div>

        <!-- Farmasi -->
        <div class="col-md-6 col-lg-4">
          <div class="premium-card jurusan-card">
            <div class="jurusan-icon-wrapper">
              <img src="assets/img/jurusan/farmasi.png" alt="Farmasi Klinis dan Komunitas Logo">
            </div>
            <h3 class="jurusan-title">Farmasi Klinis dan Komunitas</h3>
            <p class="jurusan-desc">Mendidik asisten apoteker profesional untuk mengelola obat, melayani resep, serta menguasai dasar-dasar kefarmasian klinis di apotek atau rumah sakit.</p>
          </div>
        </div>

        <!-- RPL / PPLG -->
        <div class="col-md-6 col-lg-4">
          <div class="premium-card jurusan-card">
            <div class="jurusan-icon-wrapper">
              <img src="assets/img/jurusan/rpl.png" alt="Pengembangan Perangkat Lunak dan Gim Logo">
            </div>
            <h3 class="jurusan-title">Pengembangan Perangkat Lunak dan Gim</h3>
            <p class="jurusan-desc">Mengembangkan kompetensi rekayasa aplikasi web, coding (Java, PHP, JS, Python), UI/UX design, database system, serta perancangan gim 2D dan 3D interaktif.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== SECTION GALERI ==================== -->
  <section id="galeri" class="bg-light-section">
    <div class="container">
      <div class="section-title-container section-title-center" data-aos="fade-up">
        <span class="section-tagline">Dokumentasi Kegiatan</span>
        <h2 class="section-title">Galeri Sekolah</h2>
      </div>

      <!-- Masonry Grid -->
      <div class="gallery-grid" data-aos="fade-up">
        <!-- Item 1: Upacara Bendera (Local Image) -->
        <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryLightbox" data-src="assets/img/gallery/upacara.jpeg">
          <img src="assets/img/gallery/upacara.jpeg" alt="Upacara Bendera DOS-Q 28">
          <div class="gallery-overlay">
            <span class="gallery-tag">Upacara</span>
            <h4 class="gallery-title">Upacara Bendera Sekolah</h4>
          </div>
        </div>

        <!-- Item 2: Lapangan Olahraga (Local Image) -->
        <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryLightbox" data-src="assets/img/gallery/foto_lapangan.jpeg">
          <img src="assets/img/gallery/foto_lapangan.jpeg" alt="Lapangan Olahraga DOS-Q 28">
          <div class="gallery-overlay">
            <span class="gallery-tag">Lapangan</span>
            <h4 class="gallery-title">Lapangan Olahraga</h4>
          </div>
        </div>

        <!-- Item 3: Laboratorium TKJ (Local Image) -->
        <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryLightbox" data-src="assets/img/gallery/lab_tkj.jpeg">
          <img src="assets/img/gallery/lab_tkj.jpeg" alt="Laboratorium TKJ DOS-Q 28">
          <div class="gallery-overlay">
            <span class="gallery-tag">TKJ</span>
            <h4 class="gallery-title">Laboratorium Jaringan (TKJ)</h4>
          </div>
        </div>

        <!-- Item 4: Laboratorium RPL (Local Image) -->
        <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryLightbox" data-src="assets/img/gallery/lab_rpl.jpeg">
          <img src="assets/img/gallery/lab_rpl.jpeg" alt="Laboratorium RPL DOS-Q 28">
          <div class="gallery-overlay">
            <span class="gallery-tag">RPL</span>
            <h4 class="gallery-title">Laboratorium Komputer (RPL)</h4>
          </div>
        </div>

        <!-- Item 5: Workshop (Local Image) -->
        <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryLightbox" data-src="assets/img/gallery/bengkel_tkr.jpeg">
          <img src="assets/img/gallery/bengkel_tkr.jpeg" alt="Bengkel TKR">
          <div class="gallery-overlay">
            <span class="gallery-tag">Praktik Kerja</span>
            <h4 class="gallery-title">Bengkel TKR</h4>
          </div>
        </div>

        <!-- Item 6: Campus 2 Building (Local Image) -->
        <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryLightbox" data-src="assets/img/hero/gedung2.jpg">
          <img src="assets/img/hero/gedung2.jpg" alt="Gedung Kampus  DOS-Q 28">
          <div class="gallery-overlay">
            <span class="gallery-tag">Gedung</span>
            <h4 class="gallery-title">Gedung Kampus </h4>
          </div>
        </div>

        <!-- Item 7: Main School Building (Local Image) -->
        <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryLightbox" data-src="assets/img/hero/foto_bengkel.jpeg">
          <img src="assets/img/hero/foto_bengkel.jpeg" alt="Bengkel TSM">
          <div class="gallery-overlay">
            <span class="gallery-tag">Bengkel</span>
            <h4 class="gallery-title">Bengkel TSM</h4>
          </div>
        </div>

        <!-- Item 8: Pharmacy Lab (Local Image) -->
        <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryLightbox" data-src="assets/img/gallery/lab_farmasi.jpeg">
          <img src="assets/img/gallery/lab_farmasi.jpeg" alt="Praktik Laboratorium Farmasi">
          <div class="gallery-overlay">
            <span class="gallery-tag">Farmasi</span>
            <h4 class="gallery-title">Laboratorium Farmasi</h4>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== SECTION FASILITAS ==================== -->
  <section id="fasilitas">
    <div class="container">
      <div class="section-title-container section-title-center" data-aos="fade-up">
        <span class="section-tagline">Sarana &amp; Prasarana</span>
        <h2 class="section-title">Fasilitas Sekolah</h2>
      </div>

      <div class="row g-4">
        <!-- Fasilitas 1 -->
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="fasilitas-card">
            <div class="fasilitas-img-wrapper">
              <img src="assets/img/fasilitas/lab_tkj.jpeg" alt="Laboratorium Jaringan (TKJ)">
            </div>
            <div class="fasilitas-content">
              <h4 class="fasilitas-title"><i class="bi bi-diagram-3-fill"></i> Laboratorium Jaringan (TKJ)</h4>
              <p class="fasilitas-desc">Dilengkapi dengan perangkat komputer berspesifikasi tinggi, router, switch Cisco, serta infrastruktur jaringan modern untuk praktik siswa TKJ/TJKT.</p>
            </div>
          </div>
        </div>

        <!-- Fasilitas 2 -->
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="fasilitas-card">
            <div class="fasilitas-img-wrapper">
              <img src="assets/img/fasilitas/lab_farmasi.jpeg" alt="Laboratorium Farmasi">
            </div>
            <div class="fasilitas-content">
              <h4 class="fasilitas-title"><i class="bi bi-capsule"></i> Laboratorium Farmasi</h4>
              <p class="fasilitas-desc">Laboratorium steril yang memiliki alat-alat ekstraksi dan meramu obat standar farmasi klinis dan komunitas.</p>
            </div>
          </div>
        </div>

        <!-- Fasilitas 3 -->
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
          <div class="fasilitas-card">
            <div class="fasilitas-img-wrapper">
              <img src="assets/img/fasilitas/bengkel_tkr.jpeg" alt="Bengkel TKR">
            </div>
            <div class="fasilitas-content">
              <h4 class="fasilitas-title"><i class="bi bi-tools"></i> Bengkel TKR</h4>
              <p class="fasilitas-desc">Bengkel berukuran luas dengan kelengkapan car lift, scanner ECU, gas analyzer, dan alat-alat standar mekanik TKR dan TSM.</p>
            </div>
          </div>
        </div>

        <!-- Fasilitas 4 -->
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
          <div class="fasilitas-card">
            <div class="fasilitas-img-wrapper">
              <img src="assets/img/fasilitas/lab_rpl.jpeg" alt="Laboratorium Komputer (RPL)">
            </div>
            <div class="fasilitas-content">
              <h4 class="fasilitas-title"><i class="bi bi-code-slash"></i> Laboratorium Komputer (RPL)</h4>
              <p class="fasilitas-desc">Laboratorium khusus coding, web development, dan game design dengan PC modern berkecepatan tinggi serta lingkungan belajar ber-AC yang sangat kondusif.</p>
            </div>
          </div>
        </div>

        <!-- Fasilitas 5 -->
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
          <div class="fasilitas-card">
            <div class="fasilitas-img-wrapper">
              <img src="assets/img/fasilitas/foto_masjid.jpeg" alt="Masjid Baitul Ilmi">
            </div>
            <div class="fasilitas-content">
              <h4 class="fasilitas-title"><i class="bi bi-building"></i> Masjid Baitul Ilmi</h4>
              <p class="fasilitas-desc">Masjid luas dan bersih sebagai pusat kegiatan ibadah shalat berjamaah serta pembentukan akhlak mulia dan karakter islami siswa.</p>
            </div>
          </div>
        </div>

        <!-- Fasilitas 6 -->
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
          <div class="fasilitas-card">
            <div class="fasilitas-img-wrapper">
              <img src="assets/img/gallery/foto_lapangan.jpeg" alt="Lapangan Olahraga">
            </div>
            <div class="fasilitas-content">
              <h4 class="fasilitas-title"><i class="bi bi-dribbble"></i> Lapangan Olahraga</h4>
              <p class="fasilitas-desc">Lapangan multifungsi yang luas untuk olahraga futsal, basket, voli, bulutangkis, serta pelaksanaan upacara bendera mingguan.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== SECTION LOKASI & KONTAK ==================== -->
  <section id="lokasi" class="bg-light-section">
    <div class="container">
      <div class="section-title-container section-title-center" data-aos="fade-up">
        <span class="section-tagline">Hubungi &amp; Kunjungi Kami</span>
        <h2 class="section-title">Lokasi &amp; Kontak</h2>
      </div>

      <div class="row g-4">
        <!-- Contact Information Card -->
        <div class="col-lg-5" data-aos="fade-right">
          <div class="premium-card lokasi-card d-flex flex-column h-100 justify-content-between">
            <div>
              <h3 class="text-dark font-weight-bold mb-4">Informasi Sekolah</h3>
              <p class="text-muted mb-4">Kami siap menjawab pertanyaan Anda mengenai pendaftaran, program keahlian, atau sejarah DOS-Q 28.</p>
              
              <ul class="contact-info-list">
                <li>
                  <div class="contact-icon-box">
                    <i class="bi bi-geo-alt-fill"></i>
                  </div>
                  <div class="contact-text-box">
                    <h6>Alamat Kampus <span class="badge bg-success ms-2" style="font-weight: 500; font-size: 0.75rem;"><i class="bi bi-pin-map-fill me-1"></i> Lokasi Utama</span></h6>
                    <p class="text-muted mb-2">Jl. Raya Cigugur No.28, Kecamatan Cigugur, Kabupaten Kuningan, Jawa Barat 45551</p>
                    <a href="https://maps.google.com/?q=SMK+Muhammadiyah+2+Kuningan" target="_blank" class="btn btn-sm btn-premium-primary">
                      <i class="bi bi-signpost-2-fill me-1"></i> Buka Petunjuk Arah
                    </a>
                  </div>
                </li>
                <li>
                  <div class="contact-icon-box">
                    <i class="bi bi-telephone-fill"></i>
                  </div>
                  <div class="contact-text-box">
                    <h6>Nomor Telepon</h6>
                    <p class="text-muted">082111422258</p>
                  </div>
                </li>
                <li>
                  <div class="contact-icon-box">
                    <i class="bi bi-envelope-fill"></i>
                  </div>
                  <div class="contact-text-box">
                    <h6>Email Resmi</h6>
                    <p class="text-muted">info@smkmuh2kuningan.sch.id</p>
                  </div>
                </li>
                <li>
                  <div class="contact-icon-box">
                    <i class="bi bi-clock-fill"></i>
                  </div>
                  <div class="contact-text-box">
                    <h6>Jam Operasional</h6>
                    <p class="text-muted">Senin - Sabtu (07:00 - 14:30 WIB)</p>
                  </div>
                </li>
              </ul>
            </div>
            
            <div class="mt-4 pt-3 border-top d-flex gap-3 align-items-center">
              <span class="text-dark font-weight-bold" style="font-size:0.9rem;">Ikuti Kami:</span>
              <div class="social-links">
                <a href="https://www.facebook.com/share/1Dii4nXiv6/" target="_blank" class="social-btn facebook" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/smkm2kng?igsh=emlyMmw5cXFmdWhq" target="_blank" class="social-btn instagram" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://youtube.com/@smkmuhammadiyah2kuningan695?si=a1lRcULmnsx-nR1z" target="_blank" class="social-btn youtube" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                <a href="https://vt.tiktok.com/ZSXQnq98R/" target="_blank" class="social-btn tiktok" aria-label="TikTok"><i class="bi bi-tiktok"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- Google Maps Iframe Card -->
        <div class="col-lg-7" data-aos="fade-left">
          <div class="premium-card lokasi-card p-3 h-100 position-relative">
            <!-- Floating Map Marker Badge -->
            <div class="position-absolute top-0 end-0 m-4 shadow-sm" style="z-index: 5;">
              <a href="https://maps.google.com/?q=SMK+Muhammadiyah+2+Kuningan" target="_blank" class="btn btn-sm btn-light border-0 shadow-sm rounded-pill px-3 py-2 text-dark font-weight-bold d-flex align-items-center gap-2" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(8px);">
                <span class="spinner-grow spinner-grow-sm text-danger" role="status" aria-hidden="true" style="width: 10px; height: 10px;"></span>
                <i class="bi bi-geo-alt-fill text-danger fs-6"></i>
                <span>Titik Lokasi SMK Muh 2</span>
              </a>
            </div>
            <div class="map-container h-100">
              <!-- Actual Cigugur Kuningan Maps Iframe -->
              <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2268153401174!2d108.46197127457788!3d-6.982542568377759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x226f3992b8d0d571%3A0xe54d8fb8558f000b!2sSMK%20Muhammadiyah%202%20Kuningan!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" 
                width="100%" 
                height="100%" 
                style="border:0; min-height: 450px;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== PREMIUM FOOTER ==================== -->
  <footer class="footer-premium">
    <div class="container">
      <div class="row g-4">
        <!-- Brand & Description -->
        <div class="col-lg-5">
          <div class="footer-brand">
            <img src="assets/img/logo.png" alt="Logo DOS-Q 28">
            <div class="footer-brand-title">
              <span class="footer-brand-name">DOS-Q 28</span>
              <span class="footer-brand-sub">SMK Muhammadiyah 2 Kuningan</span>
            </div>
          </div>
          <p class="footer-desc">
            Penyedia pendidikan vokasi unggul berkarakter Islami di Kabupaten Kuningan sejak 1995. Kami berdedikasi melahirkan lulusan siap kerja, kompeten, dan berkepribadian luhur.
          </p>
          <div class="social-links">
            <a href="https://www.facebook.com/share/1Dii4nXiv6/" target="_blank" class="social-btn facebook" aria-label="Facebook Link"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/smkm2kng?igsh=emlyMmw5cXFmdWhq" target="_blank" class="social-btn instagram" aria-label="Instagram Link"><i class="bi bi-instagram"></i></a>
            <a href="https://youtube.com/@smkmuhammadiyah2kuningan695?si=a1lRcULmnsx-nR1z" target="_blank" class="social-btn youtube" aria-label="Youtube Link"><i class="bi bi-youtube"></i></a>
            <a href="https://vt.tiktok.com/ZSXQnq98R/" target="_blank" class="social-btn tiktok" aria-label="Tiktok Link"><i class="bi bi-tiktok"></i></a>
          </div>
        </div>

        <!-- Quick Navigation -->
        <div class="col-md-6 col-lg-3 offset-lg-1">
          <h4 class="footer-title">Peta Situs</h4>
          <ul class="footer-links">
            <li><a href="#beranda">Beranda</a></li>
            <li><a href="#tentang">Tentang</a></li>
            <li><a href="#sejarah">Sejarah</a></li>
            <li><a href="#jurusan">Kompetensi Keahlian</a></li>
            <li><a href="#galeri">Galeri Kegiatan</a></li>
            <li><a href="#fasilitas">Fasilitas</a></li>
          </ul>
        </div>

        <!-- Contact/Operational summary -->
        <div class="col-md-6 col-lg-3">
          <h4 class="footer-title">Kampus Kami</h4>
          <p class="mb-2 text-white-50" style="font-size:0.9rem;">
            Jl. Raya Cigugur No.28, Kec. Cigugur, Kabupaten Kuningan, Jawa Barat 45551.
          </p>
          <p class="mb-2 text-white-50" style="font-size:0.9rem;">
            <i class="bi bi-telephone-fill me-2 text-accent"></i>082111422258
          </p>
          <p class="text-white-50" style="font-size:0.9rem;">
            <i class="bi bi-envelope-fill me-2 text-accent"></i>info@smkmuh2kuningan.sch.id
          </p>
        </div>
      </div>

      <!-- Copyright Area -->
      <div class="row footer-bottom">
        <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
          &copy; <?php echo date("Y"); ?> <strong>SMK Muhammadiyah 2 Kuningan</strong>. Hak Cipta Dilindungi.
        </div>
        <div class="col-md-6 text-center text-md-end">
          Developer PKL - DOS-Q 28 Creative
        </div>
      </div>
    </div>
  </footer>

  <!-- ==================== GALLERY LIGHTBOX MODAL ==================== -->
  <div class="modal fade lightbox-modal" id="galleryLightbox" tabindex="-1" aria-labelledby="galleryLightboxLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-body text-center">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
          <img src="" alt="Pratinjau Foto Galeri" class="lightbox-img">
        </div>
      </div>
    </div>
  </div>

  <!-- ==================== JAVASCRIPT DEPENDENCIES ==================== -->
  
  <!-- Bootstrap 5.3 Bundle with Popper CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  
  <!-- AOS (Animate On Scroll) Library JS CDN -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  
  <!-- Custom script.js -->
  <script src="js/script.js"></script>

</body>
</html>
