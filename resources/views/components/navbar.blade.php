<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>

  <!--Bootstrap links-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
  <!--Bootstrap links-->

  <!--Font link-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
  <!--this is icons link-->
  @stack('style')
</head>

<body>
    <!--Navbar start-->
    <nav>
      <div class="awal">
        <div class="logo">
          <img src="{{ asset('img/logo.png') }}" alt="Logo">
        </div>
        <div class="list-navbar">
          <ul id="menu-list" class="navbar-1945">
            <a href="{{ route('beranda') }}">
              <li  class="{{ request()->routeIs('beranda') ? 'aktif' : '' }}">BERANDA</li>
            </a>
            <a href="{{ route('profil') }}">
              <li class="{{ request()->routeIs('profil') ? 'aktif' : '' }}">PROFIL</li>
            </a>
            <a href="{{ route('paket') }}">
              <li class="{{ request()->routeIs('paket') ? 'aktif' : '' }}">PAKET</li>
            </a>
          </ul>
        </div>
        <div id="icon-navbar" class="icon-navbar">
          <i class="fa-solid fa-list fa-2x" style="color: #ffffff;"></i>
        </div>
      </div>
    </nav>
    <!--navbar end-->
</body>
</html>
