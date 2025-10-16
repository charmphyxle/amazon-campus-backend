<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TestimonialResource extends JsonResource
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
            'content' => $this->content,
            'name' => $this->name,
            'designation' => $this->designation,
            'career_before' => $this->career_before,
            'career_after' => $this->career_after,
            'class_year' => $this->class_year,
            'batch' => $this->batch,
        ];
    }
}
