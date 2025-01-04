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
    // Tambah Data
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
    // Edit Data
    public function edit($id){
        // mengambil data pegawai berdasarkan id yang dipilih
        $pegawaicrud = DB::table('pegawai_crud')->where('pegawai_id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('crud/edit',['pegawaicrud'=>$pegawaicrud]);
    }
    public function update(Request $request){
        DB::table('pegawai_crud')->where('pegawai_id',$request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        return redirect('pegawaicrud');
    }
    public function hapus($id){
        DB::table('pegawai_crud')->where('pegawai_id',$id)->delete();

        return redirect('pegawaicrud');
    }
    
}
