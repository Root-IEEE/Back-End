<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VideoResource extends JsonResource
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
            'id' => $this->id,
            'video' => $this->video,
            'thumbnail'=>$this->thumbnail,
            'title' => $this->title,
            'description' => $this->description,
            'user_id' => $this->user_id,
            'roles' => RoleResource::collection($this->user->roles),
            'comments'=>CommentResource::collection($this->comments),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];       }
}
