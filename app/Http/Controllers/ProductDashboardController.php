<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Admin;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ProductDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.products.index', [
            'title' => 'List Products',
            'products' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.products.create', [
            'title' => 'Create New Product',
            'admins' => Admin::all(),
            'categories' => Kategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'slug' => 'required|unique:products',
            'kategori_id' => 'required',
            'admin_id' => 'required',
            'image' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
        ]);

        Product::create($validatedData);

        return redirect('/dashboard/products')->with('success','Create Product Successful!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('dashboard.products.show', [
            'title' => $product->nama_produk,
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('dashboard.products.edit', [
            'title' => 'Edit Product',
            'admins' => Admin::all(),
            'categories' => Kategori::all(),
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $rules = [
            'nama_produk' => 'required',
            'kategori_id' => 'required',
            'admin_id' => 'required',
            'image' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
        ];

        if($request->slug != $product->slug) {
            $rules['slug'] = 'required|unique:products';
        }

        $validatedData = $request->validate($rules);

        Product::where('id',$product->id)->update($validatedData);

        return redirect('/dashboard/products')->with('success','Product has been Update!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);

        return redirect('/dashboard/products')->with('success','Product has been deleted');
    }
}
