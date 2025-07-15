<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HrController;
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
    return view('welcome');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



Route::prefix('hr')->name('hr.')->group(function () {
    Route::get('/dashboard', [HrController::class, 'dashboard'])->name('dashboard');
    Route::get('/karyawan', [HrController::class, 'karyawan'])->name('karyawan');
    Route::get('/absensi', [HrController::class, 'absensi'])->name('absensi');
    Route::get('/penggajian', [HrController::class, 'penggajian'])->name('penggajian');
    Route::get('/laporan', [HrController::class, 'laporan'])->name('laporan');

});

Route::prefix('employee')->name('employee.')->group(function () {
    Route::get('/dashboard', [EmployeeController::class, 'dashboard'])->name('dashboard');
    Route::get('/profil', [EmployeeController::class, 'profil'])->name('profil');
    Route::get('/absensi', [EmployeeController::class, 'absensi'])->name('absensi');
    Route::get('/slip-gaji', [EmployeeController::class, 'slipgaji'])->name('slipgaji');
    Route::get('/cuti', [EmployeeController::class, 'riwayatCuti'])->name('cuti');
    Route::post('/absen-masuk', [EmployeeController::class, 'absenMasuk'])->name('employee.absenMasuk');
    Route::post('/absen-pulang', [EmployeeController::class, 'absenPulang'])->name('employee.absenPulang');

});

