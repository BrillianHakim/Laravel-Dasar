<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
class ProdukController extends Controller
{
    public function index(){
        $produk = Produk::where('stok', '>' , 10)
            ->where('harga', '<', 50000)
            ->orderBy('harga', 'asc')
            ->get();
            return view('eloquent-ORM/produk', ['produk' => $produk]);
        
    }
}
