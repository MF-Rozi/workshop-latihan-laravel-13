@extends('master')

@section('content')
<div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-4">
	<h2 class="mb-0">User Management</h2>

	<a href="{{ route('user.create') }}" class="btn btn-primary">
		+ Add User
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
		<form action="{{ route('user.index') }}" method="GET" class="row g-2">
			<div class="col-12 col-md-9">
				<input
					type="text"
					name="search"
					class="form-control"
					placeholder="Search by name or email..."
					value="{{ request('search') }}"
				>
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
					<th>Name</th>
					<th>Email</th>
					<th>Created At</th>
					<th class="text-end">Actions</th>
				</tr>
			</thead>
			<tbody>
				@forelse ($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->created_at?->format('d M Y H:i') }}</td>
					<td>
						<div class="d-flex justify-content-end gap-2">
							<a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>

							<form action="{{ route('user.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Delete this user?')">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-sm btn-danger">Delete</button>
							</form>
						</div>
					</td>
				</tr>
				@empty
				<tr>
					<td colspan="5" class="text-center py-4">No users found.</td>
				</tr>
				@endforelse
			</tbody>
		</table>
	</div>
</div>

<div class="mt-4 d-flex justify-content-center">
	{{ $users->links('pagination::bootstrap-5') }}
</div>
@endsection
