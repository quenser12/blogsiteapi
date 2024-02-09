<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ChapterResource extends JsonResource
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
                "book_id" => (string) $this->admin_id,
                "title" => (string)$this->title,
                "content" => (string)$this->content,
                // "application" => new ApplicationResource($this->whenLoaded('belongsToApplication'))
                
            ]
        ];
    }
}
