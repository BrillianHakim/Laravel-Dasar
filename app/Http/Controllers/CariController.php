<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CariController extends Controller
{
    public function index(){
        $pagination = DB::table('pagination')->paginate(10);
        return view('cari/cari',['pagination' => $pagination]); 
    }
    public function cari(Request $request){
        $cari = $request->input('cari');
        $cari = DB::table('pagination')
        ->where('pegawai_nama','like',"%{$cari}%")
        ->paginate(10);

        return view('cari/cari',['pagination' => $cari]);
    }
   
}
