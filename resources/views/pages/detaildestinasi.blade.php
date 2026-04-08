@extends("master")

@section('content')
<div class="container">
    <h1>{{ $destination->name }}</h1>
    <p>{{ $destination->description }}</p>
    <p>Location: {{ $destination->location }}</p>
    <p>Working Days: {{ $destination->working_days }}</p>
    <p>Working Hours: {{ $destination->working_hours }}</p>
    <p>Ticket Price: {{ $destination->ticket_price }}</p>
</div>
@endsection
