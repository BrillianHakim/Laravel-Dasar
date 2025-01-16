<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class HashingController extends Controller
{
    public function hash() {
        $password= 'admin';
        $hash = Hash::make($password);
        echo "<br>";
        if(Hash::check('messi', $hash)){
            echo "Password cocok";
        }else{
            echo "Password tidak cocok";
        }
        // maka akan keluar password tidak cocok karena messi tidak cocok dengan admin
    }
}
