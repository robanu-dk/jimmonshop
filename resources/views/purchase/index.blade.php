@extends('layouts.main')

@section('container')
    <div class="container d-flex justify-content-center" style="padding-top: 100px;">
        <div class="card" style="width: 100%">
            <div class="card-body">
                <form action="/products/{{ $produk->slug }}/purchase/confirm" method="POST">
                    @csrf

                    <input type="hidden" name="product_id" id="product_id" value="{{ $produk->id }}">
                    <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
                    <input type="hidden" name="keterangan" id="keterangan" value="{{ $data->keterangan }}">

                    <div class="row text-center mb-4 mt-4" style="font-size: 18px">
                        <div class="col-6">
                            <div>
                                <b>Product</b>
                            </div>
                        </div>

                        <div class="col-2">
                            <div>
                                <b>Price</b>
                            </div>
                        </div>

                        <div class="col-2">
                            <div>
                                <b>Quantity</b>
                            </div>
                        </div>

                        <div class="col-2">
                            <div>
                                <b>Total</b>
                            </div>
                        </div>
                    </div>

                    <div class="row text-center">

                        <div class="col-6">
                            <div class="row">
                                <div class="col-1 d-flex align-items-center">
                                    <a href="/products/{{ $produk->slug }}" onclick="return confirm('Cancel Purchase? Your data on this page will be deleted')"><img style="width: 100%;" src="{{ asset('x-fill-icon.png') }}" alt="x"></a>
                                </div>
                                <div class="col text-start" style="width: 50%">
                                    <img style="width: 100%" src="{{ asset($produk->image) }}" alt="{{ 'Foto Produk ' .$produk->nama_produk }}">
                                </div>
                                <div class="col text-start">
                                    <b>{{ $produk->nama_produk }}</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="row">
                                <div class="col">
                                    {{ 'Rp' . $produk->harga }}
                                </div>
                            </div>
                            <div class="row border-bottom" style="padding-top: 80%">
                                <div class="col">
                                    Subtotal
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    Total
                                </div>
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="row">
                                <div class="col">
                                    {{ $data->jumlah_barang }}
                                    <input type="hidden" name="jumlah_barang" id="jumlah_barang" value="{{ $data->jumlah_barang }}">
                                </div>
                            </div>
                            <div class="row border-bottom" style="padding-top: 80%">
                                <div class="col" style="padding-top: 24px">
                                </div>
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="row">
                                <div class="col">
                                    {{ 'Rp' . ($produk->harga * $data->jumlah_barang) }}
                                </div>
                            </div>
                            <div class="row border-bottom" style="padding-top: 80%">
                                <div class="col">
                                    {{ 'Rp' . ($produk->harga * $data->jumlah_barang) }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    {{ 'Rp' . ($produk->harga * $data->jumlah_barang) }}
                                    <input type="hidden" name="total_harga" id="total_harga" value="{{ $produk->harga * $data->jumlah_barang }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="padding-left: 4%; padding-top: 3%;">
                        <div class="col">
                            <strong>Payment</strong>
                            <div class="mt-2">
                                Payment Method
                            </div>
                            <select class="form-select" name="metode_pembayaran" id="metode_pembayaran" aria-label="Default select example" style="width: 40%" required>
                                <option value="Transfer">Transfer via Bank</option>
                                <option value="COD">Cash on delivery</option>
                            </select>
                            <div class="text-muted" style="font-size: 14px; padding-top: 1%;">
                            <pre>
*Note:
If you choose Transfer, please make a transfer to the following account number
Bank name       : Mandiri
Account number  : 1122334455667
Name            : Yulis Saputri
                            </pre>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="padding-left: 4%;">
                        <div class="row">
                            <div class="col">
                                <strong>Billing details</strong>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="first_name" class="form-label">First Name</label>
                                    <input style="width: 100%" type="string" name="first_name" id="first_name" class="form-control @error('first_name') is-invalid @enderror" id="first_name" placeholder="Nama Awal" required value="{{ old('first_name') }}">
                                    @error('first_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input style="width: 100%" type="string" name="last_name" id="last_name" class="form-control" id="last_name" placeholder="Nama Akhiran">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-8">
                                <div class="mb-3">
                                    <label for="noTelp_pembeli" class="form-label">Phone Number</label>
                                    <input style="width: 100%" type="string" name="noTelp_pembeli" id="noTelp_pembeli" class="form-control @error('noTelp_pembeli') is-invalid @enderror" id="noTelp_pembeli" placeholder="082011633027" required value="{{ old('noTelp_pembeli') }}">
                                    @error('noTelp_pembeli')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-8">
                                <div class="mb-3">
                                    <label for="alamat_jalan" class="form-label">Street Name</label>
                                    <input style="width: 100%" type="string" name="alamat_jalan" id="alamat_jalan" class="form-control @error('alamat_jalan') is-invalid @enderror" id="alamat_jalan" placeholder="Jl. Jojoran I" required value="{{ old('alamat_jalan') }}">
                                    @error('alamat_jalan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="RT" class="form-label">RT</label>
                                    <input style="width: 100%" type="string" name="RT" id="RT" class="form-control @error('RT') is-invalid @enderror" id="RT" placeholder="001" required value="{{ old('RT') }}">
                                    @error('RT')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="RW" class="form-label">RW</label>
                                    <input style="width: 100%" type="string" name="RW" id="RW" class="form-control @error('RW') is-invalid @enderror" id="RW" placeholder="001" required value="{{ old('RW') }}">
                                    @error('RW')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-8">
                                <div class="mb-3">
                                    <label for="kecamatan" class="form-label">Subdistrict</label>
                                    <input style="width: 100%" type="string" name="kecamatan" id="kecamatan" class="form-control @error('kecamatan') is-invalid @enderror" id="kecamatan" placeholder="Gubeng" required value="{{ old('kecamatan') }}">
                                    @error('kecamatan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-8">
                                <div class="mb-3">
                                    <label for="alamat_kota_kabupaten" class="form-label">County/Town</label>
                                    <input style="width: 100%" type="string" name="alamat_kota_kabupaten" id="alamat_kota_kabupaten" class="form-control @error('alamat_kota_kabupaten') is-invalid @enderror" id="alamat_kota_kabupaten" placeholder="Kota Surabaya" required value="{{ old('alamat_kota_kabupaten') }}">
                                    @error('alamat_kota_kabupaten')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-8">
                                <div class="mb-3">
                                    <label for="alamat_provinsi" class="form-label">Province</label>
                                    <input style="width: 100%" type="string" name="alamat_provinsi" id="alamat_provinsi" class="form-control @error('alamat_provinsi') is-invalid @enderror" id="alamat_provinsi" placeholder="Jawa Timur" required value="{{ old('alamat_provinsi') }}">
                                    @error('alamat_provinsi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-8">
                                <div class="mb-3">
                                    <label for="kodepos" class="form-label">Postal Code</label>
                                    <input style="width: 100%" type="string" name="kodepos" id="kodepos" class="form-control @error('kodepos') is-invalid @enderror" id="kodepos" placeholder="66132" required value="{{ old('kodepos') }}">
                                    @error('kodepos')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5 mb-3">
                        <div class="col text-center">
                            <button type="submit" class="btn btn-success" onclick="return confirm('Is the data entered correctly?')">PURCHASE</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
