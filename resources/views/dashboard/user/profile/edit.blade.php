@extends('dashboard.layouts.main')

@section('content')

    <div class="container border border-1">
        <form method="POST" action="/dashboard/my/profile" enctype="multipart/form-data">
            @method('put')
            @csrf

            <table style="width: 100%">
                <tr>
                    <td colspan="3" align="center" style="padding-bottom: 5%; padding-top: 5%">
                        <label for="image" class="form-label"><h3>Foto Profile</h3></label>
                        <input type="hidden" name="oldImage" value="{{ $user->image }}">
                        @if ($user->image)
                            <img src="{{ asset($user->image) }}" class="img-preview img-fluid img-circle elevation-2 mb-3 col-sm-4 d-block">
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
                            <input style="width: 90%" type="string" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input style="width: 90%" type="string" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username', $user->username) }}" required>
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <label for="gender_id" class="form-label">Gender</label> <br>
                            <select class="form-select" name="gender_id" id="gender_id">
                                @foreach ($genders as $gender)
                                    @if (old('gender_id',$gender->id) == $gender->id)
                                        <option value={{ $gender->id }} selected>{{ $gender->name }}</option>
                                    @else
                                        <option value={{ $gender->id }}>{{ $gender->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input style="width: 90%" type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <label for="noTelp" class="form-label">Contact</label>
                            <input style="width: 90%" type="string" class="form-control" id="noTelp" name="noTelp" value="{{ old('noTelp', $user->noTelp)}}" required>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <label for="tglLahir" class="form-label">Birth</label>
                            <input type="date" class="form-control" id="tglLahir" name="tglLahir" value="{{ old('tglLahir', $user->tglLahir) }}" required>
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
                                <a class="btn btn-danger" href="/dashboard/my/profile">
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
