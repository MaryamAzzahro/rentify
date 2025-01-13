@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<div class="container">
    <h1 class="poppins-bold">Dashboard</h1>
    <p>Rekap peminjaman dan barang</p>

    <div class="row mt-5">
        <!-- Kotak untuk jumlah User -->
        <div class="col-md-4">
            <div class="card text-white text-center bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <span class="mt-3">Jumlah Peminjam : </span>
                    <h2 class="card-title py-5">{{ $userCount }}</h2>
                    <p class="card-text">Orang</p>
                </div>
            </div>
        </div>

        <!-- Kotak untuk jumlah Barang -->
        <div class="col-md-4">
            <div class="card text-white text-center bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <span class="mt-3">Jumlah Barang : </span>
                    <h2 class="card-title py-5">{{ $itemCount }}</h2>
                    <p class="card-text">Pcs</p>
                </div>
            </div>
        </div>

        <!-- Kotak untuk jumlah Kategori -->
        <div class="col-md-4">
            <div class="card text-white text-center bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <span class="mt-3">Jumlah Kategori : </span>
                    <h2 class="card-title py-5">{{ $categoryCount }}</h2>
                    <p class="card-text">Kategori</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
