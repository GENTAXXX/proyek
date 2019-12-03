<?php

namespace App\Http\Controllers;
use App\lowongan;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        $data = lowongan::all();
        return view('admin', ['lowongan' => $data]);
    }
}
