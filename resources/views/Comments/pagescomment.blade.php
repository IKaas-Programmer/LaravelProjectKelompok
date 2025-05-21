{{-- resources/views/Comments/pagescomment.blade.php --}}
@extends('layouts.index')

@section('main')
    @if ($data->isEmpty())
        <div class="alert alert-info">
            Tidak ada data komentar untuk halaman ini.
        </div>
    @else
        <h1>Comments for Pages</h1>
        <hr class="mb-4" style="border: none; height: 2px; background-color: #007bff;">
        <div class="row">
            @foreach ($data as $d)
                <div class="col-md-3 mb-4">
                    <div class="card" style="width: 18rem; box-shadow: 2px 2px #242427;">
                        <div class="card-body">
                            <p class="card-text">{{ $d->comment }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
