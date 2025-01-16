<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
class EncryptDecryptController extends Controller
{
    public function enkripsi(){
        
        $enkripsi = Crypt::encryptString('Hallo Selamat Datang');
        $dekripsi = Crypt::decryptString($enkripsi);

        echo "Hasil Enkripsi : ".$enkripsi;
        echo "<br>";
        echo "Hasil Dekripsi : ".$dekripsi;

    }

    public function data(){
        $parameter = [
            'nama' => 'Rizky Khapidsyah',
            'pekerjaan' => 'Programmer'
        ];
        $enkripsi = Crypt::encrypt($parameter);
        echo "<a href='/data/".$enkripsi."'>Klik</a>";
    }
    public function data_proses($data){
        $data = Crypt::decrypt($data);
        echo "Nama : ".$data['nama'];
        echo "<br>";
        echo "Pekerjaan : ".$data['pekerjaan'];
        
    }
}
