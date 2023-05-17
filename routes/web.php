<?php

use App\Http\Controllers\GudangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\registerController;
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


// bagian login
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login/proses', 'proses')->name('login');
});

Route::get('/login/register', [registerController::class, 'index'])->name('register');
Route::post('/login/register/actionregister', [registerController::class, 'actionregister'])->name('actionregister');

// bagian admin
Route::group(['middleware'=> ['admin']],function(){

});


// // Bagian --admin---
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
// Bagian --admin---
Route::get('/admin', function () {
    return view('admin.dashboard');
});


// Bagian Gudang
// menmapilkan data gudang
Route::get('admin/gudang', [GudangController::class, 'index']);
// menambahkan data gudang
Route::post('admin/gudang', [GudangController::class, 'create'])->name('gudang.create');
// edit data gudang
Route::get('admin/gudang/{id}', [GudangController::class, 'edit'])->name('gudang.edit');
// update data gudang
Route::put('admin/gudang', [GudangController::class, 'update'])->name('gudang.update');
// delete data gudang
Route::get('admin/gudang/delete/{id}', [GudangController::class, 'delete'])->name('gudang.delete');
// cari data gudang
Route::get('admin/gudang', [GudangController::class, 'search']);

// Bagian Rute admin
Route::get('/admin/rute', function () {
    return view('admin.rute.rute');
})->name('rute');

// Bagian Kategori ->admin
// menampilkan data kateori
Route::get('/admin/kategori', [KategoriController::class, 'index']);
// menambah kategori
Route::post('/admin/kategori', [KategoriController::class, 'create'])->name('kategori.create');
// edit kategori
Route::post('/admin/kategori/{id}', [kategoricontroller::class, 'edit'])->name('kategori.edit');
// update kategori
Route::put('/admin/kategori', [kategoricontroller::class, 'update'])->name('kategori.update');
// delete kategori
Route::get('/admin/kategori/delete/{id}', [KategoriController::class, 'delete'])->name('kategori.delete');
// cari data kategori
Route::get('/admin/kategori', [KategoriController::class, 'search']);

// Bagian Data Barang
Route::get('/admin/barang', function () {
    return view('admin.barang.Databarang');
})->name('dataBarang');
// bagaian sirkulasi barang
Route::get('/admin/barangKeluar', function () {
    return view('admin.sirkulasiBarang.barangKeluar');
})->name('barangKeluar');
Route::get('/admin/barangMasuk', function () {
    return view('admin.sirkulasiBarang.barangMasuk');
})->name('barangMasuk');

// Bagian Data Outlet
Route::get('/admin/outlet', function () {
    return view('admin.dataPengguna.outlet.Dataoutlet');
})->name('dataoutlet');

// Bagian Data Supir
Route::get('/admin/Datasupir', function () {
    return view('admin.dataPengguna.supir.Datasupir');
})->name('datasupir');

// Bagian Pegawai
Route::get('/admin/pegawai', function () {
    return view('admin.dataPengguna.pegawai.Datapegawai');
})->name('datapegawai');
// Bagian Pegawai ->hak akses
Route::get('/admin/hakAkses', function () {
    return view('admin.dataPengguna.hakakses.hakAkses');
})->name('hakakses');

// Bagian Penerimaan Barang
Route::get('/admin/penerimaanbarang', function () {
    return view('admin.penerimaanBarang.penerimaanbarang');
})->name('penerimaanbarang');

// Bagian Pengiriman
Route::get('/admin/pengiriman', function () {
    return view('admin.Pengiriman.pengiriman');
})->name('pengiriman');

// Bagian Pemesanan
Route::get('/admin/pemesanan', function () {
    return view('admin.Pemesanan.pemesanan');
})->name('pemesanan');
// Bagian jadwalpengiriman
Route::get('/admin/jadwalpengiriman', function () {
    return view('admin.jadwalpengiriman.jadwalpengiriman');
})->name('jadwalpengiriman');

// Bagian truk
Route::get('/admin/truk', function () {
    return view('admin.Truck.truk');
})->name('truk');

// Bagian Pegawai
Route::get('/pegawai', function () {
    return view('pegawai.dashboard');
});
Route::get('/pegawai/dashboard', function () {
    return view('pegawai.dashboard');
});

// Bagian Outlet
// menampilkan dashboard outlet
Route::get('/outlet/dashboard', function () {
    return view('outlet.dashboard');
})->name('dashboard');
// menampilkan stok barang
Route::get('/outlet/stokbarang', function () {
    return view('outlet.Barang.stokbarang');
})->name('stokbarang');
// bagian pemesanan
Route::get('/outlet/pemesanan', function () {
    return view('outlet.Pemesanan.pemesanan');
})->name('pemesanan');
// Bagian penerimaan barang
Route::get('/outlet/penerimaanbarang', function () {
    return view('outlet.penerimaanBarang.penerimaanbarang');
})->name('penerimaanbarang');

// Bagian supir
Route::get('/supir', function () {
    return view('supir.dashboard');
});
Route::get('/supir/dashboard', function () {
    return view('supir.dashboard');
});
// Bagian pengiriman
Route::get('/supir/pengiriman', function () {
    return view('supir.Pengiriman.pengiriman');
})->name('pengiriman');
// Bagian rute
Route::get('/supir/rute', function () {
    return view('supir.Rute.rute');
})->name('rute');