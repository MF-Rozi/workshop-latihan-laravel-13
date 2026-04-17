@extends('master')

@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-lg-8">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="mb-0">Create Review</h2>
            <a href="{{ route('reviews.index') }}" class="btn btn-outline-secondary">Back</a>
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
                <form action="{{ route('reviews.store') }}" method="POST" class="row g-3">
                    @csrf
                    <div class="col-12">
                        <label for="attraction_id" class="form-label">Attraction</label>
                        <select id="attraction_id" name="attraction_id" class="form-control @error('attraction_id') is-invalid @enderror" required>
                            <option value="">Select Attraction</option>
                            @foreach ($attractions as $attraction)
                            <option value="{{ $attraction->id }}" {{ old('attraction_id') == $attraction->id ? 'selected' : '' }}>
                                {{ $attraction->name }}
                            </option>
                            @endforeach
                        </select>
                        @error('attraction_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="reviewer_name" class="form-label">Name</label>
                        <input type="text" id="reviewer_name" name="reviewer_name" class="form-control @error('reviewer_name') is-invalid @enderror" value="{{ old('reviewer_name') }}" required>
                        @error('reviewer_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="comment" class="form-label">Comment</label>
                        <textarea id="comment" name="comment" class="form-control @error('comment') is-invalid @enderror" rows="3">{{ old('comment') }}</textarea>
                        @error('comment')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-12 d-grid d-md-flex justify-content-md-end gap-2">
                        <a href="{{ route('reviews.index') }}" class="btn btn-light border">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save Review</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
