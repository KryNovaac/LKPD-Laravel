<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

// for php

Route::get('/soal-1php', function () {
    return view('project/crud/php/1');
});
Route::get('/soal-2php', function () {
    return view('project/crud/php/2');
});
Route::get('/soal-3php', function () {
    return view('project/crud/php/3');
});
Route::get('/soal-9php', function () {
    return view('project/crud/php/9');
});
Route::get('/soal-10php', function () {
    return view('project/crud/php/10');
});

// for js

Route::get('/soal1js', function () {
    return view('project/crud/js/1');
});
Route::get('/soal2js', function () {
    return view('project/crud/js/2');
});
Route::get('/soal3js', function () {
    return view('project/crud/js/3');
});
Route::get('/soal3Ajs', function () {
    return view('project/crud/js/3a');
});
Route::get('/soal4js', function () {
    return view('project/crud/js/4');
});
Route::get('/soal4Ajs', function () {
    return view('project/crud/js/4a');
});
Route::get('/soal5js', function () {
    return view('project/crud/js/5');
});
Route::get('/soal6js', function () {
    return view('project/crud/js/6');
});
Route::get('/soal6Ajs', function () {
    return view('project/crud/js/6a');
});


//soal 1


use App\Http\Controllers\SpecialCharacterController;

Route::get('/checker', [SpecialCharacterController::class, 'index']);
Route::post('/checker', [SpecialCharacterController::class, 'check'])->name('checker.check');

// soal 2

use App\Http\Controllers\PembelianController;

Route::get('/soal2php', [PembelianController::class, 'index'])->name('capek.index');
Route::post('/soal2php', [PembelianController::class, 'proses'])->name('capek.uang');


// soal 3
use App\Http\Controllers\FaktorialController;

Route::get('/faktorial', [FaktorialController::class, 'index'])->name('faktorial.index');
Route::post('/faktorial', [FaktorialController::class, 'calculate'])->name('faktorial.calculate');

// soal 9

use App\Http\Controllers\KoinController;

Route::get('/koin', [KoinController::class, 'index'])->name('koin.index');
Route::post('/koin', [KoinController::class, 'calculate'])->name('koin.calculate');
