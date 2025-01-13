<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rentify | @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>


    <div class="main d-flex justify-content-between flex-column">
        <div class="bodyContent h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 bg-secondary d-lg-block container-fluid d-flex flex-column vh-100" id="navbarSupportedContent">
                    {{-- @if (Auth::user()->role_id == 1)
                    <a href="/barangs" @if (request()->route()->uri == 'barangs') class="nav-link p-3 link-active" @endif class="nav-link p-3">Barangs</a>
                    <a href="/kategori" @if (request()->route()->uri == 'kategori' || request()->route()->uri == 'add-kategori' || request()->route()->uri == 'edit-kategori/{category}') class="nav-link p-3 link-active" @endif class="nav-link p-3">Kategori</a>
                    <a href="/users" @if (request()->route()->uri == 'users' || request()->route()->uri == 'aktifasi-user') class="nav-link p-3 link-active" @endif class="nav-link p-3">Users</a>
                    <a href="/" @if (request()->route()->uri == '/') class="nav-link p-3 link-active" @endif class="nav-link p-3">List Barang</a>
                    <a href="/rental-barang" @if (request()->route()->uri == 'rental-barang') class="nav-link p-3 link-active" @endif class="nav-link p-3">Rental Barang</a>
                    <a href="/dashboard" @if (request()->route()->uri == 'dashboard') class="nav-link p-3 link-active" @endif class="nav-link p-3">Dasborad</a>
                    <a href="/logrental" @if (request()->route()->uri == 'logrental') class="nav-link p-3 link-active" @endif class="nav-link p-3">Log Rental</a>
                    <a href="/logout"class="nav-link p-3">LogOut</a>
                        @else
                    <a href="/profile" @if (request()->route()->uri == 'kategori') class="nav-link p-3 link-active" @endif class="nav-link p-3">Profile</a>
                    <a href="/logout"class="nav-link p-3">LogOut</a>
                        @endif --}}

                    <!-- Logo Section -->
                    <div class="row justify-content-center align-items-center py-5">
                        <div class="col-auto">
                            <a href="#">
                                <img src="{{ asset('images/logo.png') }}" alt="">
                            </a>
                        </div>
                    </div>

                    <!-- Menus Section -->
                    <div class="row justify-content-center align-items-center py-3 pb-5">
                        <div class="col-auto">
                            <ul class="list-unstyled">
                                <li class="nav-item">
                                    <a href="/dashboard" class="nav-link py-3 {{ Request::is('dashboard') ? 'active' : '' }}">
                                        <i data-feather="home"></i>
                                        <span class="d-block ms-2">Dashboard</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/items" class="nav-link py-3 {{ Request::is('items') ? 'active' : '' }}">
                                        <i data-feather="monitor"></i>
                                        <span class="d-block ms-2">Barang</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/users" class="nav-link py-3 {{ Request::is('users') ? 'active' : '' }}">
                                        <i data-feather="file-text"></i>
                                        <span class="d-block ms-2">Rental</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/categories" class="nav-link py-3 {{ Request::is('categories') ? 'active' : '' }}">
                                        <i data-feather="package"></i>
                                        <span class="d-block ms-2">Kategori</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Logout Section -->
                    <div class="row justify-content-center align-items-center pt-5">
                        <div class="col-auto">
                            <a id="btn-logout" href="/logout" class="ms--2 nav-link d-flex align-items-center">
                                <i data-feather="log-out"></i>
                                <span class="d-block ms-1">Logout</span>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="container content col-lg-10 py-5 px-4">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script>
        feather.replace();
    </script>
</body>

</html>
