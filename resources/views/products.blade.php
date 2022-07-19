@extends('layouts.main')

@section('container')
    <div class="container" style="padding-top: 100px;">
        <div align='center'>
            <div class="mb-5">
                <h1 class="title">{{ $title }} BUMJ JIMM FST Universitas Airlangga</h1>
            </div>
        </div>

        <div class="card text-center mb-3" style="width: 100%;">
            <div class="fs-2 text-left title-text"><b>Kategori</b></div>
            <div class="card-body" style="padding-left: 30px;">
              <p class="card-text">
                @if ($categories->count())
                    <div class="row" style="padding-right: 15px">
                        @foreach ($categories as $category)
                        <div class="col">
                            <div class="card">
                                <a href="\products\category\{{ $category->slug }}" style="text-decoration: none; color: #000">
                                    <img src={{ $category->image }} class="card-img-top" alt=gambar+ {{ $category->slug }}>
                                    <div class="card-body">
                                        <h5 class="card-title-center">{{ $category->nama_kategori }}</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @else
                <h1 style="text-align: left">There is no Category</h1>
                @endif
              </p>
            </div>
        </div>

        <div class="card">
            <div class="fs-2 text-left title-text"><b>Product</b></div>
            <div class="card-body">
                @if ($products->count())
                    <div class="row row-cols-1 row-cols-md-5 g-4" style="padding-bottom: 20px">
                        @foreach ($products as $product)
                        <a href="\products\{{ $product->slug }}" style="text-decoration: none; color: black;">
                        <div class="col" style="height: 100%">
                                <div class="card h-100" style="width: 100%;">
                                    <img src={{ asset($product->image) }} class="card-img-top" alt="gambar+produk+ {{ asset($product->slug) }}">
                                    <div class="card-body">
                                        <h5 class="card-title" style="min-height: 60%">{{ $product->nama_produk }}</h5>
                                        <p class="card-text">
                                            <table style="width: 100%">
                                                <tr>
                                                    <td>
                                                        <p class="text-danger" style="min-width: 50%">Rp {{ $product->harga }}</p>
                                                    </td>
                                                    <td>
                                                        <p class="text-muted text-end">Tersisa {{ $product->jumlah }}</p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                @else
                <h1>There is no product</h1>
                @endif
            </div>
        </div>
    </div>
@endsection
