<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LifeInsuranceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'insurance_target' => 'required',
            'birth_year' => 'required',
            'birth_month' => 'required',
            'birth_day' => 'required',
            'life_ins_duration' => 'required',
            'payment_method' => 'required',
            'annual_payment' => 'required',
            'first_job_level' => 'required',
            'first_job_level_id' => 'required',
            'divided_payment' => 'required',
            'annual_payment_increase' => 'required',
            'addon_payment_method' => 'required',
            'death_capital_any_reason_ratio' => 'required',
            'capital_increase' => 'required',
            'death_capital_incident_ratio' => '',
            'maim_ratio' => '',
            'has_medical_cost' => '',
            'additional_dangers' => '',
            'hospitalization' => '',
            'exemption' => '',
            'special_diseases_ratio' => '',
        ];
    }
}
