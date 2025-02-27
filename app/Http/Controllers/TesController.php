<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TesController extends Controller
{
    // menampilkan isi session
    public function tampilSession(Request $request){
        if($request->session()->has('nama')){
            echo $request->session()->get('nama');
            }else{
            echo 'Tidak ada data dalam session.';
            }
    }
    // membuat session
    public function buatSession(Request $request){
        $request->session()->put('nama','Hakim');
        echo "Data telah ditambahkan ke session.";
    }
    // menghapus session
    public function hapusSession(Request $request){
        $request->session()->forget('nama');
        echo "Data telah dihapus dari session.";
    }
}
