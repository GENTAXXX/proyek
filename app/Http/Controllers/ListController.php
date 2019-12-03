<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lowongan;

class ListController extends Controller
{
    function index(){
        $data = lowongan::all();
        return view('list', ['lowongan' => $data]);
    }
}
