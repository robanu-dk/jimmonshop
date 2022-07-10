@extends('dashboard.layouts.main')

@section('content')

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="container border border-1">
        <table style="width: 100%">
            <tr>
                <td colspan="3" align="center" style="padding-bottom: 5%; padding-top: 5%">
                    <h3><strong>Foto Profile</strong></h3>
                    <div class="image">
                        <a href="{{ asset($admin->image) }}"><img src="{{ asset($admin->image) }}" class="img-circle elevation-2 mb-3 col-sm-4" alt="User Image"></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="mb-3">
                        <label for="name" class="form-label">Names</label>
                        <input style="width: 90%" type="string" class="form-control" id="name" name="name" value="{{ $admin->name }}" disabled>
                    </div>
                </td>
                <td>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input style="width: 90%" type="string" class="form-control" id="username" name="username" value="{{ $admin->username }}" disabled>
                    </div>
                </td>
                <td>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input style="width: 90%" type="email" class="form-control" id="email" name="email" value="{{ $admin->email }}" disabled>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="mb-3">
                        <label for="kontak" class="form-label">Contact</label>
                        <input style="width: 90%" type="string" class="form-control" id="kontak" name="kontak" value="{{ $admin->kontak }}" disabled>
                    </div>
                </td>
                <td>
                    <div class="mb-3">
                        <label for="jalan" class="form-label">Street</label>
                        <input style="width: 90%" type="string" class="form-control" id="jalan" name="jalan" value="{{ $admin->jalan }}" disabled>
                    </div>
                </td>
                <td>
                    <div class="mb-3">
                        <label for="kecamatan" class="form-label">Districts</label>
                        <input style="width: 90%" type="string" class="form-control" id="kecamatan" name="kecamatan" value="{{ $admin->kecamatan }}" disabled>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="mb-3">
                        <label for="daerah" class="form-label">City</label>
                        <input style="width: 90%" type="string" class="form-control" id="daerah" name="daerah" value="{{ $admin->daerah }}" disabled>
                    </div>
                </td>
                <td>
                    <div class="mb-3">
                        <label for="provinsi" class="form-label">Province</label>
                        <input style="width: 90%" type="string" class="form-control" id="provinsi" name="provinsi" value="{{ $admin->provinsi }}" disabled>
                    </div>
                </td>
                <td>
                    <div class="mb-3">
                        <label for="kodepos" class="form-label">Pos Code</label>
                        <input style="width: 90%" type="string" class="form-control" id="kodepos" name="kodepos" value="{{ $admin->kodepos }}" disabled>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center" style="padding-top: 3%; padding-bottom: 3%;">
                    <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group me-2" role="group" aria-label="First group">
                          <a class="btn btn-warning" href="/dashboard/{{ $admin->id }}/edit">
                            <i class="bi bi-pen-fill"> </i>Edit
                          </a>
                        </div>
                        <div class="input-group">
                            <form action="/dashboard" method="POST">
                                @method('delete')
                                @csrf

                                <button class="btn btn-danger" onclick="return confirm('Delete Account?')"><i class="bi bi-trash3-fill"> </i>Delete Account</button>
                            </form>
                        </div>
                      </div>
                </td>
            </tr>
        </table>

    </div>

@endsection
