<?php

use App\Http\Controllers\admin\GudangController;
use App\Http\Controllers\admin\pengguna\PenggunaController;
use App\Http\Controllers\admin\pengguna\SupirController;
use App\Http\Controllers\admin\pengguna\OutletController;
use App\Http\Controllers\admin\pengguna\PegawaiController;
use App\Http\Controllers\admin\KategoriController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\registerController;
use App\Http\Controllers\admin\BarangController;
use App\Http\Controllers\admin\sirkulasiBarangController;
use App\Http\Controllers\admin\HakAksesController;
use App\Http\Controllers\admin\JadwalPengirimanController;
use App\Http\Controllers\admin\TrukController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});
// user
// route::group(
//     ['middleware' => ['IsUser']],
//     function () {
Route::get('/konfirmasi', function () {
    return view('konfirmasi');
});
//     }
// );

// bagian login
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login/proses', 'proses')->name('login_proses');
});

Route::get('/login/register', [registerController::class, 'index'])->name('register');
Route::post('/login/register/actionregister', [registerController::class, 'actionregister'])->name('actionregister');

// bagian admin
Route::group(['middleware' => ['IsAdmin']], function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });

    // Bagian Rute 
    Route::get('/admin/rute', function () {
        return view('admin.Rute.rute');
    });

    // Bagian Jadwal
    Route::controller(JadwalPengirimanController::class)->group(function () {
        Route::get('/admin/jadwalpengiriman', 'index')->name('jadwalpengiriman');
        Route::post('/admin/jadwalpengiriman/create', 'create')->name('jadwalpengiriman.create');
        Route::post('/admin/jadwalpengiriman/update', 'update')->name('jadwalpengiriman.update');
        Route::get('/admin/jadwalpengiriman/delete/{id}', 'delete')->name('jadwalpengiriman.delete');
        Route::get('/admin/jadwalpengiriman', 'search')->name('jadwalpengiriman.search');
    });

    // Bagian Truk
    Route::controller(TrukController::class)->group(function () {
        Route::get('/admin/truk', 'index')->name('truk');
        Route::post('/admin/truk/create', 'create')->name('truk.create');
        Route::post('/admin/truk/update', 'update')->name('truk.update');
        Route::get('/admin/truk/delete/{id}', 'delete')->name('truk.delete');
        Route::get('/admin/truk', 'search')->name('truk.search');
    });

    // Bagian Gudang
    Route::controller(GudangController::class)->group(function () {
        Route::get('/admin/gudang', 'index')->name('gudang');
        Route::post('/admin/gudang/create', 'create')->name('gudang.create');
        Route::put('/admin/gudang/update', 'update')->name('gudang.update');
        Route::get('/admin/gudang/delete/{id}', 'delete')->name('gudang.delete');
        Route::get('/admin/gudang', 'search')->name('gudang.search');
    });

    // Bagian Kategori
    Route::controller(KategoriController::class)->group(function () {
        Route::get('/admin/kategori', 'index')->name('kategori');
        Route::post('/admin/kategori/create', 'create')->name('kategori.create');
        Route::put('/admin/kategori/update', 'update')->name('kategori.update');
        Route::get('/admin/kategori/delete/{id}', 'delete')->name('kategori.delete');
        Route::get('/admin/kategori', 'search')->name('kategori.search');
    });

    // Bagian Barang
    Route::controller(BarangController::class)->group(function () {
        Route::get('/admin/Databarang', 'index')->name('barang');
        Route::post('/admin/Databarang/create', 'create')->name('barang.create');
        Route::put('/admin/Databarang/update', 'update')->name('barang.update');
        Route::get('/admin/Databarang/delete/{id}', 'delete')->name('barang.delete');
        Route::get('/admin/Databarang', 'search')->name('barang.search');
    });

    // Bagian Sirkulasi Barang
    Route::controller(sirkulasiBarangController::class)->group(function () {
        Route::get('/admin/barangMasuk', 'indexBrgMasuk')->name('barangMasuk');
        Route::post('/admin/barangMasuk/create', 'createBrgMasuk')->name('barangMasuk.create');
        Route::put('/admin/barangMasuk/update/', 'updateBrgMasuk')->name('barangMasuk.update');
        Route::get('/admin/barangMasuk/delete/', 'deleteBrgMasuk')->name('barangMasuk.delete');
        Route::get('/admin/barangMasuk', 'searchBrgMasuk')->name('barangMasuk.search');

        Route::get('/admin/barangKeluar', 'indexBrgKeluar')->name('barangKeluar');
        Route::post('/admin/barangKeluar/create', 'createBrgKeluar')->name('barangKeluar.create');
        Route::put('/admin/barangKeluar/update', 'updateBrgKeluar')->name('barangKeluar.update');
        Route::get('/admin/barangKeluar/delete', 'deleteBrgKeluar')->name('barangKeluar.delete');
        Route::get('/admin/barangKeluar', 'searchBrgKeluar')->name('barangKeluar.search');
    });

    // Bagian Hak Akses
    Route::controller(HakAksesController::class)->group(function () {
        Route::get('/admin/hakAkses', 'index')->name('hakAkses');
        Route::post('/admin/hakAkses/create', 'create')->name('hakAkses.create');
    });

    // Bagian Pengguna
    Route::controller(PenggunaController::class)->group(function () {
        route::get('/admin/pengguna', 'index')->name('pengguna');
        route::post('/admin/pengguna/create', 'create')->name('pengguna.create');
        route::post('/admin/pengguna/update', 'update')->name('pengguna.update');
        route::get('/admin/pengguna/delete', 'delete')->name('pengguna.delete');
        route::get('/admin/pengguna', 'search')->name('pengguna.search');
    });
    // Bagian Supir
    Route::controller(SupirController::class)->group(function () {
        route::get('/admin/supir', 'index')->name('supir');
        route::post('/admin/supir/create', 'tambahIdPengguna')->name('supir.create');
        route::post('/admin/supir/update', 'update')->name('supir.update');
        route::get('/admin/supir/delete', 'hapusIdPengguna')->name('supir.delete');
        route::get('/admin/supir', 'search')->name('supir.search');
    });
    // Bagian outlet
    Route::controller(OutletController::class)->group(function () {
        route::get('/admin/outlet', 'index')->name('outlet');
        route::post('/admin/outlet/create', 'create')->name('outlet.create');
        route::post('/admin/outlet/update', 'update')->name('outlet.update');
        route::get('/admin/outlet/delete', 'delete')->name('outlet.delete');
        route::get('/admin/outlet', 'search')->name('outlet.search');
    });
    // Bagian Pegawai
    Route::controller(PegawaiController::class)->group(function () {
        route::get('/admin/pegawai', 'index')->name('pegawai');
        route::post('/admin/pegawai/create', 'create')->name('pegawai.create');
        route::post('/admin/pegawai/update', 'update')->name('pegawai.update');
        route::get('/admin/pegawai/delete', 'delete')->name('pegawai.delete');
        route::get('/admin/pegawai', 'search')->name('pegawai.search');
    });
    // 
});

route::group(['middleware' => ['IsOutlet']], function () {
    Route::get('/outlet/dashboard', function () {
        return view('outlet.dashboard');
    });
});
route::group(
    ['middleware' => ['IsPegawai']],
    function () {
        Route::get('/pegawai/dashboard', function () {
            return view('pegawai.dashboard');
        });
    }
);
route::group(
    ['middleware' => ['IsSupir']],
    function () {
        Route::get('/supir/dashboard', function () {
            return view('supir.dashboard');
        });
    }
);
