@extends("master")


@section('content')

<div class="container">

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="d-flex justify-content-between mb-3">
        <h2>List of Destinations</h2>
        <form action="{{ route('destinations.index') }}" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>

        </form>
        <a class="btn btn-primary" href="/destinations/create">Add Destination</a>

    </div>
    <div class="mt-3 d-flex justify-content-center">
        {{ $destinations->links('pagination::bootstrap-5') }}
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
                <td><a href="{{ route('destinations.show', $d->id) }}">{{ $d->id }}</a></td>

                <td>{{ $d->name }}</td>
                <td>{{ $d->description }}</td>
                <td>{{ $d->location }}</td>
                <td>{{ $d->ticket_price }}</td>
                <td>{{ $d->working_hours }}</td>
                <td>{{ $d->working_days }}</td>
                <td>
                    <a href="{{ route('destinations.edit', $d->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('destinations.destroy', $d->id) }}" method="post" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete {{ $d->name }}?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
    <div class="mt-3 d-flex justify-content-center">
        {{ $destinations->links('pagination::bootstrap-5') }}
    </div>

</div>

@endsection

@push('styles')
<style>
    .pagination {
        --bs-pagination-padding-x: 0.5rem;
        --bs-pagination-padding-y: 0.25rem;
        --bs-pagination-font-size: 0.875rem;
    }

</style>
@endpush

@push('scripts')
<script>
    class alert {
        constructor(message) {
            this.message = message;
        }

        show() {
            alert(this.message);
        }
    }
    let alertElement = document.querySelector('.alert');
    if (alertElement) {
        setTimeout(() => {
            alertElement.style.transition = "opacity 3s ease-out";
            alertElement.style.opacity = "0";
            setTimeout(() => {
                alertElement.remove();
            }, 3000);
        })
    }

</script>

@endpush
