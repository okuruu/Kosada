<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrator;
use App\Http\Controllers\Testing;
use App\Http\Controllers\AuthController;    

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

// Route::get('/', function () {
//     return view('welcome');
// });



// Halaman download All Data Marketing
Route::get('/Report', [Administrator::class, 'export_page'])->name('laporan');

Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
 
Route::group(['middleware' => 'auth'], function () {
 
    Route::get('/Dashboard', [Administrator::class, 'index'])->name('home');
    Route::get('/Logout', [AuthController::class, 'logout'])->name('logout');

    // Penambahan Member
    Route::get('/TambahMember', [Administrator::class, 'tambahMember'])->name('tambahMember');
    Route::post('/TambahMember', [Administrator::class, 'tambahPostMember'])->name('tambahPostMember');

    // Updaet Member
    Route::post('/updateMember', [Administrator::class , 'updateMember'])->name('updateMember');
    Route::post('/hapusMember', [Administrator::class, 'hapusMember'])->name('hapusMember');

    // Penambahan Data kredit
    Route::get('/TambahDataKredit', [Administrator::class, 'tambahDataKredit'])->name('tambahDataKredit');
    Route::post('/TambahDataKredit', [Administrator::class, 'postDataKredit'])->name('postDataKredit');
    Route::post('/getDataTambahDataKredit', [Administrator::class, 'getDataKredit'])->name('getDataTambahkredit');

    Route::get('/RealisasiKredit', [Administrator::class, 'realisasiKredit'])->name('realisasiKredit');

    Route::get('/CekKreditNasabah', [Administrator::class, 'kreditNasabah'])->name('kreditNasabah');
    Route::post('/CekKreditNasabah', [Administrator::class , 'cekDetailNasabah'])->name('detailKredit');

    Route::post('/ChangedCekKreditNasabah', [Administrator::class, 'changedKreditNasabah'])->name('changeMarketing');

    Route::post('/RubahStatusKreditDetailNasabah', [Administrator::class, 'updateDetailNasabah'])->name('updateDetailNasabah');
    Route::post('/HapusKreditDetailNasabah', [Administrator::class, 'hapusDetailNasabah'])->name('hapusDetailNasabah');
    Route::post('/LunasiKreditNasabah', [Administrator::class, 'lunasiKreditNasabah'])->name('lunasiKredit');

    // Download Data Marketing
    Route::get('/Download',[Administrator::class, 'export_excel'])->name('download');
    Route::get('/Download/25', [Administrator::class, 'export_25'])->name('25');
    Route::get('/Download/28IM', [Administrator::class, 'export_28im'])->name('28im');
    Route::get('/Download/28AM', [Administrator::class, 'export_28am'])->name('28am');
    Route::get('/Download/BCA1', [Administrator::class, 'export_bca1'])->name('bca1');
    Route::get('/Download/BCA2', [Administrator::class, 'export_bca2'])->name('bca2');
    Route::get('/Download/MAN1', [Administrator::class, 'export_man1'])->name('man1');
    Route::get('/Download/MAN2', [Administrator::class, 'export_man2'])->name('man2');
    Route::get('/Download/SAB', [Administrator::class, 'export_bri'])->name('sab');
    Route::get('/Download/CIMB', [Administrator::class, 'export_cimb'])->name('cimb');
    Route::get('/Download/MJK', [Administrator::class, 'export_mjk'])->name('mjk');
    Route::get('/Download/YAKULT', [Administrator::class, 'export_yakul'])->name('yakult');
    Route::get('/Download/OPPO', [Administrator::class, 'export_oppo'])->name('oppo');
    Route::get('/Download/ULOKA', [Administrator::class, 'export_uloka'])->name('uloka');
    Route::get('/Download/BNI', [Administrator::class, 'export_bni'])->name('bni');
    Route::get('/Download/JATIM', [Administrator::class, 'export_jatim'])->name('jatim');
 
});