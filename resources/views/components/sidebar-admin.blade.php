<div class="overflow-x-hidden text-white bg-dark sidebar" id="sidebar">
    <div class="py-4 sidebar-header">
        <h4>Menu</h4>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <img src="{{ asset('img/logo garuda.jpeg') }}" alt="Profile" class="rounded-circle" width="30"
                            height="30">
                        <span style="margin-left: 5px">
                            {{ auth()->user()->name }}
                        </span>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul class="list-group list-group-flush">
                            <li class="logout">
                                <a class="list-group-item logout">
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item text-danger">
                                            <i class="fa-solid fa-door-open"></i>
                                            Log Out
                                        </button>
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <ul class="px-3 nav flex-column">
        <li class="nav-item">
            <a class="nav-link position-relative {{ request()->routeIs('mediapartners.index') ? 'active' : '' }}"
                href="{{ route('mediapartners.index') }}">
                <i class="fas fa-handshake me-2"></i> Media Partner
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('maps.index') ? 'active' : '' }}"
                href="{{ route('maps.index') }}">
                <i class="fas fa-map-location me-2"></i> Maps GarudaLink
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('deskripsi profil.deskripsi') ? 'active' : '' }}"
                href="{{ route('deskripsi profil.deskripsi') }}">
                <i class="fas fa-city me-2"></i> Profil Perusahaan
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('testimoni.index') ? 'active' : '' }}"
                href="{{ route('testimoni.index') }}">
                <i class="fas fa-users me-2"></i> Testimoni
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('paket.index') ? 'active' : '' }}"
                href="{{ route('paket.index') }}">
                <i class="fas fa-wifi me-2"></i> Paket
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('contact pesan.index') ? 'active' : '' }}"
                href="{{ route('contact pesan.index') }}">
                <i class="fa-solid fa-message me-2"></i> Pesan
            </a>
        </li>
    </ul>
</div>
