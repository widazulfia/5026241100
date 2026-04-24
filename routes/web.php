<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

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

// kurang linktree.html karena saya takut nanti file bermasalah seperti pada tugas github . io
