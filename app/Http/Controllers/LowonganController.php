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
        $imageName2 = time().'.'.$request->image->extension();
        $request->image->move(public_path('img'), $imageName2);
        lowongan::updateOrCreate(
            ['id' => $request->id],
            ['nama_pekerjaan' => $request->nama_pekerjaan, 'jns_pekerjaan' => $request->jns_pekerjaan, 'lokasi' => $request->lokasi, 'deskripsi' => $request->deskripsi, 'kriteria' => $request->kriteria, 'syarat' => $request->syarat, 'email' => $request->email, 'no_telp' => $request->no_telp, 'gaji' => $request->gaji, 'batas' => $request->batas, 'image' => $imageName2]
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
            'kriteria' => $request->kriteria,
            'syarat' => $request->syarat,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'gaji' => $request->gaji,
            'batas' => $request->batas
        ]);
        return redirect('/list');
    }
}
