@extends('dashboard.layouts.main')

@section('content')

    <div class="container border border-1">
        <form method="POST" action="/dashboard" enctype="multipart/form-data">
            @method('put')
            @csrf

            <table style="width: 100%">
                <tr>
                    <td colspan="3" align="center" style="padding-bottom: 5%; padding-top: 5%">
                        <label for="image" class="form-label"><h3>Foto Profile</h3></label>
                        <input type="hidden" name="oldImage" value="{{ $admin->image }}">
                        @if ($admin->image)
                            <img src="{{ asset($admin->image) }}" class="img-preview img-fluid img-circle elevation-2 mb-3 col-sm-4 d-block">
                        @else
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                        @endif
                        <input style="width: 50%" type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" onchange="previewImage()">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input style="width: 90%" type="string" class="form-control" id="name" name="name" value="{{ old('name', $admin->name) }}" required>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input style="width: 90%" type="string" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username', $admin->username) }}" required>
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input style="width: 90%" type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $admin->email) }}" required>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="mb-3">
                            <label for="kontak" class="form-label">Contact</label>
                            <input style="width: 90%" type="string" class="form-control" id="kontak" name="kontak" value="{{ old('kontak', $admin->kontak)}}" required>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <label for="jalan" class="form-label">Street</label>
                            <input style="width: 90%" type="string" class="form-control" id="jalan" name="jalan" value="{{ old('jalan', $admin->jalan) }}" required>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <label for="kecamatan" class="form-label">Districts</label>
                            <input style="width: 90%" type="string" class="form-control" id="kecamatan" name="kecamatan" value="{{ old('kecamatan', $admin->kecamatan) }}" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="mb-3">
                            <label for="daerah" class="form-label">City</label>
                            <input style="width: 90%" type="string" class="form-control" id="daerah" name="daerah" value="{{ old('daerah', $admin->daerah)}}" required>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <label for="provinsi" class="form-label">Province</label>
                            <input style="width: 90%" type="string" class="form-control" id="provinsi" name="provinsi" value="{{ old('provinsi', $admin->provinsi) }}" required>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <label for="kodepos" class="form-label">Pos Code</label>
                            <input style="width: 90%" type="string" class="form-control" id="kodepos" name="kodepos" value="{{ old('kodepos', $admin->kodepos) }}" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center" style="padding-top: 3%; padding-bottom: 3%;">
                        <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group me-2" role="group" aria-label="First group">
                              <button class="btn btn-primary" type="submit">
                                <i class="bi bi-save-fill"> </i>Save
                              </button>
                            </div>
                            <div class="input-group">
                                <a class="btn btn-danger" href="/dashboard">
                                    <i class="bi bi-x-circle"> </i>Cancel
                                </a>
                            </div>
                          </div>
                    </td>
                </tr>
            </table>

        </form>

    </div>

@endsection
