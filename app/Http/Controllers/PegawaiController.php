<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index(){
        // Mengambil data pegawai
        $pegawai = Pegawai::all();

        // mengirim data pegawai ke view pegawai
        return view('eloquent-ORM/pegawai', ['pegawai' => $pegawai]);
    }
}
