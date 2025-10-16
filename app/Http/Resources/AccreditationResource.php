<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AccreditationResource extends JsonResource
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
            'badge_title' => $this->badge_title,
            'image' => $this->image_url,
            'year' => $this->year,
            'description' => $this->description,
        ];
    }
}
