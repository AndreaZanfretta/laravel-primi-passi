<?php

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
})->name('home');
Route::get('/studenti', function () {
    $studenti = [
        'lista_studenti' => [
            'Pippo Baudo',
            'Pippo Franco',
            'Franchino',
            'Davide Balestrino'
        ]
    ];
    return view('studenti', $studenti);
})->name('studenti');
Route::get('/insegnanti', function () {
    $insegnanti = [
        'lista_insegnanti' => [
            'Topolino',
            'Paperino',
            'Pippo',
            'Pluto'
        ]
    ];
    return view('insegnanti', $insegnanti);
})->name('insegnanti');