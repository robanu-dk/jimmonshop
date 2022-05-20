@extends('layouts.main')

@section('container')
    <div class="container" style="padding-top: 100px;" align="center">
        <div class="card" style="width: 70%;">
            <div class="text-center">
                <img src={{ asset($content['image']) }} class="card-img-top" alt="Gambar {{ $content['title'] }}" style="width: 30rem">
            </div>
            <div class="card-body text-left">
                <h5 class="card-text"><strong>{{ $content['title'] }}</strong></h5>
                <p class="card-text">{{ $content['description'] }}</p>
            </div>
            <div class=" text-left" style="padding: 10px;">
                <a href="/about+us" class="btn btn-danger">Back</a>
            </div>
        </div>
    </div>
@endsection
