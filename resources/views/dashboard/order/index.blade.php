@extends('dashboard.layouts.main')

@section('content')

    <main class="mb-4">
        <div class="row" style="width: 95%;">
            <div class="col">
                <a href="{{ route('change_status',['Waiting-Payment']) }}">
                    <div class="card bg-danger">
                        <div class="card-body">
                            <div class="card-header fs-2 text-center">
                                {{ $purchases->where('status_pembelian','Waiting payment')->count() }}
                            </div>
                            <div class="mt-2 mb-2">
                                Waiting Payment
                            </div>
                            <div class="card-footer text-center">
                                <i class="bi bi-arrow-right-circle-fill"> </i>Details
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('change_status',['Seller-is-Preparing-Your-Order']) }}">
                    <div class="card" style="background-color: #DEAB27">
                        <div class="card-body text-white">
                            <div class="card-header fs-2 text-center">
                                {{ $purchases->where('status_pembelian','Seller is preparing your order')->count() }}
                            </div>
                            <div class="mt-2 mb-2">
                                Seller is Preparing Your Order
                            </div>
                            <div class="card-footer text-center">
                                <i class="bi bi-arrow-right-circle-fill"> </i>Details
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('change_status',['Your-Order-is-On-The-Way']) }}">
                    <div class="card bg-info">
                        <div class="card-body">
                            <div class="card-header fs-2 text-center">
                                {{ $purchases->where('status_pembelian','Your order is on the way')->count() }}
                            </div>
                            <div class="mt-2 mb-2">
                                Your Order is On The Way
                            </div>
                            <div class="card-footer text-center">
                                <i class="bi bi-arrow-right-circle-fill"> </i>Details
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('change_status',['Completed']) }}">
                    <div class="card bg-success">
                        <div class="card-body">
                            <div class="card-header fs-2 text-center">
                                {{ $purchases->where('status_pembelian','Completed')->count() }}
                            </div>
                            <div class="mt-2 mb-2">
                                Completed
                            </div>
                            <div class="card-footer text-center">
                                <i class="bi bi-arrow-right-circle-fill"> </i>Details
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row mt-4" style="width: 95%;">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            Income
                        </div>
                        <div class="row m-3">
                            Total: {{ 'Rp' . $purchases->sum('total_harga') }}
                        </div>
                        <div class="row m-3">
                            <table class="table">
                                <thead class="table-dark">
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Product Category</th>
                                    <th scope="col">Remaining Stock</th>
                                    <th scope="col">Stock Sold</th>
                                    <th scope="col">Total Income</th>
                                    <th scope="col">Total Buyer</th>
                                    <th scope="col">Buyer List</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($products as $product)
                                  <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td class="col-3">{{ $product->nama_produk }}</td>
                                    <td>{{ $product->kategori->nama_kategori }}</td>
                                    <td class="text-center">{{ $product->jumlah }}</td>
                                    <td class="text-center">{{ $purchases->where('product_id',$product->id)->sum('jumlah_barang') }}</td>
                                    <td class="text-center">{{ 'Rp' . $purchases->where('product_id',$product->id)->sum('total_harga') }}</td>
                                    <td class="text-center">{{ $purchases->where('product_id',$product->id)->count() }}</td>
                                    <td class="text-center"><a href="{{ route('list_product_order',[$product->slug]) }}" class="btn btn-primary">view</a></td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
