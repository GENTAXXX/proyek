<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailJobController extends Controller
{
    function index($id){
        $data = DB::table('lowongan')->where('id', $id)->get();
        $data2 = DB::table('profile')->where('id', $id)->get();
        return view('detail-job')->with('lowongan', $data);
    }
}
