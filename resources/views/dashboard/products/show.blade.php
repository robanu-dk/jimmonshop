@extends('dashboard.layouts.main')

@section('content')
<div class="content" style=" padding-bottom: 40px" align='center'>
    <div class="card mb-3" style="width: 60%;  text-align: left">
        <div align="left" style="padding: 10px">
            <a href="/dashboard/products" class="btn btn-success"><img src={{ asset('feather/arrow-left.svg') }} alt="icon-back">Back to all products</a>
            <a href="/dashboard/products/{{ $product->slug }}/edit" class="btn btn-warning"><img src={{ asset('feather/edit.svg') }} alt="icon-edit">Edit</a>
            <form action="/dashboard/products/{{ $product->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><img src={{ asset('feather/x-circle.svg') }} alt="icon-delete">Delete</button>
            </form>
        </div>
        <div style="padding-left: 5%" class="mt-3">
            <div class="mb-4">
                <strong style="font-size: 1.7vmax">Product's Name</strong><br>
                <strong style="font-size: 1.2vmax">{{ $product->nama_produk }}</strong>
            </div>
            <div class="mb-4">
                <strong style="font-size: 1.7vmax">Product's Admin</strong><br>
                <span style="font-size: 1.2vmax">{{ $product->admin->name }}</span>
            </div>
            <div class="mb-4">
                <strong style="font-size: 1.7vmax">Product's Image</strong><br>
                <img src="{{ asset($product->image) }}" alt="{{ 'image of ' . $product->nama_produk }}" style="width: 40%">
            </div>
            <div class="mb-4">
                <strong style="font-size: 1.7vmax">Product's Kategori</strong><br>
                <span style="font-size: 1.2vmax">{{ $product->kategori->nama_kategori }}</span>
            </div>
            <div class="mb-4">
                <strong style="font-size: 1.7vmax">Stock</strong><br>
                <span style="font-size: 1.2vmax">{{ $product->jumlah . ' pieces'}}</span>
            </div>
            <div class="mb-4">
                <strong style="font-size: 1.7vmax">Price</strong><br>
                <span style="font-size: 1.2vmax">{{ 'Rp' . $product->harga }}</span>
            </div>
            <div class="mb-4">
                <strong style="font-size: 1.7vmax">Description</strong><br>
                <span style="font-size: 1.2vmax">{!! $product->deskripsi !!}</span>
            </div>
        </div>
        <div class="text-end" style="padding: 20px">
            <a href="#" class="btn btn-primary disabled">Check History of Transaction</a>
        </div>
      </div>
</div>
@endsection
