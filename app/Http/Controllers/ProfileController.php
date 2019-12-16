<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profile;
    
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    function index()
    {
        $id = Auth::user()->id;
        $data = DB::table('profile')->where('id_users', $id)->get();
        return view('profile')->with('profile', $data);
    }

    public function store(Request $request){
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jgp,gif,svg|max:2048',
        // ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('img'), $imageName);
        profile::updateOrCreate(
            ['id_users' => Auth::user()->id],
            ['nama_perusahaan' => $request->nama_perusahaan,'alamat' => $request->alamat,'no_telp' => $request->no_telp, 'image' => $imageName]
        );
        return redirect('/profile')->with('success', 'Profile berhasil diedit!');
    }

    public function edit(){
        $id = Auth::user()->id;
        $data = DB::table('profile')->where('id_users', $id)->get();
        return view('edit-profile')->with('profile',$data);
    }
}
