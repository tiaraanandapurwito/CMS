@extends('layouts.dashboard')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container mt-4 d-flex justify-content-center align-items-center" style="min-height: 70vh;">
    <div class="text-center w-100">
        <h1 class="mb-3" style="color: black; font-weight: 700; font-size: 40px;">Selamat Datang di Dashboard Admin</h1>
        <p class="lead mb-4" style="color: black; max-width: 600px; margin: auto; font-size: 25px;">
            Akses dan kelola berbagai fitur penting berikut untuk mendukung bisnis Anda dengan efisien:
        </p>
        <div class="row justify-content-center gy-3 gx-3">
            @php
                $features = [
                    ['title' => 'Media Partner', 'img' => 'img/partner 2.jfif', 'desc' => 'Atur informasi media partner', 'width' => '50%'],
                    ['title' => 'Peta GarudaLink', 'img' => 'img/maps.jfif', 'desc' => 'Kelola lokasi jaringan', 'width' => '55%'],
                    ['title' => 'Profil Perusahaan', 'img' => 'img/server.jpg', 'desc' => 'Perbarui profil perusahaan', 'width' => '40%'],
                    ['title' => 'Testimoni', 'img' => 'img/testimoni.png', 'desc' => 'Kelola ulasan pelanggan', 'width' => '30%'],
                    ['title' => 'Paket Internet', 'img' => 'img/wifi.png', 'desc' => 'Perbarui paket internet', 'width' => '50%'],
                ];
            @endphp

            @foreach($features as $feature)
                <div class="col-md-2 col-6">
                    <div class="p-3 rounded bg-light shadow-sm card-hover h-100 d-flex flex-column align-items-center">
                        <img src="{{ asset($feature['img']) }}" alt="{{ $feature['title'] }}" class="img-fluid mb-2" style="border-radius: 10px; max-width: {{ $feature['width'] }};">
                        <h6 style="color: black; font-size: 0.9rem;">{{ $feature['title'] }}</h6>
                        <p style="color: black; font-size: 0.8rem; flex-grow: 1;">{{ $feature['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <p class="mt-3" style="color: black; font-style: italic; font-size: 20px;">
            Gunakan fitur ini untuk mengoptimalkan layanan Anda.
        </p>
    </div>
</div>

<style>
    .card-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
    }

    .card-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }
</style>
@endsection
