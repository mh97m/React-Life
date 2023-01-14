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
            'national_code' => $this->national_code,
            'mobile_number' => $this->mobile_number,
            'ins_target_height' => $this->ins_target_height,
            'ins_target_weight' => $this->ins_target_weight,
            'gender' => $this->gender,
            'military_service_status' => $this->military_service_status,
            'military_service_details' => $this->military_service_details,
            'military_service_reason' => $this->military_service_reason,
            'father_life_status' => $this->father_life_status,
            'father_age' => $this->father_age,
            'father_death_reason' => $this->father_death_reason,
            'mother_life_status' => $this->mother_life_status,
            'mother_age' => $this->mother_age,
            'mother_death_reason' => $this->mother_death_reason,
            'family_health_history' => $this->family_health_history,
            'family_health_history_reason' => $this->family_health_history_reason,
            'smoking_status' => $this->smoking_status,
            'hospitalization_status' => $this->hospitalization_status,
            'hospitalization_reason' => $this->hospitalization_reason,
            'physical_impairment' => $this->physical_impairment,
            'drug_usage' => $this->drug_usage,
            'health_status' => $this->health_status,
            'disease_type' => $this->disease_type,
            'weight_loss' => $this->weight_loss,
            'weight_loss_reason' => $this->weight_loss_reason,
            'cretaed_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
