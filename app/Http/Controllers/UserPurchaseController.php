<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Models\Product;

class UserPurchaseController extends Controller
{
    public function index()
    {
        $purchases = Pembelian::where('user_id',auth()->user()->id)->latest()->get();
        return view('dashboard.user.purchase.index', [
            'title' => 'Data Purchase',
            'purchases' => $purchases
        ]);
    }

    public function receipt($slug, $id)
    {
        $dataProduct = Product::where('slug',$slug)->get();
        $dataPembeli = Pembelian::where('id',$id)->get();

        return view('dashboard.user.purchase.receipt',[
            'title' => 'Receipt ' . $dataProduct[0]->nama_produk,
            'data' => $dataPembeli[0],
            'product' => $dataProduct[0]
        ]);
    }

    public function order_accepted($id)
    {
        Pembelian::where('id',$id)->update(['status_pembelian'=>'Completed']);

        return redirect()->back();
    }
}
