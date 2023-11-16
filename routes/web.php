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
    $saluto ='ciao da Laravel';
    return view('home', compact('saluto'));
});
Route::get('/second_page', function () {
    $salutoSecondaPagina ='Ciao seconda pagina Laravel';
    return view('second_page', compact('salutoSecondaPagina'));
});
