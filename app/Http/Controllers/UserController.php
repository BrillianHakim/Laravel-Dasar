<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Request dan Response
class UserController extends Controller
{   
    // menampilkan form
    public function showForm(){
        return view('/request-response/user_form');
    }
    // menangani submit form
    public function submitForm(Request $request){
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|min:3',
            'email' => 'required|email',
            'umur' => 'required|integer|min:1',
        ]);
        // Jika validasi berhasil, return data sebagai JSON
        return response()->json([
            'message' => 'Form berhasil disubmit!',
            'data' => $validated,
        ]);
    }
    

}
