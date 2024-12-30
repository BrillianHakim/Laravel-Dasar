<?php
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
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

// Request dan Response
route::get('/request-response/user-form',[UserController::class,'showForm'])->name('user.form');
route::post('/submit-form',[UserController::class,'submitForm'])->name('user.submit');

// Request dan Response Contact
route::get('/request-response/contact',[ContactController::class,'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'handleForm'])->name('contact.submit');