<?php

use App\Http\Controllers\DokterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::get('/admin/user', function () {
    return view('admin.user');
});
Route::get('/admin/dokter', [DokterController::class, 'index'])->name('dokter');
Route::post('/admin/adddokter', [DokterController::class, 'adddokter']);
Route::get('/admin/updatedokter/{id}', [DokterController::class, 'updatedokter'])->name('updatedokter');
Route::post('/admin/dokter/store/{id}', [DokterController::class, 'store'])->name('storedokter');
