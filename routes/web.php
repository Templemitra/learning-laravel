<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

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
Route::get('country',[CountryController::class,'country']);
Route::get('delete/{id}',[CountryController::class,'delete_country']);
Route::get('edit/{id}',[CountryController::class,'edit_country']);
Route::post('update/',[CountryController::class,'update_country']);