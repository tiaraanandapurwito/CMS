@extends('layouts.app3')

@section('content')
    <!-- Paket Section Start -->
    <section id="paket-section" class="py-5">
        <div class="container text-center" data-aos="fade-right">
          <h5 class="display-5 mb-3" id="layanan">Paket Layanan Internet & WiFi</h5>
          <h2 class="mb-1" id="jenis">Pilih paket yang sesuai dengan kebutuhan internet dan wifi Anda</h2>
    <section id="paket-section" class="py-5">
        <div class="container">
            <div class="kotak-flex" style="display: grid; grid-template-columns: repeat(3, minmax(0, 1fr));  gap: 24px;">
                @foreach ($pakets as $paket)
                    <div class="container-paket">
                        <div class="paket-card">
                            <div class="card-header" style="background-color: {{ $paket->warna_paket }}">
                                <h4 class="card-title">{{ $paket->nama_paket }}</h4>
                            </div>
                            <div class="card-body">
                                <h5 class="card-price">Rp {{ $paket->harga }} <span>/bulan</span></h5>
                                <ol class="list-group list-group-flush mb-4">
                                    @foreach (explode('.', $paket->deskripsi) as $desc)
                                        <li class="list-group-item">{{ $desc }}</li>
                                    @endforeach
                                </ol>
                                <a href="#" class="btn btn-primary mt-auto w-100">Pilih Paket</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
    <!-- Paket Section End -->
@endsection

@push('style')
    <link href="{{ asset('css/paket.css') }}" rel="stylesheet">
    <style>
        @media (max-width: 	768px) {
            #paket-section .kotak-flex {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
                /* background-color: red */

            }
        }
        @media (max-width: 640px) {
            #paket-section .kotak-flex {
                grid-template-columns: repeat(1, minmax(0, 1fr)) !important;
                /* background-color: red */

            }
        }
    </style>
@endpush
