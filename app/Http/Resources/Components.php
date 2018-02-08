<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Components extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'category_id' => $this->category_id,
            'quantity' => $this->quantity,
            'price' => $this->price
        ];
    }
}
