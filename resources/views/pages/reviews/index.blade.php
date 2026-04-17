@extends('master')

@section('content')
<div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-4">
    <h2 class="mb-0">Review Management</h2>

    <a href="{{ route('reviews.create') }}" class="btn btn-primary">
        + Add Review
    </a>
</div>

@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="card mb-4">
    <div class="card-body">
        <form action="{{ route('reviews.index') }}" method="GET" class="row g-2">
            <div class="col-12 col-md-9">
                <input type="text" name="search" class="form-control" placeholder="Search by name..." value="{{ request('search') }}">
            </div>
            <div class="col-12 col-md-3 d-grid">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-body table-responsive">
        <table class="table table-striped table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Attraction</th>
                    <th>Reviewer</th>
                    <th>Comment</th>
                    <th>Created At</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($reviews as $review)
                <tr>
                    <td>{{ $review->id }}</td>
                    <td>{{ $review->attraction->name }}</td>
                    <td>{{ $review->reviewer_name }}</td>
                    <td>{{ $review->comment }}</td>
                    <td>{{ $review->created_at?->format('d M Y H:i') }}</td>
                    <td>
                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('reviews.show', $review->id) }}" class="btn btn-sm btn-info">Show</a>
                            <a href="{{ route('reviews.edit', $review->id) }}" class="btn btn-sm btn-warning">Edit</a>

                            <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" onsubmit="return confirm('Delete this review?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-4">No reviews found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<div class="mt-4 d-flex justify-content-center">
    {{ $reviews->links('pagination::bootstrap-5') }}
</div>
@endsection
