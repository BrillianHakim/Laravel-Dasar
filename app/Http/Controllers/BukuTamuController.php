<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BukuTamu;
use Illuminate\Support\Facades\DB;

class BukuTamuController extends Controller
{
    public function index(){
        $buku_tamu = DB::table('buku_tamu')->paginate(5);
        return view('projek/buku_tamu',['buku_tamu'=>$buku_tamu]);
    }
    public function tambah(){
        return view('projek/tambah_buku_tamu');
    }
    public function store(Request $request){
        DB::table('buku_tamu')->insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'tujuan' => $request->tujuan,
            'waktu_kunjungan' => $request->waktu_kunjungan
        ]);
        return redirect('/bukutamu');
    }
    public function edit($id){
        $buku_tamu = BukuTamu::where('id',$id)->get();
        return view('projek/edit_buku_tamu',['buku_tamu'=>$buku_tamu]);
    }
    public function update(Request $request){
        DB::table('buku_tamu')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'tujuan' => $request->tujuan,
            'waktu_kunjungan' => $request->waktu_kunjungan
        ]);
        return redirect('/bukutamu');
    }
    public function hapus($id){
        BukuTamu::where('id',$id)->delete();
        return redirect('/bukutamu');
    }

    public function cari(Request $request){
        $cari = $request->cari;
        $buku_tamu = DB::table('buku_tamu')
        ->where('nama','like',"%{$cari}%")
        ->paginate();
        return view('projek/buku_tamu',['buku_tamu'=>$buku_tamu]);
    }
}
