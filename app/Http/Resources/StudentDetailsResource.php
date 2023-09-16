<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentDetailsResource extends JsonResource
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
            'father_phone' => $this->father_phone,
            'mother_phone' => $this->mother_phone,
            'class_name' => $this->class_name,
            'user_id' => $this->user_id,
        ];    }
}
