@extends('dashboard.main')
@section('content')
    <div class="animated fadeIn mb-5">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
                <button type="button" class="close btn-dark" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"> X </span>
                </button>
            </div>
        @endif
    </div>
    <div class="row">

        <div class="col-lg-6">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Split Buttons with Icon</h6>
                </div>
                <div class="card-body">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <th>Nama </th>
                                            <td>{{ Auth::user()->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email </th>
                                            <td>{{ Auth::user()->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Level </th>
                                            <td>{{ Auth::user()->level }}</td>
                                        </tr>
                                        <tr>
                                            <th>Absen </th>
                                            <td>{{ Auth::user()->absen }}</td>
                                        </tr>
                                        <tr>
                                            <th>Kelas </th>
                                            <td>{{ Auth::user()->id_kelas }}</td>
                                        </tr>
                                        <tr>
                                            <th>Jurusan </th>
                                            <td>{{ Auth::user()->id_jurusan }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="{{ route('profile.edit', Auth::user()->id) }}"
                                    class="btn btn-primary btn-icon-split">
                                    <span class="text">Edit Profile</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-6">

            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"></h6>
                </div>
                <div class="card-body">
                    <img src="{{ asset('dashboard/img/undraw_profile_1.svg') }}" alt="" height="400"
                        width="400">
                </div>
            </div>

        </div>



    </div>
@endsection
