<?php

namespace Exit11\SocialLogin;

use Exit11\SocialLogin\Models;
use Exit11\SocialLogin\Policies;
use Mpcs\Core\Facades\Core;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class SocialLoginAuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Models\Visitor::class => Policies\VisitorPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        // Auth
        Auth::shouldUse(Core::getConfig('auth_guard'));
        $this->registerPolicies();
    }
}
