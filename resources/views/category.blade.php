@extends('layouts.main')

@section('container')
    <div class="container" style="padding-top: 100px; padding-bottom: 6.6%">
        <div style="padding-bottom: 40px" align="center">
            <div class="title">
                Category {{ $category->nama_kategori }}
            </div>
        </div>
        <div class="card">
            <div class="fs-2 text-left" style="padding: 20px; color: green; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"><b>Product</b></div>
            <div class="card-body">
                @if ($products->count())
                    <div class="row row-cols-1 row-cols-md-5 g-4" style="padding-bottom: 30px">
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
                <h1 style="padding-bottom: 30px">There is no product</h1>
                @endif
                <a href="/products" class="btn btn-warning">Back to Products</a>
            </div>
        </div>
    </div>
@endsection
