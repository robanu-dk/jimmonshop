@extends('layouts.main')

@section('container')
    <div class="container" style="padding-top: 100px;" align="center">
        <div class="card mb-3" style="width: 70%; text-align: left;">
            <div class="row g-1" style="height: 100%;">
                <div class="col-md-4" style="padding: 20px;">
                    <img style="width: 100%; height: 100%;" src={{ asset($product->image) }} class="img-fluid rounded-start" alt="Gambar {{ $product->nama_produk }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body" style="height: 100%;">
                        <p class="card-title" style="font-size: 24px"><strong>{{ $product->nama_produk }}</strong></p>
                        <p class="card-text" style="font-size: 20px">
                            <strong>Rp {{ $product->harga }}</strong>/package
                        </p>
                        <form action="/products/{{ $product->slug }}/purchase" method="POST">
                            @csrf
                            @auth
                            <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
                            @endauth
                            <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">
                            <p style="padding-top: 10px;">
                                <strong>Quantity </strong>
                            </p>
                            <div class="form-floating mb-3" style="width: 80%">
                                <input type="number" class="form-control @error('jumlah_barang') is-invalid @enderror" id="jumlah_barang" name="jumlah_barang" placeholder="jumlah_barang">
                                <label for="keterangan" style="font-size: 14px">Quantity</label>
                                @error('jumlah_barang')
                                    <div class="invalid-feedback">
                                        {{ str_replace('jumlah barang','Quantity',$message) }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3" style="width: 80%">
                                <input type="string" class="form-control" id="keterangan" name="keterangan" placeholder="keterangan">
                                <label for="keterangan" style="font-size: 14px">additional information<span class="text-muted" style="font-size: 1vmax">(color, size, other..)</span></label>
                            </div>
                            <div class="btn-group row" style="width: 65%">
                                <div class="col">
                                    <a href="{{ 'https://wa.me/'. $product->admin->kontak }}" class="btn btn-outline-success mb-2" style="width: 150px;">Chat Admin</a>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-success @auth('admin') disabled @endauth" style="width: 150px" {{ ($product->jumlah == 0)? 'disabled' : '' }}>Buy</button>
                                    @if($product->jumlah == 0)
                                    <div class="text-danger" style="font-size: 14px">*Out of stock</div>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-text" style="padding: 20px">
                <h4>Description</h4>
                <p>
                    {!! $product->deskripsi !!}
                </p>
            </div>
            <div style="padding:20px">
                <a href="\products" class="btn btn-warning" style="width: fit-content;">Back</a>
            </div>
        </div>
    </div>

@endsection
