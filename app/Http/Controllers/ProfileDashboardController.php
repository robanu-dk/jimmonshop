<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileDashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.profile.index', [
            'title' => 'Profile',
            'admin' => Auth::guard('admin')->user()
        ]);
    }

    public function edit(Admin $admin)
    {
        return view('dashboard.profile.edit', [
            'title' => 'Edit Profile',
            'admin' => $admin
        ]);
    }

    public function update(Request $request)
    {

        $rules = [
            'name' => 'required',
            'image' => 'image|file|max:10240',
            'kontak' => 'required',
            'provinsi' => 'required',
            'daerah' => 'required',
            'kecamatan' => 'required',
            'jalan' => 'required',
            'kodepos' => 'required'
        ];

        if($request->username != Auth::guard('admin')->user()->username) {
            $rules['username'] = 'required|unique:admins';
        }

        if($request->email != Auth::guard('admin')->user()->email) {
            $rules['email'] = 'required|unique:admins';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $validatedData['image'] = $request->file('image')->store('profile-image');
        }

        Admin::where('id', Auth::guard('admin')->user()->id)->update($validatedData);

        return redirect('/dashboard')->with('success','Profile has been update!');
    }

    public function destroy()
    {

        $admin = Auth::guard('admin')->user();

        if($admin->image) {
            Storage::delete($admin->image);
        }

        Admin::destroy($admin->id);

        Auth::logout();

        return redirect('/sign+in');
    }

}
