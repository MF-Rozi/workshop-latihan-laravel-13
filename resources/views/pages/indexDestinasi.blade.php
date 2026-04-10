@extends("master")


@section('content')

<div class="container">

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="d-flex justify-content-end mb-3">
        <a class="btn btn-primary" href="/destinations/create">Add Destination</a>

    </div>

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
                <th>Actions</th>
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
                <td>
                    <a href="/destinations/{{ $d->id }}/edit" class="btn btn-warning">Edit</a>
                    <form action="/destination/{{ $d->id }}" method="post" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete {{ $d->name }}?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>

@endsection
