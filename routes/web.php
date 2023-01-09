<?php

use App\Models\LifeInsurance;
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

Route::get('test',function () {
    dd((LifeInsurance::inRandomOrder()->first())->divided_payment);
});

Route::get('/{uri?}', function () {
    return view('welcome');
})->where('uri', '(.*)');
