@extends('master')

@section('content')

<div class="container card">
    <div class="card-body">
        <h5 class="card-title">{{ $attraction->name }}</h5>
        <p class="card-text">Description: {{ $attraction->description ?? 'No description available.' }}</p>
    </div>
</div>


@endsection
