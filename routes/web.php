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

//Route::get('/', function () {
    //return view('welcome');
//});
Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/privacy', function () {
    return view('policy');
})->name('policy');
Route::get('/faq', function () {
  $faq_prima = config('faqs_sx.faq_sx');
  $faq_dopo = config('faqs_dx.faq_dx');

    return view('faq', [
      'faq_lista_prima'=> $faq_prima,
      'faq_lista_dopo'=> $faq_dopo,

    ]);
})->name('faq');
