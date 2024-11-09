<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class haloController extends Controller
{
    public function pageHalo() {
        $nama = 'Azhar K';
        // variabel berisi data
        $data = ['namaOrang'=>$nama];
        return view('pagebaru', $data);
    }
}
