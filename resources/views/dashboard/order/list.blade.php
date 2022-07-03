@extends('dashboard.layouts.main')

@section('content')

    <main>
        <div class="card">
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
                              <td>{{ $data->status_pembelian }}</td>
                            </tr>
                          @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>

@endsection
