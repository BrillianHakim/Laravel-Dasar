<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaginationController extends Controller
{
    public function index(){
        $pagination = DB::table('pagination')->paginate(10);
        return view('pagination/pagination',['pagination' => $pagination]);
    }
}
