<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SapaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/about', function () {
    return view('pages.about', [
        'nama'  => 'Althea Meva Sasikirana',
        'kelas' => 'D4SM 48-02',
        'nim'   => '707082400012',
    ]);
});

Route::view('/contact', 'pages.contact');

// untuk menampilkan data dari database
Route::get('/product', [ProductController::class, 'index']);

// menampilkan halaman form insert data (wajib di atas /product/{id})
Route::get('/product/addProduct', [ProductController::class, 'addProduct']);

// memasukkan data dari form ke dalam database
Route::post('/product', [ProductController::class, 'store']);

// menampilkan detail data produk berdasarkan id tertentu
Route::get('/product/{id}', [ProductController::class, 'show']);

// menampilkan halaman form untuk merubah data
Route::get('/product/{id}/edit', [ProductController::class, 'edit']);

// menyimpan data yang sudah dirubah pada form edit
Route::put('/product/{id}', [ProductController::class, 'update']);

// menghapus data berdasarkan id yang dipilih
Route::delete('/product/{id}', [ProductController::class, 'destroy']);

// routing resource controller untuk kategori produk (dibuat di B.3)
Route::resource('/category', CategoryController::class);

// Dari latihan Modul 7
Route::get('/sapa', [SapaController::class, 'index']);