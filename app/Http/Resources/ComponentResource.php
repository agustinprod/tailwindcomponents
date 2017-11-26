<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ComponentResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'tags' => TagResource::collection($this->tags),
            'html' => $this->html,
            'author' => [
                'isAnon' => $this->author->name === 'anonymous',
                'name' => $this->author->name,
            ],
            'date' => $this->created_at,
            'ago' => $this->created_at->diffForHumans(),
        ];
    }
}
