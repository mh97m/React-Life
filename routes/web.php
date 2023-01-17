<?php

use Illuminate\Support\Facades\Route;

Route::get('test', function () {

    ini_set('max_execution_time', 0);

    $data = [
        'foo' => 'bar',
    ];

    $pdf = PDF::loadView('pdf.index');
    return $pdf->download('invoice.pdf');

    dd(1);
    // $pdf = Pdf::loadView('pdf.index', $data);
    // return $pdf->save(storage_path('app') . '\\life-' . '.pdf');
});

Route::get('test2', function () {
    return view('pdf.index');
    // dd((LifeInsurance::inRandomOrder()->first())->birth_day);
});

Route::get('/{uri?}', function () {
    return view('welcome');
})->where('uri', '(.*)');
