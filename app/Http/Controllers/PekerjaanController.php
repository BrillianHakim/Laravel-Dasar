<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pekerjaan;
class PekerjaanController extends Controller
{
    public function index() {
    $pekerjaan = pekerjaan::all();

    return view('eloquent-ORM/pekerjaan', ['pekerjaan'=>$pekerjaan]);
    }
}
