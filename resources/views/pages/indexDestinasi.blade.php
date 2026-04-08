@extends("master")


@section('content')
<div class="container">
    <table class="table table-striped-columns">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Location</th>
                <th>Price</th>
                <th>Working Hours</th>
                <th>Working Days</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($destinations as $d)
            <tr>
                <td><a href="detaildestinasi/{{ $d->id }}">{{ $d->id }}</a></td>

                <td>{{ $d->name }}</td>
                <td>{{ $d->description }}</td>
                <td>{{ $d->location }}</td>
                <td>{{ $d->ticket_price }}</td>
                <td>{{ $d->working_hours }}</td>
                <td>{{ $d->working_days }}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>

@endsection
