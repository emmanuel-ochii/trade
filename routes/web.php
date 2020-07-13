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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/investment', 'InvestmentsController@index')->name('investment');
// Route::get('/viewInvestment', 'InvestmentsController@viewInvestment')->name('viewInvestment');
Route::match(['POST','GET'], '/investment/create', 'InvestmentController@create');
Route::match(['POST','GET'], '/investment/store', 'InvestmentController@store');
Route::get('/withdraw', 'WithdrawalController@index')->name('withdraw');