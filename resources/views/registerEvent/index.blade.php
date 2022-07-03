@extends('layouts.main')

@section('container')
  <div class="content" style="padding-top: 100px;" align="center">
    <div class="card" style="width: 70%;">
        <div class="card-body">
            <h2 class="card-title" style="width: 60%; padding-bottom: 7%;">{{ $title }}</h2>
            <form action="/register+event/{{ $event->slug }}" method="POST">
                @csrf

                <input type="hidden" id="user_id" name="user_id" value="{{ $user->id }}">
                <input type="hidden" id="event_id" name="event_id" value="{{ $event->id }}">
                <div class="form-floating mb-3 @error('email') is-invalid @enderror" style="width: 75%">
                    <input class="form-control" type="email" placeholder="email" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                    <label for="email">Email</label>
                @error('email')
                    <div class="invalid-feedback" style="text-align: left">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="form-floating" style="width: 75%">
                    <input class="form-control mb-3 @error('nama_pendaftar') is-invalid @enderror" type="string" placeholder="nama_pendaftar" id="nama_pendaftar" name="nama_pendaftar" value="{{ old('nama_pendaftar', $user->name) }}" required>
                    <label for="nama_pendaftar">Name</label>
                @error('nama_pendaftar')
                    <div class="invalid-feedback" style="text-align: left">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="form-floating" style="width: 75%">
                    <input class="form-control mb-3 @error('asal_instansi') is-invalid @enderror" type="string" placeholder="asal_instansi" id="asal_instansi" name="asal_instansi" value="{{ old('asal_instansi') }}" required>
                    <label for="asal_instansi">Institution</label>
                @error('asal_instansi')
                    <div class="invalid-feedback" style="text-align: left">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="form-floating" style="width: 75%">
                    <input class="form-control mb-4 @error('noTelp') is-invalid @enderror" type="string" placeholder="noTelp" id="noTelp" name="noTelp" value="{{ old('noTelp',$user->noTelp) }}" required>
                    <label for="noTelp">Contact</label>
                @error('noTelp')
                    <div class="invalid-feedback" style="text-align: left">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <button class="btn btn-primary mb-3" type="submit">Submit</button>
            </form>
        </div>
      </div>
  </div>
@endsection
