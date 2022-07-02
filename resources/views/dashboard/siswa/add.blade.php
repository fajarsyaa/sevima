@extends('dashboard.main')
@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Form Input Data Siswa</h5>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>

                <!-- General Form Elements -->
                <form method="POST" action="{{ route('siswa.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="agama">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Tempat lahir</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tempat_lahir">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Tanggal lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tanggal_lahir">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Tahun masuk</label>
                        <div class="col-sm-10">
                            <input type="text" name="tahun_masuk" class="form-control" id="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">No hp</label>
                        <div class="col-sm-10">
                            <input type="number" name="phone" class="form-control" id="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Nis</label>
                        <div class="col-sm-10">
                            <input type="number" name="nis" class="form-control" id="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputDate" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="jenis_kelamin" id="floatingSelect"
                                aria-label="Floating label select example">
                                <option selected>Open this select menu</option>
                                <option value="laki-laki">laki-laki</option>
                                <option value="perempuan">perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputDate" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="jurusan" id="floatingSelect"
                                aria-label="Floating label select example">
                                <option selected>Open this select menu</option>
                                @foreach ($jur as $san)
                                    <option value="{{ $san->id }}">{{ $san->nama_jurusan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label">alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" style="height: 100px" name="alamat"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Submit Button</label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit Form</button>
                        </div>
                    </div>

                </form><!-- End General Form Elements -->

            </div>

        </div>
    @endsection
