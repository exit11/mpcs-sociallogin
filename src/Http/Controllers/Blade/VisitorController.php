<?php

namespace Exit11\SocialLogin\Http\Controllers\Blade;

use Exit11\SocialLogin\Http\Controllers\Api\VisitorController as Controller;
use Exit11\SocialLogin\Http\Requests\VisitorRequest as Request;
use Exit11\SocialLogin\Facades\SocialLogin;

class VisitorController extends Controller
{

    /**
     * index
     * @param  mixed $request
     * @return view
     */
    public function index(Request $request)
    {
        return view(SocialLogin::theme('visitors.index'))->withInput($request->flash());
    }

    /**
     * list
     * @param  mixed $request
     * @return view
     */
    public function list(Request $request)
    {
        $datas = $this->service->index();
        return view(SocialLogin::theme('visitors.partials.list'), compact('datas'))->withInput($request->flash());
    }
}
