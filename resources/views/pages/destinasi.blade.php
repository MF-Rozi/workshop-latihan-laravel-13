@extends("master")

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Detail Destinasi</h4>
                </div>

                <div class="card-body">
                    <h5 class="card-title mb-3">{{ $destinasi['nama'] }}</h5>

                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item d-flex justify-content-between">
                            <span class="fw-semibold">Harga</span>
                            <span>Rp {{ number_format($destinasi['harga'], 0, ',', '.') }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span class="fw-semibold">Lokasi</span>
                            <span>{{ $destinasi['lokasi'] }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span class="fw-semibold">Durasi</span>
                            <span>{{ $destinasi['durasi'] }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span class="fw-semibold">Transportasi</span>
                            <span>{{ $destinasi['transportasi'] }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span class="fw-semibold">Hotel</span>
                            <span>{{ $destinasi['hotel'] }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span class="fw-semibold">Rating</span>
                            <span>{{ $destinasi['rating'] }}/5</span>
                        </li>
                    </ul>

                    <h6 class="mb-3">Fasilitas</h6>
                    <div class="d-flex flex-wrap gap-2">
                        @foreach ($destinasi['fasilitas'] as $fasilitas)
                        <span class="badge bg-success-subtle text-success-emphasis border border-success-subtle px-3 py-2">{{ $fasilitas }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
