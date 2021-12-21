<?php

namespace Exit11\SocialLogin;

class SocialLogin
{

    /**
     * menuTitle
     *
     * @param  mixed $title
     * @return void
     */
    public static function menuTitle($default, $title = null)
    {
        return $title ? trans($title) : trans($default);
    }

    /**
     * VIEW THEME 설정
     * @return string {default: 'default'}
     */
    public static function theme($view, $template = null)
    {
        $viewTemplate = empty($template) ? 'default' : $template;
        return 'mpcs-sociallogin::' . $viewTemplate . '.' . $view;
    }
}
