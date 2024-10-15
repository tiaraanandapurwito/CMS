@extends('layouts.app2')

@section('content')
<!-- Tentang Kami start -->
<section id="tentang-kami">
    <div class="container">
      <div class="heading"> Tentang Kami </div>
      <div class="bungkus d-flex align-items-center">
        <img src="{{ asset ('img/perusahaan.jpg') }}" alt="Tentang Kami">

        <div class="ratakanan" data-aos="fade-left" data-aos-duration="1000">
          <p>
            GarudaLink berdiri pada tahun 2023 dengan tujuan menyediakan akses internet berkualitas tinggi untuk bisnis
            dan perorangan.
            Sejak awal berdiri, GarudaLink telah berkomitmen untuk memberikan layanan internet yang cepat, stabil,
            dan andal, serta terus berinovasi berfokus pada pelayanan yang prima dan dukungan teknis 24/7,
            memastikan kepuasan dan kenyamanan pelanggan dalam setiap penggunaan layanan internet.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Tentang Kami end -->

  <!-- visi misi start -->
  <section id="visi-misi" class="">
    <div class="container-visimisi">
      <h2 class="text-center mb-5">Visi & Misi</h2>

      <div class="   w-100  box-visimisi" data-aos="zoom-in">
        <!-- Visi -->
          <div class="card h-100 card-visimisi">
            <div class="card-body d-flex flex-column">
              <div class="icon-box text-center">
                <i class="bi bi-eye"></i>
              </div>
              <h3 class="card-title text-center">Visi</h3>
              <p class="card-text text-center">Menjadi penyedia layanan internet terpercaya yang menghubungkan dan
                memberdayakan masyarakat Indonesia dengan konektivitas berkualitas tinggi.</p>
            </div>
          </div>

        <!-- Misi -->
          <div class="card h-100 card-visimisi">
            <div class="card-body d-flex flex-column">
              <h3 class="card-title text-center">Misi</h3>
              <div class="mission-list">
                <span>• Menyediakan layanan internet cepat, stabil, dan terjangkau</span>
                <span>• Mengembangkan infrastruktur jaringan yang handal dan luas</span>
                <span>• Memberikan solusi konektivitas inovatif untuk berbagai kebutuhan</span>
                <span>• Menjaga kepuasan pelanggan melalui layanan pelanggan yang responsif</span>
                <span>• Berperan aktif dalam mempercepat transformasi digital Indonesia.</span>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!-- visi misi end -->

  <!-- testimoni start -->
  <section class="testimoni">
    <div class="class">
      <div class="section-header">
        <h2 class="title">Apa Pendapat Mereka Tentang GarudaLink?</h2>
      </div>

      <div class="testimoni-content swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="testimoni-items swiper-slide">
            <div class="info">
              <img src="{{ asset('img/xaviera.jfif') }}" alt="img">
              <div class="text-box">
                <h3 class="name">Xaviera Putri</h3>
                <span class="job">IT Manager The Premiere Hotel</span>
              </div>
            </div>
            <p>
              Mereka menawarkan layanan yang solid, kecepatan yang mengesankan,
              dan dukungan pelanggan yang sangat baik. Jika Anda mencari ISP yang handal, GarudaLink adalah pilihan yang tepat!
            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
          </div>

          <div class="testimoni-items swiper-slide">
            <div class="info">
              <img src="{{ asset('img/kevin 3.jpg') }}" alt="img">
              <div class="text-box">
                <h3 class="name">Kevin Lius Bong</h3>
                <span class="job">Owner Winter Cafe</span>
              </div>
            </div>
            <p>
              Tim teknis sigap dalam merespons keluhan dan menyelesaikan masalah teknis.
              Pengguna bisnis sering kali merasa puas dengan dukungan 24/7 yang diberikan.
            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
          </div>

          <div class="testimoni-items swiper-slide">
            <div class="info">
              <img src="{{ asset('img/shakira 4.jfif') }}" alt="img">
              <div class="text-box">
                <h3 class="name">Shakirah Amirah</h3>
                <span class="job">IT Support Rumah Sakit Insan Cendekia</span>
              </div>
            </div>
            <p>
              Saya merasa layanan internet yang disediakan GarudaLink cukup stabil,
              terutama untuk aktivitas sehari-hari seperti browsing, meeting online & streaming.
            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
          </div>

          <div class="testimoni-items swiper-slide">
            <div class="info">
              <img src="{{ asset('img/elon 3.jfif') }}" alt="img">
              <div class="text-box">
                <h3 class="name">Elon Musk</h3>
                <span class="job">CEO SpaceX</span>
              </div>
            </div>
            <p>
              Harga paket yang ditawarkan sepadan dengan layanan yang diberikan,
              terdapat juga opsi paket dengan kecepatan berbeda
              sehingga memudahkan pengguna untuk memilih sesuai kebutuhan mereka
            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
          </div>

          <div class="testimoni-items swiper-slide">
            <div class="info">
              <img src="{{ asset('img/vina.jpg') }}" alt="img">
              <div class="text-box">
                <h3 class="name">Vina Muliana</h3>
                <span class="job">Owner Klinik AvosCare </span>
              </div>
            </div>
            <p>
              Dengan GarudaLink, semua data pasien klinik AvosCare dapat diakses dengan cepat,
              dan proses registrasi hingga penjadwalan kunjungan berjalan lancar tanpa kendala.
            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
          </div>

          <div class="testimoni-items swiper-slide">
            <div class="info">
              <img src="{{ asset('img/jeff 2.jfif') }}" alt="img">
              <div class="text-box">
                <h3 class="name">Jeff Bezos</h3>
                <span class="job">CEO Skybox</span>
              </div>
            </div>
            <p>
              GarudaLink menawarkan koneksi internet yang aman,
              memungkinkan kami untuk melindungi data sensitif
              dan menjalankan operasi tanpa khawatir akan ancaman keamanan jaringan.
            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- testimoni end -->
  @endsection

@push('style')
<link href="{{ asset('css/profil.css') }}" rel="stylesheet">
@endpush
