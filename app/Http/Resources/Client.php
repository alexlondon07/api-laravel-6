<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Client extends JsonResource
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
            'id' => $this->id,
            'document' => $this->document,
            'name' => $this->name,
            'phone' => $this->phone,
            'phone2' => $this->phone2,
            'nickname' => $this->nickname,
            'job' => $this->job,
            'address' => $this->address,
            'location' => $this->location,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
        ];
    }
}
