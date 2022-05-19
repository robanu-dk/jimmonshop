<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('registration.index', [
            'title' => 'Registration Form'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required','min:4','max:255','unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => ['required','min:7','max:255']
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success','Registration successfull!!! Please Sign In'); //This error can be ignore

        return redirect('/sign+in')->with('success','Registration successfull!!! Please Sign In');

    }

}
