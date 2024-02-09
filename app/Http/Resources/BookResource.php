<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => (string)$this->id,
            "attributes"=>[
                "admin_id" => (string) $this->admin_id,
                "title" => (string)$this->title,
                "tags" => (string)$this->tags,
                // "application" => new ApplicationResource($this->whenLoaded('belongsToApplication'))
                
            ]
        ];
    }
}
