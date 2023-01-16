<?php

use App\Models\LifeInsurance;
use Hekmatinasser\Verta\Verta;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;

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

    // return Pdf::loadFile(storage_path('public').'\\Form-pishnahad.html')->stream('download.pdf');


    // dd(file_get_contents(public_path().'\\Form-pishnahad.html'));
    // $pdf = App::make('dompdf.wrapper');
    // $pdf->loadHTML('<h1>Test</h1>');
    // return $pdf->stream();
    // $pdf = App::make('dompdf.wrapper');
    // $pdf->loadFile(public_path().'\\Form-pishnahad.html');
    // return $pdf->stream();





    ini_set('max_execution_time', 0);
    $data = [];
    $pdf = Pdf::loadView('pdf.index')->setPaper('a4', 'landscape')->setWarnings(false)->stream('download.pdf');
    dd(1);
    // return $pdf->save(storage_path('app') . '\\life-' . '.pdf');
    // return $pdf->download('invoice.pdf');
    // return view('pdf.index');
    // dd((LifeInsurance::inRandomOrder()->first())->birth_day);
    // dd(storage_path().'\app\life-13.xlsx');
});

Route::get('/{uri?}', function () {
    return view('welcome');
})->where('uri', '(.*)');
