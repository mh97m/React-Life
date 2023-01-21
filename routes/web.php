<?php

use App\Exports\LifeInsuranceExport;
use App\Http\Resources\LifeInsuranceResource;
use App\Models\Job;
use App\Models\LifeInsurance;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;

Route::get('test', function () {

    $data = new LifeInsuranceResource(LifeInsurance::find(12));
    return view('pdf.index', ['data' => $data->resource->toArray()]);
    // dd((LifeInsurance::inRandomOrder()->first())->birth_day);

});

Route::get('test2', function () {
    ini_set('max_execution_time', 0);
    $hashed_data1 = Hash::make(Job::all()->__toString());
    $hashed_data2 = md5(Job::all()->__toString());
    // Hash::check($value, $hashedValue);
    $data = Job::all()->__toString();
    dd(
        $hashed_data1,
        $hashed_data2,
        // sizeof($data),
        $data
        // sizeof($hashed_data)
    );

    // return Excel::download(new LifeInsuranceExport(5), 'life-' . '5' . '.xlsx');

    // $data = new LifeInsuranceResource(LifeInsurance::find(12));
    // $pdf = SnappyPdf::loadView('pdf.index', ['data' => $data->resource->toArray()]);
    // return $pdf->inline('github.pdf');

    dd(1);
});

Route::get('/{uri?}', function () {
    return view('welcome');
})->where('uri', '(.*)');

//$2y$10$1HTtUKUoX.Sp9wLfub/UqeJvP/pG8p4fMbRkjnxTRamMQEv.KOqKu
//$2y$10$cEFYSWLYb2wZffPqpG/HJOnGt0fGpgHfungdM/3KRD1HnLLjZoWh.


//6fac72b170b609bd7cbb3091f7d9f66d
//6fac72b170b609bd7cbb3091f7d9f66d