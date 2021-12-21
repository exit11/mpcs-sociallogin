<?php

namespace Exit11\SocialLogin\Facades;

use Illuminate\Support\Facades\Facade;

class SocialLogin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Exit11\SocialLogin\SocialLogin::class;
    }
}
