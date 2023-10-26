<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ConfessionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"=> $this->id,
            "confession_details"=> $this->details,
            "confession_status" => $this->status,
            "category_id"=> $this->category_id,
            "category"=>new CategoryResource($this->whenLoaded("category")),
        ];
    }
}