@extends('dashboard.main')
@section('content')
    <h3>data siswa</h3>
    @foreach ($data as $jrs)
        <a href="{{ route('absen.edit', $kls->kelas) }}" class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">

                <div class="card-body">
                    <h5 class="card-title">{{ $jrs->kode_jurusan }} <span> | {{ $kls->kelas }} </span></h5>

                    <div class="d-flex align-items-center">
                        <div class="ps-3">

                        </div>
                    </div>
                </div>

            </div>
        </a>
    @endforeach
@endsection
