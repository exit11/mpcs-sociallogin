<?php

namespace Exit11\SocialLogin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Mpcs\Core\Facades\Core;
use Mpcs\Core\Traits\RequestTrait;

class VisitorRequest extends FormRequest
{
    use RequestTrait;

    public function rules()
    {
        $rules = $this->getRequestRules();
        if ($rules != null) {
            return $rules;
        }

        $rules = [
            'POST' => [],
            'PUT' => [],
        ];

        return $rules[$this->method()] ?? [];
    }
}
