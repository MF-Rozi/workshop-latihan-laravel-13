@extends('master')

@section('content')

<div class="container card">
    <div class="card-body">
        <h5 class="card-title">{{ $review->reviewer_name }}</h5>
        <p class="card-text">Attraction: {{ $review->attraction->name }}</p>
        <p class="card-text">Comment: {{ $review->comment ?? 'No comment available.' }}</p>
    </div>
</div>


@endsection
