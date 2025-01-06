<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LatController extends Controller
{
    public function index(){
    $lat = DB::table('mahasiswa')->paginate(10);
    return view('pagination/lat',['lat' => $lat]);
    }
    
}
