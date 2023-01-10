<?php

namespace App\Http\Requests;

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
            'national_code' => 'required|string',
            'birth' => 'required',
            'mobile_number' => 'required|string',
            'ins_target_height' => 'required|integer',
            'ins_target_weight' => 'required|integer',
            'gender' => 'required|string',
            'military_service_status' => 'required|string',
            'military_service_details' => '',
            'military_service_reason' => '',
        ];
    }
}
