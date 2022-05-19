<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Admin;
use Illuminate\Http\Request;

class CategoryDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.categories.index', [
            'title' => 'List of Categories',
            'categories' => Kategori::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.create', [
            'title' => 'Create New Category',
            'admins' => Admin::all()
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
            'nama_kategori' => 'required',
            'admin_id' => 'required',
            'slug' => 'required|unique:kategoris',
            'keterangan' => 'required',
            'image' => 'required',
        ]);

        Kategori::create($validatedData);

        return redirect('/dashboard/categories')->with('success','Create Category Successful!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        return view('dashboard.categories.show', [
            'title' => $kategori->nama_kategori,
            'category' => $kategori,
            'products' => $kategori->products
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori)
    {
        return view('dashboard.categories.edit', [
            'title' => 'Edit Category',
            'admins' => Admin::all(),
            'category' => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori)
    {
        $rules = [
            'nama_kategori' => 'required',
            'admin_id' => 'required',
            'image' => 'required',
            'keterangan' => 'required'
        ];

        if($request->slug != $kategori->slug) {
            $rules['slug'] = 'required|unique:kategoris';
        }

        $validatedData = $request->validate($rules);

        Kategori::where('id', $kategori->id)->update($validatedData);

        return redirect('/dashboard/categories')->with('success','Category has been update!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori)
    {
        Kategori::destroy($kategori->id);

        return redirect('/dashboard/categories')->with('success','Category has been deleted!!');
    }

}
