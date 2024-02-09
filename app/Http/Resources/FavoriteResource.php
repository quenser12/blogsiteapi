<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FavoriteResource extends JsonResource
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
                "book_id" => (string) $this->book_id,
                "user_id" => (string)$this->user_id,
                // "application" => new ApplicationResource($this->whenLoaded('belongsToApplication'))
                
            ]
        ];
    }
}
