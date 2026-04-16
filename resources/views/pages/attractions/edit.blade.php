@extends('master')

@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-lg-8">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="mb-0">Edit Attraction</h2>
            <a href="{{ route('attractions.index') }}" class="btn btn-outline-secondary">Back</a>
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
                <form action="{{ route('attractions.update', $attraction->id) }}" method="POST" class="row g-3">
                    @csrf
                    @method('PUT')
                    <div class="col-12">
                        <label for="destination_id" class="form-label">Destination</label>
                        <select id="destination_id" name="destination_id" class="form-control @error('destination_id') is-invalid @enderror" required>
                            <option value="">Select Destination</option>
                            @foreach ($destinations as $destination)
                            <option value="{{ $destination->id }}" {{ (old('destination_id', $attraction->destination_id) == $destination->id) ? 'selected' : '' }}>
                                {{ $destination->name }}
                            </option>
                            @endforeach
                        </select>
                        @error('destination_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $attraction->name ?? old('name') }}" required>
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="description" class="form-label">Descriptions</label>
                        <input type="text" id="description" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ $attraction->description ?? old('description') }}">
                        @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-12 d-grid d-md-flex justify-content-md-end gap-2">
                        <a href="{{ route('attractions.index') }}" class="btn btn-light border">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save Attraction</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
