<nav class="navbar navbar-expand-lg navigation" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ '/' }}">
            <img src="{{ url('images/logobaru.png') }}" alt="" class="img-fluid">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
            aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icofont-navigation-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarmain">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a class="nav-link" href="{{ url('/') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">Tentang</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Layanan<i class="icofont-thin-down"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown02">
                        <li><a class="dropdown-item" href="{{ url('/info') }}">Informasi Kesehatan</a></li>
                        <li><a class="dropdown-item" href="{{ url('/obat') }}">Informasi Obat-obatan</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Kontak</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/cart') }}" title="Detail Produk"><i
                            class="icofont-cart"></i></a></li>
                @auth
                    @if (Auth::user()->roles == 'admin')
                        <form action="{{ route('logout') }}" method="POST"
                            class="form-inline my-2 my-lg-0 d-none d-md-block">
                            @csrf
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Hai, {{ Auth::user()->name }}<i
                                        class="icofont-thin-down"></i></a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown02">
                                    <li>
                                        <button type="submit"
                                            class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">LogOut</button>
                                    </li>
                                    <li>
                                        <a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a>
                                    </li>
                                </ul>

                            </li>
                        </form>
                    @else
                        <form action="{{ route('logout') }}" method="POST"
                            class="form-inline my-2 my-lg-0 d-none d-md-block">
                            @csrf
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Hai, {{ Auth::user()->name }}<i
                                        class="icofont-thin-down"></i></a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown02">
                                    <li>
                                        <button type="submit"
                                            class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">LogOut</button>
                                    </li>
                                </ul>

                            </li>
                        </form>
                    @endif
                @endauth
                @guest
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Masuk</a></li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
