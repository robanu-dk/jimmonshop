@extends('dashboard.layouts.main')

@section('content')

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 95%">
            {{ session('success') }}
        </div>
    @endif

    <main>
        <div class="card" style="width: 95%;">
            <div class="card-body">
                <a href="{{ route('dashboard_order') }}" class="btn btn-warning mb-3">Back</a>
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Date Purchase</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Purchase Cost</th>
                            <th scope="col">Payment Method</th>
                            <th scope="col">Buyer Name</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Address</th>
                            <th scope="col">Note</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($datas as $data)
                            <tr>
                              <th scope="row">{{ $loop->iteration }}</th>
                              <td>{{ $data->created_at }}</td>
                              <td>{{ $data->product->nama_produk }}</td>
                              <td class="text-center">{{ $data->jumlah_barang }}</td>
                              <td class="text-center">{{ 'Rp' . $data->total_harga }}</td>
                              <td class="text-center">{{ $data->metode_pembayaran }}</td>
                              <td>{{ $data->nama_pembeli }}</td>
                              <td>{{ $data->noTelp_pembeli }}</td>
                              <td>{{ $data->alamat_jalan . ' ' . $data->alamat_kota_kabupaten . ' ' . $data->alamat_kota_kabupaten . ' ' . $data->alamat_provinsi . ' ' . $data->kodepos }}</td>
                              <td>{{ $data->keterangan }}</td>
                              <td><div>{{ $data->status_pembelian }}</div>
                                @if($data->status_pembelian!='Your order is on the way' &&  $data->status_pembelian!='Completed')
                                @php
                                    $status = preg_replace('/ /','-',$data->status_pembelian);
                                @endphp
                                    <div>
                                        <form action="{{ route('update_status',[$status,$data->id]) }}" method="POST">
                                            @csrf
                                            @method('put')
                                            <button type="submit" class="btn btn-success" onclick="return confirm('Have you checked?')">Done <i class="bi bi-check"></i></button>
                                        </form>
                                    </div>
                                @endif
                              </td>
                            </tr>
                          @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </main>

@endsection
