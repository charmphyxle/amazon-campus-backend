<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GalleryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);

        return [
            'title' => $this->title,
            'description' => $this->description,
            'category' => $this->category,
            'slug' => $this->slug,
            'images' => GalleryImageResource::collection($this->whenLoaded('images')),
        ];
    }
}
