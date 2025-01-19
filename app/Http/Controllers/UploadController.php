<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(){
        return view('Upload file/upload');
    }
    public function proses_upload(Request $request){
        $this->validate($request, [
            'file' => 'required',
            'keterangan' => 'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file =$request->file('file');
        // nama file
        echo 'File Name: '.$file->getClientOriginalName();
        echo '<br>';
        // ekstensi file
        echo 'File Extension: '.$file->getClientOriginalExtension();
        echo '<br>';
        // ukuran file dalam byte
        echo 'File Size: '.$file->getSize();
        echo '<br>';
        // tipe mime file
        echo 'File Type: '.$file->getMimeType();
        echo '<br>';
        // real path
        echo 'File Real Path: '.$file->getRealPath();
        echo '<br>';
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        // upload file
        $file->move($tujuan_upload,$file->getClientOriginalName());
    }
}
