@extends('layouts.main')

@section('container')

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data->
            <img src="{{ asset('hero-image-home1.png') }}" class="d-block img-fluid w-100" alt="Image 1">
            <div class="carousel-caption">
                <div class="head-title title-position">
                    ISLAMIC EVENTS
                </div>
            </div>
            </div>
            <div class="carousel-item">
            <img src="{{ asset('hero-image-home2.png') }}" class="d-block img-fluid w-100" alt="Image 2">
            <div class="carousel-caption">
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

    <div class="container mt-5 mb-5">

        <div class="card mt-2 mb-4">
            <div class="card-header title w-100">
                <div class="row px-4">
                    <div class="col">
                        PRODUCTS
                    </div>
                    <div class="col text-end">
                        <a href="/products" class="text-normal fs-5">lihat semua</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($products->take(6) as $product)
                    <div class="col-sm-2 mt-2 mb-2">
                        <a href="/products/{{ $product->slug }}" class="text-normal">
                            <div class="card float">
                                <img class="w-100" src="{{ asset($product->image) }}" alt="{{ $product->image }}">
                                <div class="card-body">
                                    <div class="card-title text-truncate">
                                        <b>{{ $product->nama_produk }}</b>
                                    </div>
                                    <div class="card-text text-truncate">
                                        <div>Stock: {{ $product->jumlah }} pieces</div>
                                        <div>Price IDR {{ number_format($product->harga,2,".",",") }}</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="card mt-5">
            <div class="card-header title w-100">
                <div class="row px-4">
                    <div class="col">
                        EVENTS
                    </div>
                    <div class="col text-end">
                        <a href="/events" class="text-normal fs-5">lihat semua</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($events->take(6) as $event)
                    <div class="col-sm-2 mt-2 mb-2">
                        <a href="/events/{{ $event->slug }}" class="text-normal">
                            <div class="card float">
                                <div class="card-body">
                                    <img class="w-100" src="{{ asset($event->image) }}" alt="{{ $event->image }}">
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
@endsection
