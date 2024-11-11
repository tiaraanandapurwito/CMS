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
    <div class="container-fluid py-5">
        <div class="container">
            <!-- Header -->
            <div class="text-center mb-5">
                <h1 class="display-4 fw-bold" data-aos="fade-right">Jaringan GarudaLink di Pekanbaru</h1>
            </div>

            <!-- Main Content -->
            <div class="row g-4">
                <!-- Map Column -->
                <div class="col-lg-8">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white">
                            <h5 class="card-title mb-0">
                                <i class="fas fa-map-marker-alt me-2"></i>
                                Peta Jaringan
                            </h5>
                        </div>
                        <div class="card-body">
                            <div id="map" style="height: 500px;" class="rounded"></div>
                        </div>
                    </div>
                </div>

                <!-- Legend & Form Column -->
                <div class="col-lg-4">
                    <!-- Legend Card -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white border-bottom border-2">
                            <h5 class="card-title mb-0 d-flex align-items-center">
                                <i class="fas fa-info-circle me-2 text-primary"></i>
                                Keterangan Titik Jaringan
                            </h5>
                        </div>
                        <div class="card-body">
                            <!-- Tiang Terpasang -->
                            <div class="legend-item position-relative mb-4 ps-5 py-2">
                                <div class="legend-marker bg-success"></div>
                                <div class="legend-content">
                                    <h6 class="fw-bold mb-1">Tiang Jaringan Terpasang</h6>
                                    <p class="text-muted mb-0 small">Tiang yang sudah aktif dan memberikan layanan</p>
                                </div>
                            </div>

                            <!-- Tiang Perencanaan -->
                            <div class="legend-item position-relative mb-4 ps-5 py-2">
                                <div class="legend-marker bg-primary"></div>
                                <div class="legend-content">
                                    <h6 class="fw-bold mb-1">Tiang Perencanaan</h6>
                                    <p class="text-muted mb-0 small">Tiang yang sedang dalam perencanaan pemasangan</p>
                                </div>
                            </div>

                            <!-- Tidak Bisa Dipasang -->
                            <div class="legend-item position-relative ps-5 py-2">
                                <div class="legend-marker bg-danger"></div>
                                <div class="legend-content">
                                    <h6 class="fw-bold mb-1">Tidak Bisa Dipasang</h6>
                                    <p class="text-muted mb-0 small">Tiang yang tidak dapat dipasang</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form Card -->
                    <div class="card shadow-sm">
                        <div class="card-header bg-white">
                            <h5 class="card-title mb-0">
                                <i class="fas fa-ruler me-2"></i>
                                Cek Jarak ke Lokasi
                            </h5>
                        </div>
                        <div class="card-body">
                            <form id="checkRadiusForm">
                                @csrf
                                <div class="mb-3">
                                    <label for="poleName" class="form-label">Nama Tiang</label>
                                    <select id="poleName" name="pole_name" class="form-select">
                                        <option value="">Pilih Tiang</option>
                                        @foreach ($locations as $location)
                                            <option value="{{ $location->name }}">{{ $location->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="homeLatitude" class="form-label">Latitude Rumah</label>
                                    <input type="text" class="form-control" id="homeLatitude" name="latitude"
                                        placeholder="Contoh: -0.123456">
                                </div>
                                <div class="mb-3">
                                    <label for="homeLongitude" class="form-label">Longitude Rumah</label>
                                    <input type="text" class="form-control" id="homeLongitude" name="longitude"
                                        placeholder="Contoh: 101.123456">
                                </div>
                                <button type="button" class="btn btn-primary w-100" onclick="checkDistance()">
                                    <i class="fas fa-search me-2"></i>Cek Jarak
                                </button>
                            </form>
                            <div id="resultMessage" class="alert mt-3" style="display: none;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Maps end -->
@endsection

@push('style')
    <link href="{{ asset('css/beranda.css') }}?v=1.0" rel="stylesheet">
    <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
    <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css'
        rel='stylesheet' />
    <style>
        .legend-item {
            transition: all 0.3s ease;
            border-radius: 8px;
            overflow: hidden;
        }

        .legend-item:hover {
            background-color: rgba(0, 0, 0, 0.03);
            transform: translateX(5px);
        }

        .legend-marker {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            width: 16px;
            height: 16px;
            border-radius: 50%;
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.8),
                0 0 0 4px rgba(0, 0, 0, 0.1);
            animation: pulse 2s infinite;
        }

        .legend-content {
            position: relative;
        }

        .legend-content h6 {
            color: #2c3e50;
            font-size: 0.95rem;
            margin-bottom: 0.25rem;
        }

        .legend-content p {
            color: #6c757d;
            line-height: 1.4;
        }

        .card-header {
            background: linear-gradient(to right, #ffffff, #f8f9fa);
            border-bottom: 2px solid #e9ecef;
        }

        .card-header .card-title {
            font-size: 1.1rem;
            color: #2c3e50;
        }

        .card-header .fas {
            font-size: 1.2rem;
        }

        /* Animasi pulse untuk marker */
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.1),
                    0 0 0 3px rgba(255, 255, 255, 0.8),
                    0 0 0 4px rgba(0, 0, 0, 0.1);
            }

            70% {
                box-shadow: 0 0 0 6px rgba(0, 0, 0, 0),
                    0 0 0 3px rgba(255, 255, 255, 0.8),
                    0 0 0 4px rgba(0, 0, 0, 0.1);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(0, 0, 0, 0),
                    0 0 0 3px rgba(255, 255, 255, 0.8),
                    0 0 0 4px rgba(0, 0, 0, 0.1);
            }
        }

        /* Hover effect untuk card */
        .card {
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1) !important;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .legend-item {
                padding-left: 3.5rem !important;
            }

            .legend-marker {
                left: 8px;
            }

            .card-header .card-title {
                font-size: 1rem;
            }
        }

        .card {
            border: none;
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-2px);
        }

        .legend-dot {
            box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.8);
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, .25);
        }

        .btn-primary {
            transition: all 0.2s;
        }

        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
    </style>
