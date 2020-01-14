<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Book extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'publish_date' => $this->publish_date,
            'authors' => Author::collection($this->whenLoaded('authors')),
            'publishers' => Publisher::collection($this->whenLoaded('publishers'))
        ];
    }
}
