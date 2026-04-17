@extends("master")

@section("content")

@if ($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('destinations.store') }}" method="post" class="form-floating" enctype="multipart/form-data">
    @csrf
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Asia Heritage" name="name" required value="{{ old('name') }}">
        <label for="floatingInput">Nama Destinasi</label>
        @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating">
        <textarea name="description" id="" class="form-control" placeholder="Description" value>{{ old('description') }}</textarea>
        <label for="description">Description</label>
        @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Pekanbaru" name="location" required value="{{ old('location') }}">
        <label for="floatingInput">Lokasi</label>
        @error('location')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating mb-3">
        <input type="number" class="form-control" id="floatingInput" placeholder="100000" name="ticket_price" required value="{{ old('ticket_price') }}">
        <label for="floatingInput">Harga Tiket</label>
        @error('ticket_price')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="08.00 - 17.00" name="working_hours" required value="{{ old('working_hours') }}">
        <label for="floatingInput">Jam Operasional</label>
        @error('working_hours')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror

    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Senin - Minggu" name="working_days" required value="{{ old('working_days') }}">
        <label for="floatingInput">Hari Operasional</label>
        @error('working_days')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-floating mb-3">
        <input type="file" class="form-control" id="floatingInput" placeholder="Image" name="image" value="{{ old('image') }}" accept=".jpg,.jpeg,.png">
        <label for="floatingInput">Gambar Destinasi</label>
        @error('image')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection
