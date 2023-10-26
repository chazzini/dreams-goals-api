<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GoalResource extends JsonResource
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
            "goal_target"=>  $this->target,
            "goal_image"=>$this->image,
            "goal_start_date"=> $this->start_date->format("m/d/Y"),
            "goal_completion_date"=> $this->completion_date->format("m/d/Y"),
            "goal_status"=> $this->status,
            "category_id"=> $this->category_id,
            "category"=> new CategoryResource($this->category),
        ];
    }
}