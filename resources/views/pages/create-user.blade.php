@extends('master')

@section('content')
<div class="row justify-content-center">
	<div class="col-12 col-lg-8">
		<div class="d-flex justify-content-between align-items-center mb-3">
			<h2 class="mb-0">Create User</h2>
			<a href="{{ route('user.index') }}" class="btn btn-outline-secondary">Back</a>
		</div>

		@if ($errors->any())
		<div class="alert alert-danger">
			<ul class="mb-0">
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif

		<div class="card">
			<div class="card-body">
				<form action="{{ route('user.store') }}" method="POST" class="row g-3">
					@csrf

					<div class="col-12">
						<label for="name" class="form-label">Name</label>
						<input
							type="text"
							id="name"
							name="name"
							class="form-control @error('name') is-invalid @enderror"
							value="{{ old('name') }}"
							required
						>
						@error('name')
						<div class="invalid-feedback">{{ $message }}</div>
						@enderror
					</div>

					<div class="col-12">
						<label for="email" class="form-label">Email</label>
						<input
							type="email"
							id="email"
							name="email"
							class="form-control @error('email') is-invalid @enderror"
							value="{{ old('email') }}"
							required
						>
						@error('email')
						<div class="invalid-feedback">{{ $message }}</div>
						@enderror
					</div>

					<div class="col-12">
						<label for="password" class="form-label">Password</label>
						<input
							type="password"
							id="password"
							name="password"
							class="form-control @error('password') is-invalid @enderror"
							required
						>
						<div class="form-text">Minimum 8 characters.</div>
						@error('password')
						<div class="invalid-feedback">{{ $message }}</div>
						@enderror
					</div>

					<div class="col-12 d-grid d-md-flex justify-content-md-end gap-2">
						<a href="{{ route('user.index') }}" class="btn btn-light border">Cancel</a>
						<button type="submit" class="btn btn-primary">Save User</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
