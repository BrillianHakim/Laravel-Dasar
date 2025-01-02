<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengguna;
class PenggunaController extends Controller
{
    public function index(){
        $pengguna = pengguna::orderBy('created_at', 'desc')->get();
        return view('eloquent-ORM/pengguna', ['pengguna' => $pengguna]);
    }
}
