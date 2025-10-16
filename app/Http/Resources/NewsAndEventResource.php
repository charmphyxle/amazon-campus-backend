<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NewsAndEventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'title' => $this->title,
            'badge_title' => $this->badge_title,
            'short_description' => $this->short_description,
            'description' => $this->description,
            'start_date' => $this->start_date,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'location' => $this->location,
            'organizer' => $this->organizer,
            'contact' => $this->contact,
            'phone' => $this->phone,
            'image' => $this->image_url,
        ];
        // return parent::toArray($request);
    }
}
