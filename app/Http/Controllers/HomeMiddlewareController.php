<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeMiddlewareController extends Controller
{
    public function about(){
        return("ini adalah about");
    }
    public function product(){
        return("ini adalah product");
    }
    public function cart(){
        return("ini adalah cart");
    }
    public function order(){
        return("ini adalah tanggal 30");
    }
    public function cektanggal(){
        return("ini adalah cektanggal");
    }
}
