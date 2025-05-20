@section('main')
@extends('layouts.index')

<main class="container mt-5">
    <h1>Tentang Project Ini</h1>
    <p>
        Website ini dibuat sebagai proyek bersama oleh dua orang pengembang yang memiliki semangat belajar dan berkolaborasi dalam dunia web development.
    </p>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Adam Farhan Darmawan</h5>
                    <h5 class="card-NIM"> NIM: 2355201001</h5>
                    <p class="card-text">Mahasiswa Informatika yang suka mencoba hal baru.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Komang Aldy Satria Wiguna</h5>
                    <h5 class="card-NIM"> NIM: 2355201015</h5>
                    <p class="card-text">Belajar membuat tampilan website yang menarik dan responsif.</p>
                </div>
            </div>
        </div>
    </div>
    <p class="mt-4">
        Kami berharap website ini dapat memberikan manfaat dan menjadi portofolio pembelajaran kami.
    </p>
</main>

@endsection