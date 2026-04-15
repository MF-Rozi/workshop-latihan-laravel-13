@extends("master")

@section('content')
<div class="container card">

    <div class="card-body">
        <a href="{{ route('destinations.edit',$destination->id) }}" class="btn btn-primary align-self-end">Edit Destinasi</a>

        <h1>{{ $destination->name }}</h1>
        <p>{{ $destination->description }}</p>
        <p>Location: {{ $destination->location }}</p>
        <p>Working Days: {{ $destination->working_days }}</p>
        <p>Working Hours: {{ $destination->working_hours }}</p>
        <p>Ticket Price: {{ $destination->ticket_price }}</p>

    </div>
</div>
@endsection
