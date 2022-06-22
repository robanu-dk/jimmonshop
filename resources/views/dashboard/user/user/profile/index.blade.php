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
                        <a href="{{ asset($user->image) }}"><img src="{{ asset($user->image) }}" class="img-circle elevation-2 mb-3 col-sm-4" alt="User Image"></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input style="width: 90%" type="string" class="form-control" id="name" name="name" value="{{ $user->name }}" disabled>
                    </div>
                </td>
                <td>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input style="width: 90%" type="string" class="form-control" id="username" name="username" value="{{ $user->username }}" disabled>
                    </div>
                </td>
                <td>
                    <div class="mb-3">
                        <label for="gender_id" class="form-label">Gender</label>
                        <input style="width: 90%" type="string" class="form-control" id="gender_id" name="gender_id" value="{{ $user->gender->name }}" disabled>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input style="width: 90%" type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" disabled>
                    </div>
                </td>
                <td>
                    <div class="mb-3">
                        <label for="noTelp" class="form-label">Contact</label>
                        <input style="width: 90%" type="string" class="form-control" id="noTelp" name="noTelp" value="{{ $user->noTelp }}" disabled>
                    </div>
                </td>
                <td>
                    <div class="mb-3">
                        <label for="tglLahir" class="form-label">Birth</label>
                        <input style="width: 90%" type="string" class="form-control" id="tglLahir" name="tglLahir" value="{{ $user->tglLahir }}" disabled>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center" style="padding-top: 3%; padding-bottom: 3%;">
                    <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group me-2" role="group" aria-label="First group">
                          <a class="btn btn-warning" href="/dashboard/my/profile/{{ $user->id }}/edit">
                            <i class="bi bi-pen-fill"> </i>Edit
                          </a>
                        </div>
                        <div class="input-group">
                            <form action="/dashboard/my/profile" method="POST">
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
