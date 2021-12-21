<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use Mpcs\Core\Facades\Core;

// Api Route
Route::group([
    'as'            => Core::getConfigString('route_name_prefix'),
    'prefix'        => Core::getConfig('url_prefix'),
    'namespace'     => 'Exit11\SocialLogin\Http\Controllers\Api',
    'middleware'    => Core::getConfig('route.middleware'),
], function (Router $router) {

    // 방문자 관리
    $router->resource('visitors', 'VisitorController')->names('visitors');

    // 방문자 로그
    //$router->resource('visitor_logs', 'VisitorLogController')->names('visitor_logs')->only(['index', 'destroy']);
});


// Blade Route
Route::group([
    'as'            => Core::getConfigString('ui_route_name_prefix'),
    'prefix'        => Core::getConfig('ui_url_prefix'),
    'namespace'     => 'Exit11\SocialLogin\Http\Controllers\Blade',
    'middleware'    => config('mpcs.route.middleware'),
], function (Router $router) {

    // 방문자 관리
    $router->get('visitors/list', 'VisitorController@list')->name('visitors.list');
    $router->resource('visitors', 'VisitorController')->names('visitors');

    // 방문자 로그
    // $router->get('visitor_logs/list', 'VisitorLogController@list')->name('visitor_logs.list');
    // $router->resource('visitor_logs', 'VisitorLogController')->names('visitor_logs')->only(['index', 'destroy']);
});

// Non Auth : Web
Route::group([
    'as'            => Core::getConfigString('ui_route_name_prefix'),
    'prefix'        => "visitors",
    'namespace'     => 'Exit11\SocialLogin\Http\Controllers\Auth',
    'middleware'    => ['web'],
], function (Router $router) {

    // // 이메일 가입 인증
    // $router->post('email/resend', 'VerificationController@resend')->name('verification.resend');
    // $router->get('email/verify', 'VerificationController@show')->name('verification.notice');
    // $router->get('email/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify');

    // // 비밀번호 찾기
    // $router->post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    // $router->get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    // $router->post('password/reset', 'ResetPasswordController@reset')->name('password.update');
    // $router->get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');

    // // 비밀번호 찾기 확인
    // $router->post('password/confirm', 'ConfirmPasswordController@confirm');
    // $router->get('password/confirm', 'ConfirmPasswordController@showConfirmForm')->name('password.confirm');

    // // 방문자 로그인 세션체크
    // $router->post('auth/login', 'AuthController@postLogin')->name('session.store');

    // // 소셜 로그인 - 콜백 함수에서 회원 로그인 여부로 분기
    // $router->get('social/{provider}', 'AuthController@socialLogin')->name('auth.social');

    // // 회원가입
    // $router->post('auth/register', 'AuthController@register')->name('auth.create');
});
