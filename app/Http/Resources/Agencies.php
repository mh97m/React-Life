<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Agencies extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        if ($request['Code'] >= 10000 || !in_array($request['UnitKindId'], [201, 202, 203, 204, 207])) {
            return null;
        }
        return [
            'fanavaran_id' => $request['Code'],
            'code' => $request['Code'],
            'name' => $request['Name'],
            'last_name' => $request['LastName'],
            'national_code' => $request['NationalCode'],
            'tel' => $request['Tel'],
            'mobile' => $request['Mobile'],
            'province_id' => $request['ProvinceId'],
            'city_id' => $request['CityId'],
            'address' => $request['Address'],
            'unit_name' => $request['UnitName'],
            'unit_kind_id' => $request['UnitKindId'],
            'is_active' => $request['IsActive'],
        ];
    }
}
