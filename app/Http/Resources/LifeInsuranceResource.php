<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LifeInsuranceResource extends JsonResource
{
    public static $wrap = false;

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'insurance_target' => $this->insurance_target,
            'birth_year' => $this->birth_year,
            'birth_month' => $this->birth_month,
            'birth_day' => $this->birth_day,
            'life_ins_duration' => $this->life_ins_duration,
            'payment_method' => $this->payment_method,
            'annual_payment' => $this->annual_payment,
            'first_job_level' => $this->first_job_level,
            'first_job_level_id' => $this->first_job_level_id,
            'second_job_level' => $this->second_job_level,
            'second_job_level_id' => $this->second_job_level_id,
            'divided_payment' => $this->divided_payment,
            'annual_payment_increase' => $this->annual_payment_increase,
            'addon_payment_method' => $this->addon_payment_method,
            'death_capital_any_reason_ratio' => $this->death_capital_any_reason_ratio,
            'capital_increase' => $this->capital_increase,
            'death_capital_incident_ratio' => $this->death_capital_incident_ratio,
            'maim_ratio' => $this->maim_ratio,
            'has_medical_cost' => $this->has_medical_cost,
            'additional_dangers' => $this->additional_dangers,
            'hospitalization' => $this->hospitalization,
            'exemption' => $this->exemption,
            'special_diseases_ratio' => $this->special_diseases_ratio,
        ];
    }
}
