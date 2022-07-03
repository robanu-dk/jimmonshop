<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Models\Product;

class DashboardOrderController extends Controller
{
    public function index()
    {
        return view('dashboard.order.index',[
            'title' => 'Order',
            'purchases' => Pembelian::all(),
            'products' => Product::all()
        ]);
    }

    public function change_status($status)
    {
        $status = preg_replace('/-/',' ',$status);
        return view('dashboard.order.change_status',[
            'title' => 'Product Status: ' . $status,
            'datas' => Pembelian::where('status_pembelian',$status)->get()
        ]);
    }

    public function update_status($status, $id)
    {
        $status = preg_replace('/-/',' ',$status);

        switch($status) {
            case 'Waiting payment': Pembelian::where('id',$id)->update(['status_pembelian'=>'Seller is preparing your order']); break;
            case 'Seller is preparing your order': Pembelian::where('id',$id)->update(['status_pembelian'=>'Your order is on the way']); break;
            default: break;
        }

        return redirect()->back()->with('success','Status has been updated!!');

    }

    public function list($slug)
    {
        $product = Product::where('slug',$slug)->get();
        $purchases = Pembelian::where('product_id',$product[0]->id)->get();
        return view('dashboard.order.list',[
            'title' => 'List Purchase Product: ' . $product[0]->nama_produk,
            'datas' => $purchases
        ]);
    }
}
