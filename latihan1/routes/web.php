<?php

use Illuminate\Support\Facades\Route;
use App\Models\Buku;
use App\Models\Anggota;

Route::get('/', function () {
    //return view('welcome');
    return 'Selamat Datang di Laravel';
});

Route::get('/profil', function () {
    //return view('welcome');
    return 'Nama : Alhadi Azumi <br> NIM : 2025573010040';
});

// Route::get('/buku', function () {
//     $buku = Buku::all();
//     return view('buku.index', ['buku' => $buku]);
// });

use App\Http\Controllers\BukuController;
// Route::resource('buku', BukuController::class);

// Route::get('/anggota', function () {
//     $anggota = Anggota::all();
//     return view('anggota.index', ['anggota' => $anggota]);
// });

use App\Http\Controllers\AnggotaController;
// Route::resource('anggota', AnggotaController::class)->parameters([
//     'anggota' => 'anggota'
// ]);

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('buku', BukuController::class)->middleware('cek.role:admin,petugas');
    Route::resource('anggota', AnggotaController::class)
        ->middleware('cek.role:admin,petugas')
        ->parameters([
        'anggota' => 'anggota'
    ]);
});

Route::get('/set-role/{role}', function ($role) {
    session(['role' => $role]);
    return redirect('/');
});