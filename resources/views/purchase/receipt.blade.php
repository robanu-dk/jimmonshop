@extends('layouts.main')

@section('container')

    <div class="container d-flex justify-content-center"  style="padding-top: 100px;">

        <div class="card ukuran-card">
            <div class="card-body">
                <div class="row mt-5">
                    <div class="col text-center" style="font-size: 32px">
                        <strong>Payment Successfull!</strong>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col text-center" style="font-size: 140px; color: rgb(2, 131, 2)">
                        <i class="bi bi-check-circle"></i>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="row mb-3" style="width: 60%">
                        <div class="col">Purchase date</div>
                        <div class="col text-end">{{ $data->created_at }}</div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="row mb-3" style="width: 60%">
                        <div class="col">Name</div>
                        <div class="col text-end">{{ $data->nama_pembeli }}</div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="row mb-3" style="width: 60%">
                        <div class="col">Phone Number</div>
                        <div class="col text-end">{{ $data->noTelp_pembeli }}</div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="row mb-3" style="width: 60%">
                        <div class="col">Product Name</div>
                        <div class="col text-end">{{ $product->nama_produk }}</div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="row mb-3" style="width: 60%">
                        <div class="col">Price of each product</div>
                        <div class="col text-end">{{ 'Rp' . $product->harga }}</div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="row mb-3" style="width: 60%">
                        <div class="col">Purchase amount</div>
                        <div class="col text-end">{{ $data->jumlah_barang }}</div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="row mb-3" style="width: 60%">
                        <div class="col">Total payment</div>
                        <div class="col text-end">{{ 'Rp' . $data->total_harga }}</div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="row mb-3" style="width: 60%">
                        <div class="col">Method payment</div>
                        <div class="col text-end">{{ $data->metode_pembayaran }}</div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="row mb-3" style="width: 60%">
                        <div class="col">Address</div>
                        <div class="col text-end">{{ $data->alamat_jalan . ' ' . $data->alamat_kota_kabupaten . ' ' . $data->alamat_provinsi . ' ' . $data->kodepos }}</div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="row mb-3" style="width: 60%">
                        <div class="col">Note</div>
                        <div class="col text-end">{{ $data->keterangan }}</div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="row mt-5 mb-3" style="padding-top: 10%">
                        <div class="col">
                            <a href="/dashboard/my/purchase" class="btn btn-success">Done <i class="bi bi-check2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
