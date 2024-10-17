@extends('layouts.app3')

@section('content')
<!-- Tentang Kami start -->
<!-- paket start -->
<section id="paket-section" class="py-5">
    <div class="container text-center">
      <h5 class="display-5 mb-3" id="layanan">Paket Layanan Internet & WiFi</h5>
      <h2 class="mb-5" id="jenis">Pilih paket yang sesuai dengan kebutuhan internet dan wifi Anda</h2>

      <div class="row justify-content-center">
        <!-- Paket 1 -->
        <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000">
          <div class="card shadow-lg border-0 h-100 text-center paket-card">
            <div class="card-header bg-primary text-white">
              <h4 class="card-title">Garuda <br> Basic</h4>
            </div>
            <div class="card-body d-flex flex-column">
              <h5 class="card-price">Rp 250,000 <span>/bulan</span></h5>
              <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item">Kecepatan 35 Mbps</li>
                <li class="list-group-item">Kuota Unlimited</li>
                <li class="list-group-item">Gratis pemasangan</li>
                <li class="list-group-item">Koneksi stabil untuk browsing & streaming</li>
              </ul>
              <a href="#" class="btn btn-primary mt-auto w-100">Pilih Paket</a>
            </div>
          </div>
        </div>

        <!-- Paket 2 -->
        <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1200">
          <div class="card shadow-lg border-0 h-100 text-center paket-card">
            <div class="card-header bg-success text-white">
              <h4 class="card-title">Garuda <br> Prime </h4>
            </div>
            <div class="card-body d-flex flex-column">
              <h5 class="card-price">Rp 350,000 <span>/bulan</span></h5>
              <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item">Kecepatan 50 Mbps</li>
                <li class="list-group-item">Kuota Unlimited</li>
                <li class="list-group-item">Gratis pemasangan</li>
                <li class="list-group-item">Ideal untuk Penggunaan Multi-Perangkat</li>
                <li class="list-group-item">Streaming HD Tanpa Buffering</li>
              </ul>
              <a href="#" class="btn btn-success mt-auto w-100">Pilih Paket</a>
            </div>
          </div>
        </div>

        <!-- Paket 3 -->
        <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1400">
          <div class="card shadow-lg border-0 h-100 text-center paket-card">
            <div class="card-header bg-danger text-white">
              <h4 class="card-title">Garuda Premium</h4>
            </div>
            <div class="card-body d-flex flex-column">
              <h5 class="card-price">Rp 500,000 <span>/bulan</span></h5>
              <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item">Kecepatan 100 Mbps</li>
                <li class="list-group-item">Kuota Unlimited</li>
                <li class="list-group-item">Gratis pemasangan, router & support 24/7</li>
                <li class="list-group-item">Optimal untuk Streaming 4K & Gaming</li>
              </ul>
              <a href="#" class="btn btn-danger mt-auto w-100">Pilih Paket</a>
            </div>
          </div>
        </div>

        <!-- Paket 4 -->
        <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1600">
          <div class="card shadow-lg border-0 h-100 text-center paket-card">
            <div class="card-header bg-warning text-white">
              <h4 class="card-title">Garuda Starter</h4>
            </div>
            <div class="card-body d-flex flex-column">
              <h5 class="card-price">Rp 150,000 <span>/bulan</span></h5>
              <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item">Kecepatan 15 Mbps</li>
                <li class="list-group-item">Kuota Unlimited</li>
                <li class="list-group-item">Gratis pemasangan</li>
                <li class="list-group-item">Cocok untuk Pemakaian Rumah Tangga</li>
              </ul>
              <a href="#" class="btn btn-danger mt-auto w-100">Pilih Paket</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- paket end -->
  @endsection

@push('style')
<link href="{{ asset('css/paket.css') }}" rel="stylesheet">
@endpush
