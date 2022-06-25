@extends('dashboard.main')
@section('content')
    <div class="card">
        <div class="card-body pt-3">
            @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            @endif
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

                @foreach ($dataJurusan as $item)
                    <li class="nav-item mx-1">
                        <button class="nav-link" data-bs-toggle="tab"
                            data-bs-target="#profile-overview-{{ $item->kode_jurusan }}">
                            <h3>{{ $item->kode_jurusan }}</h3>
                        </button>
                    </li>
                @endforeach

            </ul>
            <div class="tab-content pt-2">

                @foreach ($dataJurusan as $item)
                    <div class="tab-pane fade profile-edit pt-3" id="profile-overview-{{ $item->kode_jurusan }}">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Kehadiran</th>
                                    <th scope="col">Informasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataSiswa->where('jurusan', $item->kode_jurusan) as $item)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <th>{{ $item->name }}</th>
                                        <th>{{ $item->kelas }}</th>
                                        <th>ok</th>
                                        <th><button href="" class="btn btn-danger btn-sm"
                                                title="Remove my profile image" id="infoSiswa"
                                                value="{{ $item->id }}"><i class="bi bi-trash"></i></button></th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                @endforeach

            </div><!-- End Bordered Tabs -->

        </div>
    </div>
@endsection
