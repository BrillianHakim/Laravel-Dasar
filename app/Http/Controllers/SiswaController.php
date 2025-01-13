<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Siswa;
class SiswaController extends Controller
{
    public function index(){
        $siswa = Siswa::paginate(5);
        return view('crud/siswa',['siswa'=>$siswa]);
    }
    public function cari(Request $request){
        $cari = $request->cari;
        $siswa = DB::table('siswa')
        ->where('nama','like',"%{$cari}%")
        ->paginate();
        return view('crud/siswa',['siswa'=>$siswa]);
    }
    public function tambah(){
        return view('crud/siswatambah');
    }
    public function store(Request $request){
       DB::table('siswa')->insert([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tanggal_lahir
        ]);
        return redirect('siswa');
    }
    public function edit($id){
        $siswa = Siswa::where('id',$id)->get();
        return view('crud/editsiswa',['siswa'=>$siswa]);
    }
    public function update(Request $request){
        Siswa::where('id',$request->id)->update([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tanggal_lahir
        ]);
        return redirect('siswa');
    }
    public function hapus($id){
        Siswa::where('id',$id)->delete();
        return redirect('siswa');
    }
}
