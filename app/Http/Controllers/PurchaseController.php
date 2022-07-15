<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Pembelian;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function purchase(Request $request)
    {
        $stok = Product::find($request->product_id)->jumlah;
        $request->validate(['jumlah_barang' => ['required','integer','max:'.$stok]]);

        return redirect()->route('purchase_form',['slug'=>$request->slug])->with(['jumlah_barang'=>$request->jumlah_barang,'keterangan'=>$request->keterangan]);

    }

    public function index($request)
    {

        $data = ['jumlah_barang' => session()->get('jumlah_barang'), 'keterangan' => session()->get('keterangan')];
        $produk = Product::where('slug',$request)->get();
        return view('purchase.index',[
            'title' => 'Nota Pembelian ' . $produk[0]->nama_produk,
            'data' => $data,
            'produk' => $produk[0]
        ]);

    }

    public function confirm(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'nullable',
            'noTelp_pembeli' => 'required',
            'alamat_jalan' => 'required',
            'alamat_kota_kabupaten' => 'required',
            'alamat_provinsi' => 'required',
            'kodepos' => 'required',
            'jumlah_barang' => 'required',
            'total_harga' => 'required',
            'metode_pembayaran' => 'required',
            'RT' => 'required|max:3',
            'RW' => 'required|max:3',
            'kodepos' => 'required|size:5'
        ]);

        $validatedData = $request->only([
            'user_id','product_id','noTelp_pembeli','alamat_kota_kabupaten',
            'alamat_provinsi','kodepos','jumlah_barang','total_harga','metode_pembayaran','keterangan'
        ]);

        if($request->last_name)
        {
            $validatedData['nama_pembeli'] = $request->first_name . ' ' . $request->last_name;
        }
        else
        {
            $validatedData['nama_pembeli'] = $request->first_name;
        }

        $validatedData['alamat_jalan'] = $request->alamat_jalan . ', RT' . $request->RT . ' RW' . $request->RW;

        if($request->metode_pembayaran == 'Transfer')
        {
            $validatedData['status_pembelian'] = 'Waiting payment';
        }
        else
        {
            $validatedData['status_pembelian'] = 'Seller is preparing your order';
        }

        $product = Product::where('id',$request->product_id)->get();

        Pembelian::create($validatedData);
        Product::where('id',$request->product_id)->update(['jumlah' => ($product[0]->jumlah - $request->jumlah_barang)]);

        $data = Pembelian::latest()->get();

        return redirect()->route('receipt',[$product[0],$data[0]]);

    }

    public function receipt($product, $purchase)
    {
        $dataProduct = Product::where('slug',$product)->get();
        $dataPurchase = Pembelian::where('id',$purchase)->get();
        return view('purchase.receipt',[
            'title' => 'Receipt ' . $dataProduct[0]->nama_produk,
            'data' => $dataPurchase[0],
            'product' => $dataProduct[0]
        ]);
    }

}
