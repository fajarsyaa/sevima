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

                <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Daftar
                        Jurusn</button>
                </li>

                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Tambah Jurusan</button>
                </li>

            </ul>
            <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Jurusan</th>
                                <th scope="col">Kode Jurusan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataJurusan as $jurusan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $jurusan->nama_jurusan }}</td>
                                    <td>{{ $jurusan->kode_jurusan }}</td>
                                    <td>
                                        <a href="{{ route('jurusan.show', $jurusan->id) }}" class="btn btn-danger btn-sm"
                                            title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                        <a href="#" class="btn btn-primary btn-sm" title="Remove my profile image"><i
                                                class="bi bi-pencil-square"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                    <!-- Profile Edit Form -->
                    <form method="POST" action="{{ route('jurusan.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="jurusan" class="col-md-4 col-lg-3 col-form-label">Nama Jurusan</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="nama_jurusan" type="text" class="form-control" id="jurusan">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kode" class="col-md-4 col-lg-3 col-form-label">Kode Jurusan</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="kode_jurusan" type="text" class="form-control" id="kode">
                            </div>
                        </div>


                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">

                    <!-- Settings Form -->
                    <form>

                        <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email
                                Notifications</label>
                            <div class="col-md-8 col-lg-9">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="changesMade" checked>
                                    <label class="form-check-label" for="changesMade">
                                        Changes made to your account
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="newProducts" checked>
                                    <label class="form-check-label" for="newProducts">
                                        Information on new products and services
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="proOffers">
                                    <label class="form-check-label" for="proOffers">
                                        Marketing and promo offers
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                                    <label class="form-check-label" for="securityNotify">
                                        Security alerts
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form><!-- End settings Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                    <!-- Change Password Form -->
                    <form>

                        <div class="row mb-3">
                            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current
                                Password</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="password" type="password" class="form-control" id="currentPassword">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="newpassword" type="password" class="form-control" id="newPassword">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New
                                Password</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Change Password</button>
                        </div>
                    </form><!-- End Change Password Form -->

                </div>

            </div><!-- End Bordered Tabs -->

        </div>
    </div>
@endsection
