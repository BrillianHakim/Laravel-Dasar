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
    
}
