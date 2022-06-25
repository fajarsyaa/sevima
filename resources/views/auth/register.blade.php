@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            {{-- <div class="row mb-3">
                                <label for="absen"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nomor absen') }}</label>

                                <div class="col-md-6">
                                    <input id="absen" type="number" class="form-control" name="absen" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="kelas"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Kelas') }}</label>

                                <div class="col-md-6">
                                    <select name="id_kelas" id="kelas"
                                        class="form-control @error('kelas') is-invalid @enderror">
                                        <option value="">--Pilih Kelas--</option>
                                        <option value="1">10</option>
                                        <option value="2">11</option>
                                        <option value="3">12</option>
                                        <option value="4">13</option>
                                    </select>

                                    @error('kelas')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="jururusan"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Jurusan') }}</label>
                                <input type="hidden" name="level" value="siswa">
                                <div class="col-md-6">
                                    <select name="id_jurusan" id="jurusan"
                                        class="form-control @error('jurusan') is-invalid @enderror">
                                        <option value="">--Pilih jurusan--</option>
                                        <option value="1">REKAYASA PERANGKAT LUNAK</option>
                                        <option value="2">TEKNIK KOMPUTER JARINGAN</option>
                                        <option value="3">MULTIMEDIA</option>
                                        <option value="4">SIJA</option>

                                    </select>

                                    @error('jurusan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
