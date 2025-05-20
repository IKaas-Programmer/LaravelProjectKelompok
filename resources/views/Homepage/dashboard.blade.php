@extends('layouts.index') <!-- Pastikan file layouts/app.blade.php berisi navbar -->

@section('main')
{{-- @include('layouts.navbar') --}} <!-- Navbar sudah ada di layouts/app.blade.php, tidak perlu di-include lagi -->
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <h1>Dashboard</h1>
            <hr>
            <div class="alert alert-success" role="alert">
                Selamat datang, {{ Auth::user()->name }}!
            </div>
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Statistik</h5>
                            <p class="card-text">Lihat statistik terbaru aplikasi Anda.</p>
                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Pengguna</h5>
                            <p class="card-text">Kelola data pengguna di sini.</p>
                            <a href="#" class="btn btn-primary">Kelola</a>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Pengaturan</h5>
                            <p class="card-text">Atur preferensi aplikasi Anda.</p>
                            <a href="#" class="btn btn-primary">Pengaturan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection