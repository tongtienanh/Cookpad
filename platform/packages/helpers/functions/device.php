<?php

if (!function_exists('detect_device'))
{
    function detect_device()
    {
        $instance = \App\Core\MobileDetectSingleton::instance();
        return $instance;
    }
}
