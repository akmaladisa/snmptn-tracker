<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="#" class="nav-link disabled">
                    <small class="font-monospace">{{ auth()->user()->name }} | {{ auth()->user()->role }}</small>
                </a>
            </li>

            {{-- <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                <span data-feather="home"></span>
                Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('customer*') ? 'active' : '' }}" href="/customer">
                <span data-feather="user"></span>
                Customers
                </a>
            </li>
            @if( auth()->user()->role == "admin" )           
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('menu*') ? 'active' : '' }}" href="/menu">
                    <span data-feather="coffee"></span>
                    Menu
                    </a>
                </li>
            @endif
            <li class="nav-item">
                <a class="nav-link {{ Request::is('order*') ? 'active' : '' }}" href="/order">
                <span data-feather="truck"></span>
                Orders
                </a>
            </li> --}}

            @if (Auth::user()->role == "admin")    
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('siswa-ipa*') ? 'active' : '' }}" href="/siswa-ipa">
                    <span data-feather="user"></span>
                    Siswa IPA
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('siswa-ips*') ? 'active' : '' }}" href="/siswa-ips">
                    <span data-feather="user"></span>
                    Siswa IPS
                    </a>
                </li>
            @endif

        </ul>
    </div>
</nav>