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
                        @foreach ($jam as $j)
                            <th>{{ $j->type }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>

                    @if ($data_absen != null)
                        @foreach ($data_absen as $dSiswa)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $dSiswa['nama_siswa'] }}</td>
                                @foreach ($jam as $j)
                                    <td>{{ $dSiswa[$j->type] }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    @endif

                    @foreach ($datas as $dSiswa)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $dSiswa->name }}</td>
                            @foreach ($jam as $j)
                                <td>no</td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    </div>
@endsection
