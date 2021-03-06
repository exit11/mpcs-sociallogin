<?php

namespace Exit11\SocialLogin;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Broadcast;

class SocialLoginBroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes();
        require(__DIR__ . '/../routes/channels.php');
    }
}
