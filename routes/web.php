<?php

use Illuminate\Support\Facades\Route;

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
    $titlo_Num ='Lista di numeri';
    $limit = 20;
    return view('home', compact('titlo_Num','limit'));
});
Route::get('/second_page', function () {
    $salutoSecondaPagina ='Lista di frutta';
    $fruits = ["mela", "banana", "kiwi", "fragola", "ananas", "uva", "arancia", "pesca", "ciliegia", "pera"];
    return view('second_page', compact('salutoSecondaPagina', 'fruits'));
});
