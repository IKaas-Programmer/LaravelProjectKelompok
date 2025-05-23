@extends('layouts.index') 
@section('main')

<main>
    <div class="row">

        @foreach ($data as $d )
            
        <div class="col-md-3">
            <div class="card" style="width: 18rem; box-shadow: 2px 2px #242427;">
                <div class="card-body">
                    <h5 class="card-title">{{ $d -> commentable_type }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Type</h6>
                    <p class="card-text"> {{ $d -> comment }}</p>
                    <a href="#" class="card-link">See More</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
</main>

@endsection