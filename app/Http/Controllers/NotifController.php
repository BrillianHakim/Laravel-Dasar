<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
class NotifController extends Controller
{
    public function index(){
        return view('notifikasi/notif');
    }
    public function sukses(){
        session::flash('sukses','Data Berhasil Diinput');
        return redirect('pesan');
    }
    public function peringatan(){
        session::flash('peringatan','Data Berhasil Diinput');
        return redirect('pesan');
    }
    public function gagal(){
        session::flash('gagal','Data Gagal Diinput');
        return redirect('pesan');
    }
}
