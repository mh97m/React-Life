<?php

namespace App\Http\Controllers;

use App\Http\Requests\LifeInsuranceRequest;
use App\Http\Resources\LifeInsuranceResource;
use App\Models\LifeInsurance;
use Illuminate\Http\Request;

class LifeInsurancesController extends Controller
{
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

        return response($life_insurance->id , 201);
        // return response(new LifeInsuranceResource($life_insurance) , 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\LifeInsuranceRequest $request
     * @return \Illuminate\Http\Response
     */
    public function storeLifeMedicalInfo(Request $request)
    {
        // $data = $request->validated();
        // $life_insurance = LifeInsurance::create($data);

        // return response(new LifeInsuranceResource($life_insurance) , 201);
    }

    /**
     * refrence created insurance to the logged in user
     *
     * @param \App\Http\Requests\LifeInsuranceRequest $request
     * @return \Illuminate\Http\Response
     */
    public function insuranced(Request $request)
    {
        $insurance = LifeInsurance::find($request->id);
        $insurance->update([
            'user_id' => auth()->user()->id
        ]);
        return response($insurance->birth_year . "/" . $insurance->birth_month . "/" . $insurance->birth_day, 200);
    }

}
