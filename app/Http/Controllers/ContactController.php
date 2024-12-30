<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm(){
        return view('/request-response/contact_form');
    }
    public function handleForm(Request $request){
        $request -> validate([
            'nama' => 'required',
            'pesan' => 'required|min:10',
        ]);
        return redirect()->back()->with('success','Pesan berhasil dikirim!');
    }
   

}
