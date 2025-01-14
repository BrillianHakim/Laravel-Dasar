<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ValidasiController extends Controller
{
    public function input(){
        return view('validasi/input');
    }
    public function proses(Request $request){
    $this->validate($request,[
        'nama' => 'required|min:5|max:20',
        'pekerjaan' => 'required',
        'usia' => 'required|numeric',
    ]);
    return view('validasi/proses',['data' => $request]);
    }
}
