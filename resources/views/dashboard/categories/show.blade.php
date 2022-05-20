@extends('dashboard.layouts.main')

@section('content')
<div class="content" style=" padding-bottom: 40px" align='center'>
    <div class="card" style="width: 70%;  text-align: center">
        <div align="left" style="padding: 10px">
            <a href="/dashboard/categories" class="btn btn-success"><img src={{ asset('feather/arrow-left.svg') }} alt="icon-back">Back to all categorys</a>
            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="btn btn-warning"><img src={{ asset('feather/edit.svg') }} alt="icon-edit">Edit</a>
            <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"><img src={{ asset('feather/x-circle.svg') }} alt="icon-delete">Delete</button>
            </form>
        </div>
        <div style="padding-top: 20px; font-size: 20px"><b>{{ $category->nama_kategori }}</b></div>
        <div class="image" style="text-align: center; padding-top: 30px">
            <img style="max-width: 450px;" src={{ asset($category->image) }} class="card-img-top" alt="poster-category">
        </div>
        <div class="card-body" style="text-align: left">
          <p class="card-text">
            <strong>Note:</strong> <br>
            {!! $category->keterangan !!}
          </p>
          <strong>List of products</strong><br>
          <table class="table table-striped table-sm">
            <thead class="table-dark">
              <tr>
                <th scope="col">No.</th>
                <th scope="col" style="width: 25%">Name of Product</th>
                <th scope="col" style="width: 25%">Description</th>
                <th scope="col" style="width: 10%">Category</th>
                <th scope="col" style="width: 10%">Price</th>
                <th scope="col" style="width: 15%">Stock</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $pr)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $pr->nama_produk }}</td>
                        <td>{!! $pr->deskripsi !!}</td>
                        <td>{{ $pr->kategori->nama_kategori }}</td>
                        <td>{{ $pr->harga }}</td>
                        <td>{{ $pr->jumlah }}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
    </div>
</div>
@endsection
