<?php

namespace App\Http\Controllers\Api;

use App\Exports\LifeInsuranceExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\LifeInsuranceRequest;
use App\Http\Requests\LifeMedicalInfoRequest;
use App\Http\Resources\LifeInsuranceResource;
use App\Models\LifeInsurance;
use App\Notifications\SendVerificationCode;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;

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
        try {
            $life_insurance = LifeInsurance::create($data);
            return response($life_insurance->id, 201);
        } catch (\Throwable $th) {
            //throw $th;
            return response($th->getMessage());
        }
    }

    /**
     * Send verification code
     *
     * @param \App\Http\Requests\Request $request
     * @return \Illuminate\Http\Response
     */
    public function sendVerificationCode(Request $request)
    {
        try {
            $user = auth()->user();
            $verification_code = rand(10000, 99999);
            Cache::put('verification_code_' . $user->id . '_' . $request->id, $verification_code, now()->addHour(1));
            // $user->notify(new SendVerificationCode($user, $verification_code));
            return response($verification_code, 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response($th->getMessage());
        }
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
        unset($data['id'], $data['verification_code']);
        try {
            if ($request->verification_code == Cache::get('verification_code_' . auth()->user()->id . '_' . $request->id)) {
                $insurance->update($data);
                Cache::forget('verification_code_' . auth()->user()->id . '_' . $request->id);
                return response($data, 201);
            } else {
                return response([
                    'errors' => [
                        'verification_code' => ['کد تایید اشتباه است !!?']
                    ]
                ], 406);
            }
        } catch (\Throwable $th) {
            //throw $th;
            return response($th->getMessage());
        }
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
        try {
            return Excel::download(new LifeInsuranceExport($request->id), 'life-' . $request->id . '.xlsx');
            // return response()->download(storage_path('app') . '\\life-' . $request->id . '.xlsx');
        } catch (\Throwable $th) {
            //throw $th;
            return response($th->getMessage());
        }
    }

    /**
     * Export pdf output of insurance
     *
     * @param \App\Http\Requests\Request $request
     * @return \Illuminate\Http\Response
     */
    public function exportPdf(Request $request)
    {
        $data = new LifeInsuranceResource(LifeInsurance::where([
            'id' => $request->id,
            'user_id' => auth()->user()->id
        ])->first());
        try {
            $pdf = SnappyPdf::loadView('pdf.index', ['data' => $data->resource->toArray()])
                ->setOrientation('portrait')
                ->setOption('page-height', 335)
                ->setOption('page-width', 236);
            return response()->download($pdf->inline());
        } catch (\Throwable $th) {
            //throw $th;
            return response($th->getMessage());
        }
    }
}
