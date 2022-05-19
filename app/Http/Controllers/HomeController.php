<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        return view('home',[
            'title' => 'Home',
            'events' => Event::latest()->filter(request(['search']))->get(),
            'products' => Product::latest()->filter(request(['search']))->get()
        ]);
    }
}
