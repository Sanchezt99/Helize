<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WearResource extends JsonResource
{
    public function toArray($request)
    {
        $wearLink = 'helize.test/wears/'.$this->getId();
        return [
            'id' => $this->getId(),
            'category' => $this->getCategory(),
            'gender' => $this->getBrand(),
            'link' => $wearLink,
        ];
    }
}
