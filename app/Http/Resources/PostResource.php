<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // $this = the instance of the post
        return [
            'post_id'       =>  $this->id,
            'post_title'    =>  $this->title,
            'post_content'  =>  $this->content,
            'post_type'     =>  $this->post_type,
            'author_id'     =>  $this->author_id,
            'category_id'   =>  $this->category_id,
            'meta_data'     =>  $this->meta_data,
        ];
        // return parent::toArray($request);
    }
}
