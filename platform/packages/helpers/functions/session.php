<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 11/29/18
 * Time: 5:21 PM
 */
if (!function_exists('has_session'))
{
    function has_session($type)
    {
        return \Illuminate\Support\Facades\Session::has($type);
    }
}

if (!function_exists('get_session'))
{
    function get_session($type)
    {
        return \Illuminate\Support\Facades\Session::get($type);
    }
}