<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index(Request $request)
    {
        $stok = Product::find($request->product_id)->jumlah;
        $request->validate(['jumlah_barang' => ['required','integer','max:'.$stok]]);

        $produk = Product::find($request->product_id);

        return view('purchase.index',[
            'title' => 'Nota Pembelian ' . $produk->nama_produk,
            'data' => $request,
            'produk' => $produk
        ]);
    }
}
