@extends('layouts.main')

@section('container')

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data->
            <img src="{{ asset('hero-image-home1.png') }}" class="d-block" style="width: 100vmax; height: fit-content;" alt="Image 1">
            <div class="carousel-caption d-none d-md-block">
                <div class="head-title" style="padding-bottom: 40%; text-align: center;">
                    ISLAMIC EVENTS
                </div>
            </div>
            </div>
            <div class="carousel-item">
            <img src="{{ asset('hero-image-home2.png') }}" class="d-block" style="width: 100vmax" alt="Image 2">
            <div class="carousel-caption d-none d-md-block">
                <div class="head-title">
                    New Collections this Month
                </div>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container" style="padding-top: 20px; padding-bottom: 40px;">
        <table style="width: 100%">
            <tr>
                <td style="width: 50%" align="center">
                    <div class="title" style="font-size: 24px;">Events</div>
                </td>
                <td style="width: *" align="center">
                    <div class="title" style="font-size: 24px;">Products</div>
                </td>
            </tr>
            <tr>
                <td style="width: 50%" align="center">
                    <div style="padding-top: 20px">
                        @foreach ($events->take(3) as $event)
                        <div class="col" style="height: 100%; width: 40%">
                            <a href="/events/{{ $event->slug }}" style="text-decoration: none; color: black;">
                                <div class="card h-100" style="width: 100%;">
                                <img src={{ asset($event->image) }} class="card-img-top" alt="gambarevent+{{ asset($event->slug) }}">
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <a style="width: 40%; background-color: #D5D9CC;" href="/events" class="btn">More</a>
                </td>
                <td style="width: *" align="center">
                    <div style="padding-top: 20px">
                        @foreach ($products->take(3) as $product)
                        <div class="col" style="height: 100%; width: 40%">
                            <a href="/products/{{ $product->slug }}" style="text-decoration: none; color: black;">
                                <div class="card h-100" style="width: 100%;">
                                <img src={{ asset($product->image) }} class="card-img-top" alt="gambarevent+{{ asset($product->slug) }}">
                                <div class="card-body">
                                    <h5 class="card-title" style="min-height: 60%">{{ $product->nama_produk }}</h5>
                                    <p class="card-text">
                                    </p>
                                  </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <a style="width: 40%; background-color: #D5D9CC;" href="/products" class="btn">More</a>
                </td>
            </tr>
        </table>
    </div>
@endsection
