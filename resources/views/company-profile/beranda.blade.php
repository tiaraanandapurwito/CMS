@extends('layouts.app')

@section('content')
    <!-- Home section start -->
    <section id="home">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/server.jpg') }}" style="height: 90vh; object-fit: cover; filter: brightness(40%);"
                        class="d-block w-100" alt="Server">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/teknisijaringan.jpg') }}"
                        style="height: 90vh; object-fit: cover; filter: brightness(40%);" class="d-block w-100"
                        alt="Teknisi Jaringan">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/tower-isp.webp') }}"
                        style="height: 90vh; object-fit: cover; filter: brightness(40%);" class="d-block w-100"
                        alt="Tower ISP">
                </div>
            </div>
        </div>
        <div class="content" style="position: absolute; top: 0; left: 0;" data-aos="fade-up" data-aos-duration="3000">
            <h3>SELAMAT DATANG DI <br> GarudaLink</h3>
            <p>Penyedia akses layanan internet, kencang tanpa lelet</p>
            <a id="btn" class="btn" href="{{ url('profil') }}">Selengkapnya</a>
        </div>
    </section>
    <!-- Home section end -->

    <!-- Keunggulan section start -->
    <section id="keunggulan">
        <div class="container-fluid keunggulan pt-5 pb-5">
            <div class="container text-center" data-aos="fade-right">
                <h5 class="display-3" id="keunggulan">MENGAPA GARUDALINK?</h5>
                <h6>KAMI MEMBERIKAN SOLUSI PERMASALAHAN KEBUTUHAN INTERNET ANDA</h6>
            </div>
        </div>
        <div class="container">
            <div class="row pt-2 keunggulan">
                <div class="col-md-4 text-center">
                    <div class="mt-3">
                        <span class="lingkaran"><i class="fa-solid fa-wifi fa-5x"></i></span>
                        <div class="card-body">
                            <h5 class="card-title mt-4">CEPAT DAN STABIL</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="mt-3">
                        <span class="lingkaran"><i class="fa-solid fa-shield fa-5x"></i></span>
                        <div class="card-body">
                            <h5 class="card-title mt-4">AMAN DAN FLEKSIBEL</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="mt-3">
                        <span class="lingkaran"><i class="fa-solid fa-phone-volume fa-5x"></i></span>
                        <div class="card-body">
                            <h5 class="card-title mt-4">SUPPORT 24/7</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Keunggulan section end -->

    <!-- Media partner section start -->
    <div class="container-fluid pt-5">
        <div class="container text-center" data-aos="fade-right">
            <h5 class="display-3" id="media-partner">Our Partner</h5>
            <!-- Logo media partner -->
            <div class="logos">
                <div class="logos-slide">
                    @foreach ($mediapartners as $mediapartner)
                        @if ($mediapartner->image)
                            <img src="{{ asset('storage/' . $mediapartner->image) }}"
                                alt="{{ $mediapartner->mediapartner }}" width="160" height="180">
                        @else
                            No Image
                        @endif
                    @endforeach
                </div>

                <div class="logos-slide">
                    @foreach ($mediapartners as $mediapartner)
                        @if ($mediapartner->image)
                            <img src="{{ asset('storage/' . $mediapartner->image) }}"
                                alt="{{ $mediapartner->mediapartner }}" width="160" height="180">
                        @else
                            No Image
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Media partner section end -->

    <!-- Maps start -->
    <div class="container-fluid">
        <div class="container text-center mb-4">
            <h5 class="display-2" id="maps" data-aos="fade-right">Jaringan GarudaLink di Pekanbaru</h5>
            <div class="d-flex justify-content-center"> <!-- Center the flex items -->
                <div id="map"></div>
                <div class="legend">
                    <p><strong>Keterangan Titik:</strong></p>
                    <p>
                        <span class="legend-green"></span>
                        <strong>Tiang Jaringan Terpasang</strong> - Tiang yang sudah aktif dan memberikan layanan
                    </p>
                    <p>
                        <span class="legend-blue"></span>
                        <strong>Tiang Perencanaan</strong> - Tiang yang sedang dalam perencanaan pemasangan
                    </p>
                    <p>
                        <span class="legend-red"></span>
                        <strong>Tidak Bisa Dipasang</strong> - Tiang yang tidak dapat dipasang
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Maps end -->
@endsection

@push('style')
    <link href="{{ asset('css/beranda.css') }}?v=1.0" rel="stylesheet">
    <style>
        .legend {
            margin-top: 20px;
            font-size: 17px;
            padding-left: 20px;
        }

        .legend span {
            display: inline-block;
            width: 15px;
            height: 15px;
            margin-right: 5px;
            border-radius: 50%;
        }

        .legend-green {
            background-color: green;
        }

        .legend-blue {
            background-color: blue;
        }

        .legend-red {
            background-color: red;
        }
    </style>
@endpush

@push('script')
    <script>
        // Initialize map
        var map = L.map('map').setView([0.4783470, 	101.3799990], 15);

        // Add tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(map);

        // Data titik lokasi dari server
        var locations = @json($locations); // Convert PHP data to JavaScript

        // Function to determine marker color based on status
        function getMarkerColor(status) {
            switch (status) {
                case 'active':
                    return 'green';
                case 'inactive':
                    return 'blue';
                case 'maintenance':
                    return 'red';
                default:
                    return 'gray'; // Default color
            }
        }

        // Add marker for each location
        locations.forEach(function(location) {
            var color = getMarkerColor(location.status);

            // Create a custom icon with color
            var marker = L.divIcon({
                className: 'custom-marker',
                html: '<div style="background-color:' + color +
                    '; width: 20px; height: 20px; border-radius: 50%;"></div>',
                iconSize: [20, 20]
            });

            L.marker([location.latitude, location.longitude], {
                    icon: marker
                })
                .addTo(map)
                .bindPopup(location.name); // Show location name on marker click
        });
    </script>

    <style>
        .custom-marker {
            border: 2px solid #ffffff;
            /* Optional: add border to markers */
        }
    </style>
@endpush
