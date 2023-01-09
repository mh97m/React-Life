<?php

use App\Models\LifeInsurance;
use Hekmatinasser\Verta\Verta;
use Carbon\Carbon;
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

Route::get('test', function () {
    dd((LifeInsurance::inRandomOrder()->first())->birth_day);
    // $now = new Carbon();
    // $now = Verta::now();
    // $max_age = (Verta::now())->subYears(65);
    // $max_age = (Carbon::now())->subYears(65);
    // $number = range($max_age->year, $now->year);
    // dd($max_age->year);
});

Route::get('/{uri?}', function () {
    return view('welcome');
})->where('uri', '(.*)');
