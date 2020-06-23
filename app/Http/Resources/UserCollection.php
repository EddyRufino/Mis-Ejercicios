<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->transform(function($element) {
                return [
                    'id' => $element->id,
                    'name' => $element->name,
                    'color' => $element->color,
                    'image' => $element->image,
                ];
            })
        ];
    }
}
