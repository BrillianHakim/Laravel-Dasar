<?php
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventRegistrasiController;
use App\Http\Controllers\HomeMiddlewareController;
use App\Http\Controllers\LatMiddlewareController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PegawaiCrudController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\LatPaginationController;
use App\Http\Controllers\LatController;
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
route::get('/', function () {
    return view('welcome');
});

// Blog 
route::get('/blog',[BlogController::class,'blog']);
route::get('/blog/tentang',[BlogController::class,'tentang']);
route::get('/blog/tentang/kontak',[BlogController::class,'kontak']);

// Request dan Response User
route::get('/request-response/user-form',[UserController::class,'showForm'])->name('user.form');
route::post('/submit-form',[UserController::class,'submitForm'])->name('user.submit');

// Request dan Response Contact
route::get('/request-response/contact',[ContactController::class,'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'handleForm'])->name('contact.submit');

// Latihan event registrasi 
route::get('latihan-fundamental/event/registrasi',[EventRegistrasiController::class,'showForm'])->name('event.registarasi');
Route::post('/event/registrasi', [EventRegistrasiController::class, 'submitForm'])->name('event.submit');

// Middleware
route::get('/about',[HomeMiddlewareController::class,'about']);
route::get('/product',[HomeMiddlewareController::class,'product']);
route::get('/cart',[HomeMiddlewareController::class,'cart']);
route::get('/order',[HomeMiddlewareController::class,'order']);
route::get('/cektanggal',[HomeMiddlewareController::class,'cektanggal'])->middleware('ordermidleware');

// Latihan Middleware
route::get('/latihan-middleware',[LatMiddlewareController::class,'index'])->middleware('latihanmidleware');
route::get('/latihan-middleware/cek-tanggal',[LatMiddlewareController::class,'cek']);

// Eloquent ORM
route::get('/pegawai', [PegawaiController::class, 'index']);

// Eloquent ORM Relationship latihan
route::get('/pekerjaan',[PekerjaanController::class,'index']);
// Eloqunt ORM Relationship latihan 2
route::get('/pengguna',[PenggunaController::class,'index']);
// Eloqunt ORM Relationship latihan produk
route::get('/produk',[ProdukController::class,'index']);

// CRUD Pegawai
route::get('/pegawaicrud',[PegawaiCrudController::class,'index']);
// CRUD Pegawai tambah
route::get('/pegawai/tambah',[PegawaiCrudController::class,'tambah']);
route::post('/pegawai/store',[PegawaiCrudController::class,'store']);
// CRUD Pegawai edit
route::get('/pegawai/edit/{id}',[pegawaiCrudController::class,'edit']);
route::post('/pegawai/update',[pegawaiCrudController::class,'update']);
// CRUD Pegawai hapus
route::get('pegawai/hapus/{id}',[pegawaiCrudController::class,'hapus']);

// pagination
route::get('/pagination',[PaginationController::class,'index']);
// latihan pagination 
route::get('/latpagination',[LatPaginationController::class,'index']);
// lat 2
route::get('/lat',[LatController::class,'index']);