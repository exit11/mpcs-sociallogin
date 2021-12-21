<?php

namespace Exit11\SocialLogin\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Mpcs\Core\Facades\Core;
use Mpcs\Core\Traits\ResourceTrait;

class Visitor extends JsonResource
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
        $lastSegment = last(request()->segments());
        $isIndex = $lastSegment === 'visitors';
        $isEdit = $lastSegment === 'edit';
        $isShow = !$isIndex && !$isIndex;

        return [
            'id' => $this->id,
            'email' => $this->email,
            'name' => $this->name,
            // 'password' => $this->when(!$isIndex, $this->password),
            // 'password_confirmation' => $this->when(!$isIndex, $this->password),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
            'last_login' => $this->last_login,
            'last_login_ip' => $this->last_login_ip,
            'last_login_date' => $this->last_login_date,
            'social_logins' => $this->whenLoaded('socialLogins', function () {
                return new SocialLoginCollection($this->socialLogins);
            }),
        ];
    }
}
