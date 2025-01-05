<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LatPaginationController extends Controller
{
    public function index(){
        $latpagination = DB::table('lat_pagination')->paginate(5);
        return view('pagination/latpagination',['latpagination' => $latpagination]);
    }
}
