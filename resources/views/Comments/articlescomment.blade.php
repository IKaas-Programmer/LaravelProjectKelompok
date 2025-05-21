@extends('layouts.index')
@section('main')

    <main>
        <div class="row gap-3">
            @if (isset($data) && count($data) > 0)
                @foreach ($data as $d)
                    <div class="col-md-3">
                        <div class="card" style="width: 18rem; box-shadow: 2px 2px #242427;">
                            <div class="card-body">
                                <h5 class="card-title">{{ optional($d->articles)->title ?? 'No Title' }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $d->article_id }}</h6>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $d->commentable_type }}</h6>
                                <p class="card-text">{{ $d->comment }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12">
                    <p>No comments found.</p>
                </div>
            @endif
        </div>
    </main>
@endsection
