@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row" style="padding-top: 100px; width: 900px;">
            @foreach ($contents as $content)
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h3>{{ $content['title'] }}</h3>
                        </div>
                        <div class="image" style="text-align: center">
                            <img src={{ asset($content['image']) }} alt="Gambar {{ $content['title'] }}" style="width: 200px; height: 200px;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><strong>{{ $content['name'] }}</strong></h5>
                            <p class="card-text">{{ $content['excerpt'] }}</p>
                        </div>
                        <div class=" text-right" style="padding: 10px;">
                            <a href="/about+us/{{ $content['slug'] }}" class="btn btn-primary">More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
