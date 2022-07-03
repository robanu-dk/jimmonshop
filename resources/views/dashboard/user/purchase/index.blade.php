@extends('dashboard.layouts.main')

@section('content')

    <div class="text-align">
        <table class="table table-hover table-striped" style="width: 95%;">
            <thead class="table-dark text-center">
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
                  <th scope="col">Receipt</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($purchases as $purchase)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $purchase->created_at }}</td>
                    <td>{{ $purchase->product->nama_produk }}</td>
                    <td class="text-center">{{ $purchase->jumlah_barang }}</td>
                    <td class="text-center">{{ 'Rp' . $purchase->total_harga }}</td>
                    <td class="text-center">{{ $purchase->metode_pembayaran }}</td>
                    <td>{{ $purchase->nama_pembeli }}</td>
                    <td>{{ $purchase->noTelp_pembeli }}</td>
                    <td>{{ $purchase->alamat_jalan . ' ' . $purchase->alamat_kota_kabupaten . ' ' . $purchase->alamat_kota_kabupaten . ' ' . $purchase->alamat_provinsi . ' ' . $purchase->kodepos }}</td>
                    <td>{{ $purchase->keterangan }}</td>
                    <td><div>{{ $purchase->status_pembelian }}</div>
                        @if ($purchase->status_pembelian=='Your order is on the way')
                            <div>
                                <form action="{{ route('order_accepted',[$purchase->id]) }}" method="POST">
                                    @csrf
                                    @method('put')
                                    <button type="submit" class="btn btn-success" onclick="return confirm('Order received?')">Order Accepted <i class="bi bi-check"></i></button>
                                </form>
                            </div>
                        @endif
                    </td>
                    <td>
                        <a href="/dashboard/my/purchase/{{ $purchase->product->slug }}/{{ $purchase->id }}" class="btn btn-primary justify-content-center">receipt</a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
        </table>
    </div>

@endsection
