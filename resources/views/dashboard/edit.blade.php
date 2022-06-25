@extends('dashboard.main')
@section('content')

    {{-- menampilkan error validasi --}}
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('profile.update', $dataUser->id) }}" method="POST" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $dataUser->name }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $dataUser->email }}">
        </div>
        <div class="mb-3">
            <label for="absen" class="form-label">Absen</label>
            <input type="text" class="form-control" id="absen" name="absen" value="{{ $dataUser->absen }}">
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto">
        </div>
        <div class="mb-3">
            <label for="level" class="form-label">Level</label>
            <input type="text" class="form-control" id="level" value="{{ $dataUser->level }}" name="level"
                readonly>
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <input type="text" class="form-control" id="kelas" value="{{ $dataUser->id_kelas }}" name="id_kelas"
                readonly>
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" value="{{ $dataUser->id_jurusan }}"
                name="id_jurusan" readonly>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
