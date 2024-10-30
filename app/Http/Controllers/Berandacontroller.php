<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Berandacontroller extends Controller
{
  public function berandaBackend(){
    return view('backend.v_beranda.index', [
        'judul'=>'Halaman Beranda'
    ]);
  }
}
