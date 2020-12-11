<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'subject' => $this->subject->name,
            'body' => $this->body,
            'author' => $this->user->name,
            'published' => $this->created_at->diffForHumans(), // format('d F Y') = 20 Desember 2020 // diffForHumans() = 12 hours ago
        ];
    }

    public function with($request)
    {
        return ['status'=> 'Success'];
    }
}
