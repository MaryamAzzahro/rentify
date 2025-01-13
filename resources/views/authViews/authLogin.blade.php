<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Barang | Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input, label {
            outline: none !important;
            border: none !important;
            font-size: 20px !important;
        }
    </style>
</head>
<style>
    .main {
        height: 100vh;
    }

    .h-5vh {
        height: 10vh;
    }
</style>

<body>
    <div class="vh-100 d-flex">
        <div id="left-section" class="vh-100 w-100 bg-secondary d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/logo3x.png') }}" alt="" width="480" height="180">
        </div>
        <div id="right-section" class="vh-100 w-100 d-flex justify-content-center align-items-center">
            <div class="box-wrapper w-75 p-5 rounded sora-regular" style="background-color: #F0F0F0">
                @if (session('status'))
                    <div class="alert alert-danger text-center">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="/login" method="POST">
                    @csrf
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label for="d-block"><strong>NIM</strong></label>
                        <input type="number" id="nim" name="nim" class="my-2 form-control form-control-lg"
                            placeholder="Masukan / NIM ...." required />
                    </div>

                    <div class="form-outline mb-5">
                        <label for="d-block"><strong>Kata Sandi</strong></label>
                        <input type="password" name="password" id="password" class="my-2 form-control form-control-lg"
                            placeholder="Masukan Kata Sandi ...." required />
                    </div>

                    <div class="w-100 d-flex justify-content-around align-items-center" style="margin-top: 4.5rem; margin-bottom: 2.5rem;">
                        <button type="submit" class="w-100 btn btn-primary btn-lg btn-block">Masuk</button>
                    </div>

                    <div class="text-center justify-content-around align-items-center mb-4">
                        <span class="d-block mb-1">Belum punya akun ?</span>
                        <a href="/register" class="text-accent" style="text-decoration: none; font-weight: bold">Daftar Disini</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
