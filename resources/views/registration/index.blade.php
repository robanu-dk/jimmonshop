@extends('layouts.main')

@section('container')
    <div class="container" style="padding-top: 100px; padding-bottom: 100px;" align="center">

        <div class="card" style="max-width: 800px;">
            <div class="card-body" align="center">
                <main class="form-regist">
                    <form action="/registration" method="POST">
                        @csrf
                      <h1 class="h3 mb-3 fw-normal title-text text-center" style="font-size: 36px; padding-bottom: 80px;"><strong>{{ $title }}</strong></h1>
                      <div class="form-floating" style="padding-bottom: 30px">
                        <input type="text" class="form-control rounded @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" required value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                          <div class="invalid-feedback" style="text-align: left">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                      <div class="form-floating" style="padding-bottom: 30px">
                        <input type="text" class="form-control rounded @error('username') is-invalid @enderror" name="username" id="username" placeholder="username" required value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                          <div class="invalid-feedback" style="text-align: left">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                      <div class="form-floating" style="padding-bottom: 30px">
                        <input type="email" class="form-control rounded @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                          <div class="invalid-feedback" style="text-align: left">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                      <div class="form-floating" style="padding-bottom: 50px">
                        <input type="password" class="form-control rounded @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        @error('password')
                          <div class="invalid-feedback" style="text-align: left">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                      <div style="padding-bottom: 10px">
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                      </div>
                    </form>
                    <small>Have account? <a href="/sign+in">Sign In</a></small>
                </main>
            </div>
        </div>

    </div>
@endsection
