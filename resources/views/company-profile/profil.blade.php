@extends('layouts.app2')

@section('content')
    <!-- Tentang Kami start -->
    <section id="tentang-kami">
        <div class="container">
            <div class="heading"> Tentang Kami </div>
            <div class="bungkus d-flex align-items-center">
                <img src="{{ asset('img/perusahaan.jpg') }}" alt="Tentang Kami">

                <div class="ratakanan" data-aos="fade-left" data-aos-duration="1000">
                    <p style="font-size: 18px">
                        {{ $descriptions[0]->description }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Tentang Kami end -->

    <!-- visi misi start -->
    <section id="visi-misi">
        <div class="container-visimisi">
            <h2 class="text-center mb-5">Visi & Misi</h2>

            <div class="w-100  box-visimisi" data-aos="zoom-in">
                <!-- Visi -->
                <div class="card h-100 card-visimisi">
                    <div class="card-body d-flex flex-column">
                        <div class="icon-box text-center">
                            <i class="bi bi-eye"></i>
                        </div>
                        <h3 class="card-title text-center">Visi</h3>
                        <p class="card-text text-center">Menjadi penyedia layanan internet terpercaya yang menghubungkan dan
                            memberdayakan masyarakat Indonesia dengan konektivitas berkualitas tinggi</p>
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
                            <span>• Menjaga kepuasan pelanggan melalui layanan yang responsif</span>
                            <span>• Berperan aktif dalam mempercepat transformasi digital Indonesia</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- visi misi end -->

    <section class="testimoni">
        <div class="class">
            <div class="section-header">
                <h2 class="title">Apa Pendapat Mereka Tentang GarudaLink?</h2>
            </div>

            <div class="testimoni-content swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($testimonis as $testimoni)
                        <div class="testimoni-items swiper-slide">
                            <div class="info">
                                <img src="{{ asset('storage/' . $testimoni->image) }}" alt="img">
                                <div class="text-box">
                                    <h3 class="nama">{{ $testimoni->nama }}</h3>
                                    <span class="pekerjaan">{{ $testimoni->pekerjaan }}</span>
                                </div>
                            </div>
                            <p style="font-size: 19px">
                                {{ $testimoni->pesan }}
                            </p>
                            <div class="rating">
                                @for ($i = 0; $i < $testimoni->rating; $i++)
                                    <i class="fa fa-star"></i>
                                @endfor
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- testimoni end -->
@endsection

@push('style')
    <link href="{{ asset('css/profil.css') }}" rel="stylesheet">
@endpush
