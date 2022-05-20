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
                        <table >
                            <tr>
                                <td>
                                    <i class="bi bi-star-fill" style="color: gold; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"></i>
                                </td>
                                <td>
                                    <i class="bi bi-star-fill" style="color: gold; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"></i>
                                </td>
                                <td>
                                    <i class="bi bi-star-fill" style="color: gold; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"></i>
                                </td>
                                <td>
                                    <i class="bi bi-star-fill" style="color: gold; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"></i>
                                </td>
                                <td>
                                    <i class="bi bi-star-fill" style="color: gold; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"></i>
                                </td>
                                <td style="font-size: 12px; padding-left: 5px;">
                                    5.0
                                </td>
                            </tr>
                        </table>
                        <p class="card-title" style="font-size: 24px"><strong>{{ $product->nama_produk }}</strong></p>
                        <p class="card-text" style="font-size: 20px">
                            <strong>Rp {{ $product->harga }}</strong>
                        </p>
                        @if ($product->kategori->slug === 'fashion')
                            <p>
                                <strong>Color: </strong> Mustard
                            </p>
                            <table>
                                <tr>
                                    <td style="background-color: #FFA8A8; width: 24px; height: 26px"></td>
                                    <td style="width: 10px"></td>
                                    <td style="background-color: #EBCD31; width: 24px; height: 26px"></td>
                                    <td style="width: 10px"></td>
                                    <td style="background-color: #891B1B; width: 24px; height: 26px"></td>
                                    <td style="width: 10px"></td>
                                    <td style="background-color: #7A21B1; width: 24px; height: 26px"></td>
                                </tr>
                            </table>
                            <p style="padding-top: 10px;">
                                <strong>Size</strong>
                            </p>
                            <button type="button" class="btn btn-outline-dark">Free Size</button>
                        @endif
                        <p style="padding-top: 10px;">
                            <strong>Quantity </strong>
                        </p>
                        <div style="width: 15%; padding-bottom: 15px">
                            <select class="form-select" name="subject" aria-label="Default select example">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <table style="width: 320px">
                            <tr>
                                <td colspan="2" style="text-align: center">
                                    <a href="#" class="btn btn-outline-success" style="background: #D9E5CF; width: 320px"><strong>Add to Cart</strong></a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: right; width: 50%; padding-right: 10px; padding-top: 5px;">
                                    <a href="#" class="btn btn-outline-dark" style="width: 150px"><strong>Add to Wish List</strong></a>
                                </td>
                                <td style="padding-left: 10px; padding-top: 5px;">
                                    <a href="#" class="btn btn-outline-dark" style="width: 150px"><strong>Check Out</strong></a>
                                </td>
                            </tr>
                        </table>
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
