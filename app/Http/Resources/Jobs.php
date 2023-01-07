<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Jobs extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'fanavaran_id' => $request['Id'],
            'caption' => $request['Caption'],
            'job_category_id' => $request['JobCategoryId'],
            'is_active' => $request['IsActive'],
        ];
    }
}
