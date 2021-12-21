<?php

namespace Exit11\SocialLogin\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Mpcs\Core\Facades\Core;
use Mpcs\Core\Traits\ResourceTrait;

class SocialLogin extends JsonResource
{
    use ResourceTrait;

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
            'visitor_id' => $this->visitor_id,
            'visitor' => $this->whenLoaded('visitor', function () {
                return new VisitorCollection($this->visitor);
            }),
            'provider' => $this->provider,
            'social_id' => $this->social_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
