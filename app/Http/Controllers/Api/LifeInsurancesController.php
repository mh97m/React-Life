<?php

namespace App\Http\Controllers\Api;

use App\Exports\LifeInsuranceExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\LifeInsuranceRequest;
use App\Http\Requests\LifeMedicalInfoRequest;
use App\Http\Resources\LifeInsuranceResource;
use App\Models\LifeInsurance;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class LifeInsurancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $insurances = LifeInsurance::where('user_id', auth()->user()->id)->get();
        return response($insurances);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\LifeInsurance $insurance
     * @return \Illuminate\Http\Response
     */
    public function destroy(LifeInsurance $insurance)
    {
        $insurance->delete();

        return response("", 204);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\LifeInsuranceRequest $request
     * @return \Illuminate\Http\Response
     */
    public function storeLifeCompare(LifeInsuranceRequest $request)
    {
        $data = $request->validated();
        $life_insurance = LifeInsurance::create($data);

        return response($life_insurance->id, 201);
        // return response(new LifeInsuranceResource($life_insurance) , 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\LifeMedicalInfoRequest $request
     * @return \Illuminate\Http\Response
     */
    public function storeLifeMedicalInfo(LifeMedicalInfoRequest $request)
    {
        $insurance = LifeInsurance::find($request->id);
        $data = $request->validated();
        unset($data['id']);
        try {
            $insurance->update($data);
        } catch (\Throwable $th) {
            //throw $th;
            return response($th->getMessage());
        }

        return response($data, 201);
    }

    /**
     * refrence created insurance to the logged in user
     *
     * @param \App\Models\LifeInsurance $insurance
     * @return \Illuminate\Http\Response
     */
    public function assginInsuranceToUser(LifeInsurance $insurance)
    {
        // $insurance = LifeInsurance::find($request->id);
        if (!$insurance->user_id) {
            $insurance->update([
                'user_id' => auth()->user()->id
            ]);
        } elseif ($insurance->user_id != auth()->user()->id) {
            return response("Access forbidden", 403);
        }
        return response($insurance->birth_year . "/" . $insurance->birth_month . "/" . $insurance->birth_day, 200);
    }

    /**
     * Check validation of national code
     *
     * @param \App\Http\Requests\Request $request
     * @return \Illuminate\Http\Response
     */
    public function checkNationalCode(Request $request)
    {
        // $insurance = LifeInsurance::where("national_code", $request->national_code);
        return response($request->national_code . "---" . $request->birth, 200);
    }

    /**
     * Export excel output of insurance
     *
     * @param \App\Http\Requests\Request $request
     * @return \Illuminate\Http\Response
     */
    public function exportExcel(Request $request)
    {
        Excel::store(new LifeInsuranceExport($request->id), 'life-' . $request->id . '.xlsx', 'local');
        return response()->download(storage_path('app') . '\\life-' . $request->id . '.xlsx');
    }

    /**
     * Export pdf output of insurance
     *
     * @param \App\Http\Requests\Request $request
     * @return \Illuminate\Http\Response
     */
    public function exportPdf(Request $request)
    {
        $data = new LifeInsuranceResource(LifeInsurance::find($request->id));
        // return response(gettype($data->resource->toArray()));
        // return response(storage_path('app') . '\\life-' . $request->id . '.pdf');
        try {
            // return response($data);
            // Pdf::loadView('pdf.index', $data)->save(storage_path('app') . '\\life-' . $request->id . '.pdf');
            // return response()->download(storage_path('app') . '\\life-' . $request->id . '.pdf');
            $pdf = Pdf::loadView('pdf.index', $data->resource->toArray());
            $pdf->save(storage_path('app') . '\\life-' . $request->id . '.pdf');
            // return response()->download(storage_path('app') . '\\life-' . $request->id . '.pdf');
            return true;
        } catch (\Throwable $th) {
            //throw $th;
            return response($th->getMessage());
        }
    }
}
