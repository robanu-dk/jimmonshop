@extends('layouts.main')

@section('container')
    <div class="container" style="padding-top: 100px; padding-bottom: 100px;" align="center">

        <div class="card" style="max-width: 600px;">

            @if (session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @elseif (session()->has('loginError'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            <div class="card-body" align="center">
                <main class="form-signin">
                    <form action='/sign+in' method="POST">
                        @csrf
                      <h1 class="h3 mb-3 fw-normal title-text text-center" style="font-size: 36px; padding-bottom: 80px;"><strong>{{ $title }}</strong></h1>
                      <div class="form-floating" style="padding-bottom: 30px">
                        <input type="email" name="email" class="form-control rounded @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback" style="text-align: left">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="form-floating" style="padding-bottom: 50px">
                        <input type="password" name="password" class="form-control rounded" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                      </div>
                      <div style="padding-bottom: 10px;">
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                      </div>
                    </form>
                    <small>Don't have account? <a href="/registration">Create account</a></small>
                </main>
            </div>
        </div>

    </div>
@endsection
