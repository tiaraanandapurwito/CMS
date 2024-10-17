<div class="overflow-x-hidden text-white bg-black sidebar" id="sidebar">
    <div class="py-4 sidebar-header">
        <h4>Menu</h4>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <img src="{{ auth()->user()->profile_picture ? asset('img/'. auth()->user()->profile_picture) : asset('img/kevin 3.jpg') }}"
                        alt="Profile" class="rounded-circle" width="30" height="30">
                        <span style="margin-left: 5px">
                            {{ auth()->user()->name }}
                        </span>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul class="list-group list-group-flush">
                            <li>
                                <a class="list-group-item {{ request()->routeIs('profile') ? 'active' : '' }}"
                                    href="">
                                    <i class="fa-solid fa-user"></i> {{ auth()->user()->name }}
                                </a>
                            </li>
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
            <a class="nav-link {{ request()->routeIs('Home') ? 'active' : '' }}" href="">
                <i class="fas fa-home me-2"></i> Home
            </a>
        </li>
        @if (auth()->user()->isAdmin)
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.books') ? 'active' : '' }}" href="">
                <i class="fas fa-book me-2"></i> Buku
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.superadmin') ? 'active' : '' }}" href="">
                <i class="fas fa-user-shield me-2"></i> superadmin
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.penalties') ? 'active' : '' }}" href="">
                <i class="fas fa-money-bill me-2"></i> Denda
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.borrowHistory') ? 'active' : '' }}" href="">
                <i class="fas fa-history me-2"></i> History Peminjaman
            </a>
        </li>
        @else
        <li class="nav-item">
            <a class="nav-link position-relative {{ request()->routeIs('notification') ? 'active' : '' }}"
                href="">
                <i class="fas fa-bell me-2"></i> Notifications
                {{-- @if(auth()->user()->unreadNotifications()->count() > 0)
                <span class="top-0 badge bg-danger position-absolute start-100 translate-middle rounded-pill">
                    {{ auth()->user()->unreadNotifications()->count() }}
                </span>
                @endif --}}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('search') ? 'active' : '' }}" href="">
                <i class="fas fa-search me-2"></i> Search
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('peminjaman') ? 'active' : '' }}" href="">
                <i class="fas fa-book-open me-2"></i> Peminjaman
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('pengembalian') ? 'active' : '' }}" href="">
                <i class="fas fa-undo-alt me-2"></i> Pengembalian
            </a>
        </li>
        @endif
    </ul>
</div>
