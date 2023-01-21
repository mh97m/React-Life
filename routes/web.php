<?php

use App\Exports\LifeInsuranceExport;
use App\Http\Resources\LifeInsuranceResource;
use App\Models\Job;
use App\Models\LifeInsurance;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;

Route::get('test', function () {

    $data = new LifeInsuranceResource(LifeInsurance::inRandomOrder()->get());
    dd($data);

    // return view('pdf.index', ['data' => $data->resource->toArray()]);

    // dd((LifeInsurance::inRandomOrder()->first())->birth_day);

    // return Excel::download(new LifeInsuranceExport(5), 'life-' . '5' . '.xlsx');

    // $data = new LifeInsuranceResource(LifeInsurance::find(12));
    // $pdf = SnappyPdf::loadView('pdf.index', ['data' => $data->resource->toArray()]);
    // return $pdf->inline('github.pdf');

});

Route::get('test2', function () {
    ini_set('max_execution_time', 0);
    $data = json_encode(Job::get(['fanavaran_id', 'caption']), JSON_UNESCAPED_UNICODE );
    dd(
        // $data
        // $data->__toString(),
        file_get_contents(base_path('react-life-form/src/jobs.json')),
        Hash::check($data, Hash::make(file_get_contents(base_path('react-life-form/src/jobs.json')))),
        Hash::make($data) ,
        Hash::make(file_get_contents(base_path('react-life-form/src/jobs.json')))
    );
});

Route::get('/{uri?}', function () {
    return view('welcome');
})->where('uri', '(.*)');

//$2y$10$1HTtUKUoX.Sp9wLfub/UqeJvP/pG8p4fMbRkjnxTRamMQEv.KOqKu
//$2y$10$cEFYSWLYb2wZffPqpG/HJOnGt0fGpgHfungdM/3KRD1HnLLjZoWh.


//6fac72b170b609bd7cbb3091f7d9f66d
//6fac72b170b609bd7cbb3091f7d9f66d