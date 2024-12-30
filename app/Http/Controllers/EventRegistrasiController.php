<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventRegistrasiController extends Controller
{
    public function showForm(){
        return view('/latihan-fundamental/event_registrasi');
    }
    public function submitForm(Request $request){
        $request -> validate([
            'nama' => 'required',
            'email' => 'required|email',
            'nomor_handphone' => 'required|numeric',
            'alamat' => 'required',
        ]);
        return redirect()->back()->with('success','Pendaftaran berhasil!');
    }
}
