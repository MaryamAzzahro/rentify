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
                <div class="sidebar position-fixed col-lg-2 bg-secondary d-lg-block container-fluid d-flex flex-column vh-100"
                    id="navbarSupportedContent">
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
                                    <a href="/user-items"
                                        class="nav-link py-3 {{ Request::is('user-items') ? 'active' : '' }}">
                                        <i data-feather="home"></i>
                                        <span class="d-block ms-2">Dashboard</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/user-item/status" class="nav-link py-3 {{ Request::is('user-item/status') ? 'active' : '' }}">
                                        <i data-feather="file-text"></i>
                                        <span class="d-block ms-2">Status Rental</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Logout Section -->
                    <div class="row justify-content-center align-items-center" style="margin-top: 7rem;">
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
