<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'GarudaLink I Beranda')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
    {{-- <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css'rel='stylesheet' /> --}}
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    {{-- <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script> --}}

    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">

    @stack('style')
</head>

<body>
    <!-- Navbar start -->
    <nav>
        <div class="awal">
            <div class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="Logo">
            </div>
            <div class="list-navbar">
                <ul id="menu-list" class="navbar-1945">
                    <a href="/">
                        <li class="aktif">Beranda</li>
                    </a>
                    <a href="{{ url('profil') }}">
                        <li>Profil</li>
                    </a>
                    <a href="{{ url('paket') }}">
                        <li>Paket</li>
                    </a>
                </ul>
            </div>
            <div id="icon-navbar" class="icon-navbar">
                <i class="fa-solid fa-list fa-2x" style="color: #ffffff;"></i>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->

    <!-- Main content -->
    <main>
        @yield('content')
    </main>
    <!-- Main content end -->

    <!-- Footer start -->
    <footer>
        <div class="footer-content">
            <div class="footer-section about">
                <img src="{{ asset('img/logo.png') }}" class="footer-logo" alt="GarudaLink Logo">
                <p>GarudaLink - Penyedia akses layanan internet tanpa lelet</p>
                <div class="contact">
                    <span><i class="fas fa-phone"></i> +62-853-6354-0354</span>
                    <span><i class="fas fa-envelope"></i> garudalinkpku@gmail.com</span>
                </div>
                <div class="socials">
                    <a href="https://www.instagram.com/tiaraanandapurwito/"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/tiaraanandapurwito/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.instagram.com/tiaraanandapurwito/"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/tiaraanandapurwito/"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <form action="{{ route('messages.store') }}" method="post" class="contact-form">
                @csrf
                <input type="text" name="username" class="text-input contact-input" placeholder="Your username..." required>
                <input type="email" name="email" class="text-input contact-input" placeholder="Your email address...">
                <textarea name="message" class="text-input contact-input" placeholder="Your message..." rows="1"></textarea>
                <button type="submit" class="btn btn-submit"
                    style="font-weight: 500; background-color: black">Send</button>
            </form>
            <div class="footer-bottom">
                Copyright &copy; 2024 GarudaLink. All right reserved.
            </div>
    </footer>
    <!-- Footer end -->

    <!-- Leaflet and Map Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    {{-- <script src="{{ asset('assets/JS/map.js') }}"></script> --}}

    <!--Script icon navbar-->
    <script>
        AOS.init();
        const menuIconNavbar = document.getElementById("icon-navbar");
        const menuList = document.getElementById("menu-list");

        menuIconNavbar.addEventListener("click", () => {
            menuList.classList.toggle('active');
        });
    </script>

    @stack('script')
</body>

</html>
