@extends('dashboard.main')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Daftar Hadir</h5>

            <!-- Table with stripped rows -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dSiswa)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $dSiswa->name }}</td>
                            <td>{{ $dSiswa->kelas }}</td>
                            {{-- <td>{{ $dSiswa-> }}</td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- End Table with stripped rows -->

        </div>
    </div>
@endsection
