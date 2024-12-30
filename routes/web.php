<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SiswaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
route::get('/blog',[BlogController::class,'blog']);
route::get('/blog/tentang',[BlogController::class,'tentang']);
route::get('/blog/tentang/kontak',[BlogController::class,'kontak']);

// CobaController
route::get('/siswa/create',[SiswaContoller::class,'create'])->name('siswa.create');
route::post('/siswa',[SiswaContoller::class,'store'])->name('siswa.store');
route::get('/siswa',[SiswaContoller::class,'index'])->name('siswa.index');
