<?php

use App\Http\Controllers\BukutamuEntryController;
use App\Models\BukutamuEntry;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('bukutamu');
});
Route::get('/bukutamu', function () {
    return view('bukutamu');
});

// Rute untuk form buku tamu (publik)
// Route::get('/', [BukutamuEntry::class, 'create']);
Route::post('/tambahbukutamu', [BukutamuEntryController::class, 'store']);

// Rute untuk halaman admin (tanpa login dulu)
Route::get('/admin', [BukutamuEntryController::class, 'admin']);
Route::get('/adminfilter', [BukutamuEntryController::class,'filteradmin']);

// Rute untuk export CSV
Route::get('/admin/export', [BukutamuEntryController::class, 'export']);
