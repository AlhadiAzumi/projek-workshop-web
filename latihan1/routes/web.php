<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\Api\BukuApiController;
use App\Http\Controllers\Api\ProdukApiController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::apiResource('produk', ProdukApiController::class);
Route::get('/buku', [BukuApiController::class, 'index']);

Route::get('demo-api-eksternal', function() {
    $response = Http::get('https://jsonplaceholder.typicode.com/users');
    $data = $response->throw()->json();

    return view('api-eksternal', compact('data'));
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $route = request()->user()->role === 'admin'
        ? 'admin.buku.index'
        : 'admin.anggota.index';

    return redirect()->route($route);
})->middleware('auth')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
    Route::resource('buku', BukuController::class)->middleware('cek.role:admin');
    Route::resource('anggota', AnggotaController::class)->parameters(['anggota' => 'anggota'])->middleware('cek.role:user');
});

require __DIR__.'/auth.php';