@endpush

@push('script')
    <script>
        // Initialize map
        var map = L.map('map', {
            fullscreenControl: true
        }).setView([0.4783470, 101.3799990], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(map);

        // Data titik lokasi dari server
        var locations = @json($locations);
        var locationMarkers = {};

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
                    return 'gray';
            }
        }

        // Add markers to map
        locations.forEach(function(location) {
            var color = getMarkerColor(location.status);

            // Create a custom icon with the color
            var markerIcon = L.divIcon({
                className: 'custom-marker',
                html: '<div style="background-color:' + color +
                    '; width: 20px; height: 20px; border-radius: 50%;"></div>',
                iconSize: [20, 20]
            });

            // Place marker on map and save the coordinates
            var marker = L.marker([location.latitude, location.longitude], {
                    icon: markerIcon
                })
                .addTo(map)
                .bindPopup('<strong>' + location.name + '</strong><br>Status: ' + location.status);

            locationMarkers[location.name] = marker.getLatLng(); // Save coordinates by name
        });

        // Check distance function
        function checkDistance() {
            var poleName = document.getElementById('poleName').value;
            var homeLatitude = parseFloat(document.getElementById('homeLatitude').value);
            var homeLongitude = parseFloat(document.getElementById('homeLongitude').value);

            if (poleName && !isNaN(homeLatitude) && !isNaN(homeLongitude)) {
                var poleLocation = locationMarkers[poleName];
                if (poleLocation) {
                    var homeLocation = L.latLng(homeLatitude, homeLongitude);
                    var distance = homeLocation.distanceTo(poleLocation); // Calculate distance in meters

                    var resultMessage = document.getElementById('resultMessage');
                    resultMessage.style.display = 'block';
                    if (distance <= 300) {
                        resultMessage.className = 'alert alert-success';
                        resultMessage.innerHTML =
                            `Rumah Anda berada dalam radius 300m dari tiang <strong>${poleName}</strong>.`;
                    } else {
                        resultMessage.className = 'alert alert-warning';
                        resultMessage.innerHTML =
                            `Rumah Anda berada di luar radius 300m dari tiang <strong>${poleName}</strong>.`;
                    }
                } else {
                    alert('Lokasi tiang yang dipilih tidak tersedia di peta.');
                }
            } else {
                alert('Pastikan semua data telah diisi dengan benar.');
            }
        }
    </script>

    <style>
        .custom-marker {
            border: 2px solid #ffffff;
            /* Optional: add border to markers */
        }
    </style>
@endpush
