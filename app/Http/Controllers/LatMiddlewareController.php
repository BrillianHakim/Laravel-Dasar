<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LatMiddlewareController extends Controller
{
    public function index(){
        return("ini adalah index");
    }
    public function cek(){
        return("sekarang adalah tanggal ".(date('d / M / y')));
    }
}
