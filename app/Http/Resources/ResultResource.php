<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResultResource extends JsonResource
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
            'max_score' => $this->max_score,
            'total_score' => $this->total_score,
            'exam' => ExamResource::make($this->exam)
        ];
    }
}
