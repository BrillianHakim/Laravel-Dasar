<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\mahasiswaItn;
use PDF;
class PdfController extends Controller
{
    public function index(){
        $mahasiswaitn = MahasiswaItn::all();
        return view('pdf/cetak_pdf',['mahasiswa_itn'=>$mahasiswaitn]);
    }
    public function cetak(){
        $mahasiswaitn = MahasiswaItn::all();
        $pdf = PDF::loadview('pdf/mahasiswa_pdf',['mahasiswa_itn'=>$mahasiswaitn]);
        return $pdf->download('laporan-mahasiswa-pdf'); 
        
    }
}
