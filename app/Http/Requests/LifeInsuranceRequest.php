<?php

namespace App\Http\Requests;

use Hekmatinasser\Verta\Verta;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        $now = Verta::now();
        $max_age = (Verta::now())->subYears(65);
        return [
            'insurance_target' => [
                'required',
                Rule::in(["خودم", "همسر", "فرزند", "پدر", "مادر", "خواهر", "برادر"]),
            ],
            'birth_year' => [
                'required',
                'integer',
                'between:' . $max_age->year . ',' . $now->year . ''
            ],
            'birth_month' => [
                'required',
                'integer',
                'between:1,12'
            ],
            'birth_day' => [
                'required',
                'integer',
                'between:1,31'
            ],
            'life_ins_duration' => [
                'required',
                'integer',
                'between:5,30'
            ],
            'payment_method' => [
                'required',
                Rule::in(["1", "2", "4", "12"]),
            ],
            'annual_payment' => 'required|integer',
            'first_job_level' => 'required',
            'first_job_level_id' => 'required',
            'divided_payment' => 'required|integer',
            'annual_payment_increase' => 'required',
            'addon_payment_method' => [
                'required',
                Rule::in(["0", "1"]),
            ],
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
