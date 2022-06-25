@extends('dashboard.main')
@section('content')
    <div class="">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <h3>jika izin isi form</h3>
    <form action="{{ route('absen.update', $data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="foto" class="form-label">Bukti Foto</label>
            <input type="file" class="form-control" id="foto" aria-describedby="emailHelp" name="foto">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
