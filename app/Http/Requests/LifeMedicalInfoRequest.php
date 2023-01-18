<?php

namespace App\Http\Requests;

use App\Models\LifeInsurance;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LifeMedicalInfoRequest extends FormRequest
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
            'id' => 'required',
            'national_code' => [
                'required',
                'string',
                Rule::unique(LifeInsurance::class)
            ],
            // 'birth' => 'required',
            'mobile_number' => 'required|string',
            'ins_target_height' => 'required|integer',
            'ins_target_weight' => 'required|integer',
            'gender' => 'required|string',
            'military_service_status' => '',
            'military_service_details' => '',
            'military_service_reason' => '',
            'father_life_status' => 'required',
            'father_age' => 'required|integer',
            'father_death_reason' => '',
            'mother_life_status' => 'required',
            'mother_age' => 'required|integer',
            'mother_death_reason' => '',
            'family_health_history' => 'required',
            'family_health_history_reason' => '',
            'smoking_status' => 'required',
            'hospitalization_status' => 'required',
            'hospitalization_reason' => '',
            'physical_impairment' => '',
            'drug_usage' => '',
            'health_status' => 'required',
            'disease_type' => '',
            'weight_loss' => 'required',
            'weight_loss_reason' => '',
            'verification_code' => 'required',
        ];
    }
}
