<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\NilaiKuliahController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BolpenController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\TagihanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <i>www.malasngoding.com</i>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('pert5', function () {
    return view('pertemuan5');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('indextugas5', function () {
    return view('index5');
});

Route::get('/pertemuan5', function () {
    return view('pertemuan5');
});

Route::get('linktreetugas5', function () {
    return view('linktree5');
});

Route::get('/linktree5', function () {
    return view('linktree5');
});

Route::get('intropert1', function () {
    return view('intro1');
});

Route::get('newsp2', function () {
    return view('newsp2');
});

Route::get('news1p2', function () {
    return view('news1p2');
});

Route::get('mycssp2', function () {
    return view('mycss2');
});

Route::get('templatep3', function () {
    return view('template3');
});

Route::get('responsivep3', function () {
    return view('responsive');
});

Route::get('contoh3', function () {
    return view('contohtugasp3');
});

Route::get('nrpp4', function () {
    return view('5026241100p4');
});


Route::get('/pegawainama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// CRUD tabel pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawaitambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawaistore', [PegawaiDBController::class, 'store']);
Route::get('/pegawaiedit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawaiupdate', [PegawaiDBController::class, 'update']);
Route::get('/pegawaihapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawaicari', [PegawaiDBController::class, 'cari']);

// CRUD Nilai Kuliah
Route::get('/nilaikuliah', [NilaiKuliahController::class, 'index']);
Route::get('/nilaikuliahtambah', [NilaiKuliahController::class, 'tambah']);
Route::post('/nilaikuliahstore', [NilaiKuliahController::class, 'store']);

//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

//CRUD Bolpen
Route::get('/bolpen', [BolpenController::class, 'index'])->name('bolpen.index');
Route::get('/bolpen/create', [BolpenController::class, 'create'])->name('bolpen.create');
Route::post('/bolpen', [BolpenController::class, 'store'])->name('bolpen.store');
Route::get('/bolpen/{KodeBolpen}/edit', [BolpenController::class, 'edit'])->name('bolpen.edit');
Route::put('/bolpen/{KodeBolpen}', [BolpenController::class, 'update'])->name('bolpen.update');
Route::delete('/bolpen/{KodeBolpen}', [BolpenController::class, 'destroy'])->name('bolpen.destroy');

//CRUD Keranjang Belanja
Route::get('/keranjangbelanja', [KeranjangController::class, 'index'])->name('keranjangbelanja.index');
Route::get('/keranjangbelanja/create', [KeranjangController::class, 'create'])->name('keranjangbelanja.create');
Route::post('/keranjangbelanja', [KeranjangController::class, 'store'])->name('keranjangbelanja.store');
Route::put('/keranjangbelanja/{ID}', [KeranjangController::class, 'update'])->name('keranjangbelanja.update');
Route::delete('/keranjangbelanja/{ID}', [KeranjangController::class, 'destroy'])->name('keranjangbelanja.destroy');

// Route EAS (tagihan air)
Route::get('/eas', [TagihanController::class, 'index'])->name('tagihan_air.index');
Route::get('/eas/create', [TagihanController::class, 'create'])->name('tagihan_air.create');
Route::post('/eas', [TagihanController::class, 'store'])->name('tagihan_air.store');
