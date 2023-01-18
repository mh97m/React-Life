<?php

use App\Exports\LifeInsuranceExport;
use App\Http\Resources\LifeInsuranceResource;
use App\Models\LifeInsurance;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Support\Facades\Route;

Route::get('test', function () {

    $data = new LifeInsuranceResource(LifeInsurance::find(12));
    return view('pdf.index', ['data' => $data->resource->toArray()]);
    // dd((LifeInsurance::inRandomOrder()->first())->birth_day);

});

Route::get('test2', function () {
    ini_set('max_execution_time', 0);

    // return Excel::download(new LifeInsuranceExport(5), 'life-' . '5' . '.xlsx');

    // $data = new LifeInsuranceResource(LifeInsurance::find(12));
    // $pdf = SnappyPdf::loadView('pdf.index', ['data' => $data->resource->toArray()]);
    // return $pdf->inline('github.pdf');

    dd(1);
});

Route::get('/{uri?}', function () {
    return view('welcome');
})->where('uri', '(.*)');
