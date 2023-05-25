<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\MahasiswaController;


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

// Admin/Petugas
Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function() {
        Route::get('/', 'DashboardController@index')->name('dashboard');

        // Route::resource('prestasis', 'prestasiController');
        Route::resource('prestasi', 'PrestasiController');
        Route::resource('tanggapan', 'TanggapanController');
        Route::get('laporan/detail/{id}', 'PrestasiController@detail_laporan');


        Route::get('mahasiswa', 'AdminController@mahasiswa');


        Route::get('laporan', 'AdminController@laporan');
        Route::get('laporan/informatika', 'AdminController@laporan_informatika');
        Route::get('laporan/teknik-mesin', 'AdminController@laporan_TM');
        Route::get('laporan/teknik-sipil', 'AdminController@laporan_TS');
        Route::get('laporan/teknik-elektro', 'AdminController@laporan_TE');
        Route::get('laporan/arsitektur', 'AdminController@laporan_Arsitektur');
        Route::get('laporan/sistem-informasi', 'AdminController@laporan_SI');

        Route::get('laporan/cetak', 'AdminController@cetak');
        Route::get('laporan/cetak_informatika', 'AdminController@cetak_informatika');
        Route::get('laporan/cetak_arsitektur', 'AdminController@cetak_arsitektur');
        Route::get('laporan/cetak_TS', 'AdminController@cetak_TS');
        Route::get('laporan/cetak_TM', 'AdminController@cetak_TM');
        Route::get('laporan/cetak_TE', 'AdminController@cetak_TE');
        Route::get('laporan/cetak_SI', 'AdminController@cetak_SI');
        Route::get('prestasi/cetak/{id}', 'AdminController@pdf')->name('cetak');

        Route::get('/users/search', 'AdminController@search')->name('users.search');
        Route::post('/mahasiswa/{npm}', 'AdminController@destroy')->name('mahasiswa.destroy');
        Route::post('/edit/{npm}', 'AdminController@update')->name('mahasiswa.update');
        Route::get('editMahasiswa/{npm}', [AdminController:: class, 'edit']);

});



// Mahasiswa
Route::prefix('user')
    ->middleware(['auth', 'MahasiswaMiddleware'])
    ->group(function() {
				Route::get('/', [ MahasiswaController :: class, 'index']);
                // Route::get('/registerMahasiswa',[MahasiswaController :: class, 'profile'])->name('profilemhs');
                // Route::resource('prestasi', [ MahasiswaController]);
                // Route::resource('prestasi', 'MahasiswaController');
                Route::get('prestasi/proses', [ MahasiswaController :: class, 'lihat']);
                Route::get('prestasi/perbaiki', [ MahasiswaController :: class, 'diperbaiki']);
                Route::get('prestasi/selesai', [ MahasiswaController :: class, 'selesai_proses']);
                Route::get('prestasi/detailprestasi/{id}', [PrestasiController:: class, 'lihat']);
                Route::get('prestasi/TambahData', [MahasiswaController:: class, 'TambahPrestasi']);
                Route::post('tambahprestasi', [MahasiswaController :: class, 'store'])->name('tambahprestasi');
                // Route::POST('/insertdata',[MahasiswaController :: class, 'insertdata']);
                Route::post('/prestasi.destroy/{id}', [PrestasiController :: class, 'destroy'])->name('prestasi.destroy');
                // Route::post('prestasi.destroy', 'PrestasiController');

});





require __DIR__.'/auth.php';
