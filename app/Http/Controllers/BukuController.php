<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BukuController extends Controller
{
    public function index(){
        $buku = DB::table('buku')->paginate(5);
        return view('cari/latihancari',['buku' => $buku]);
    }
    public function cari(Request $request){
        $cari = $request -> input('cari');
        $cari = DB::table('buku')
        ->where('judul','like',"%{$cari}%")
        ->paginate(5);
        return view('cari/latihancari',['buku' => $cari]);
    }
}
