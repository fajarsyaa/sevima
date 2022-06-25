@extends('dashboard.main')
@section('content')
    <h3>data siswa</h3>
    @foreach ($data as $kelas)
        <a href="{{ route('absen.show', $kelas->id) }}" class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">

                <div class="card-body">
                    <h5 class="card-title">Kelas</h5>

                    <div class="d-flex align-items-center">
                        <div class="ps-3">
                            <h6>{{ $kelas->kelas }}</h6>
                        </div>
                    </div>
                </div>

            </div>
        </a>
    @endforeach
@endsection
