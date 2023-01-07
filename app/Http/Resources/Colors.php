<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Colors extends JsonResource
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
            'name' => $request['Name'],
            'caption' => $request['Caption'],
            'is_active' => $request['IsActive'],
        ];
    }
}
