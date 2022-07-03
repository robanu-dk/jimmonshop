@extends('dashboard.layouts.main')

@section('content')

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 91%">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-11">
        <a href="/dashboard/products/create" class="btn btn-primary mb-3">Create new Product</a>
        <table class="table table-striped table-sm">
            <thead class="table-dark">
              <tr>
                <th scope="col">No.</th>
                <th scope="col" style="width: 25%">Name of Product</th>
                <th scope="col" style="width: 25%">Description</th>
                <th scope="col" style="width: 10%">Category</th>
                <th scope="col" style="width: 10%">Price</th>
                <th scope="col" style="width: 15%">Stock</th>
                <th scope="col" style="text-align: center; width: *">Action</th>
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
                        <td>
                            <a href="/dashboard/products/{{ $pr->slug }}" class="badge bg-info"><img src={{ asset('feather/eye.svg') }} alt=""></a>
                            <a href="/dashboard/products/{{ $pr->slug }}/edit" class="badge bg-warning"><img src={{ asset('feather/edit.svg') }} alt=""></a>
                            <form action="/dashboard/products/{{ $pr->slug }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><img src={{ asset('feather/x-circle.svg') }} alt=""></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
