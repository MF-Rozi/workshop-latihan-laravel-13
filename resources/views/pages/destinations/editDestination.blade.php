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

<form action="{{ route('destinations.update', $destination->id) }}" method="post" class="form-floating" enctype="multipart/form-data">
    @csrf
    @method("put")
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Asia Heritage" name="name" value="{{ $destination->name }}" required>
        <label for="floatingInput">Nama Destinasi</label>
        @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating">
        <textarea name="description" id="" class="form-control" placeholder="Description" required>{{ $destination->description }}</textarea>
        <label for="description">Description</label>
        @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror

    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Pekanbaru" name="location" value="{{ $destination->location }}" required>
        <label for="floatingInput">Lokasi</label>
        @error('location')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating mb-3">
        <input type="number" class="form-control" id="floatingInput" placeholder="100000" name="ticket_price" value="{{ $destination->ticket_price }}" required>
        <label for="floatingInput">Harga Tiket</label>
        @error('ticket_price')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="08.00 - 17.00" name="working_hours" value="{{ $destination->working_hours }}" required>
        <label for="floatingInput">Jam Operasional</label>
        @error('working_hours')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Senin - Minggu" name="working_days" value="{{ $destination->working_days }}" required>
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
