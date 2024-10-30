<?php

use App\Http\Controllers\Berandacontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('backend/beranda',[Berandacontroller::class,'berandabackend'])->name('backend.beranda');