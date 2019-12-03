<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\lowongan;

class LowonganController extends Controller
{
    function index(){
        return view('lowongan');
    }

    public function add(Request $request){
        lowongan::updateOrCreate(
            ['id' => $request->id],
            ['nama_pekerjaan' => $request->nama_pekerjaan, 'jns_pekerjaan' => $request->jns_pekerjaan, 'lokasi' => $request->lokasi, 'deskripsi' => $request->deskripsi, 'email' => $request->email, 'no_telp' => $request->no_telp, 'gaji' => $request->gaji]
        );
        return redirect('/home')->with('success', 'Lowongan berhasil disimpan!');
    }

    public function delete($id){
        DB::table('lowongan')->where('id', $id)->delete();
        return redirect('/admin');
    }

    public function edit($id){
        $data = DB::table('lowongan')->where('id', $id)->get();
        return view('edit',['lowongan' => $data]);
    }

    public function update(Request $request){
        DB::table('lowongan')->where('id', $request->id)->update([
            'nama_pekerjaan' => $request->nama_pekerjaan,
            'jns_pekerjaan' => $request->jns_pekerjaan,
            'lokasi' => $request->lokasi,
            'deskripsi' => $request->deskripsi,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'gaji' => $request->gaji
        ]);
        return redirect('/list');
    }
}
