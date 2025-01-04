<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PegawaiCrudController extends Controller
{
    public function index(){
        $pegawaicrud = DB::table('pegawai_crud')->get();
        return view('crud/pegawai-crud',['pegawaicrud'=>$pegawaicrud]);
    }
    public function tambah(){
        return view('crud/tambah');
    }
    public function store(Request $request){
        DB::table('pegawai_crud')->insert([   
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        return redirect('pegawaicrud');
    }
}
