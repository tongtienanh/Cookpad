<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 11/7/18
 * Time: 2:03 PM
 */
if (!function_exists('access_bot')) {
    function access_bot()
    {
        $userAgent = @$_SERVER['HTTP_USER_AGENT'];
        $codeGG    = ['googlebot', 'indeed', 'jobstreet'];
        return (\Illuminate\Support\Str::contains(strtolower($userAgent), $codeGG)) ? true : false;
    }
}

if (!function_exists('not_bot')) {
    function not_bot()
    {
        $userAgent = @$_SERVER['HTTP_USER_AGENT'];
        $codeGG    = ['googlebot', 'indeed', 'jobstreet'];
        return !(Str::contains(strtolower($userAgent), $codeGG)) ? true : false;
    }
}

if (!function_exists('ip_user_client')) {
    function ip_user_client()
    {
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if (isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
        else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if (isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';

        return $ipaddress;
    }
}

if (!function_exists('render_ga')) {
    function render_ga()
    {
        if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false && app()->environment() !== 'local') {
            return "<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-118676230-1\"></script>
                    <script>
                        window.dataLayer = window.dataLayer || [];
                
                        function gtag() {
                            dataLayer.push(arguments);
                        }
                        gtag('js', new Date());
                        gtag('config', 'UA-118676230-1');
                    </script>
                    ";
        }
    }
}

if (!function_exists('remove_http'))
{
    function remove_http($url = "")
    {
        $url = trim($url, '/');
        // If scheme not included, prepend it
        if (!preg_match('#^http(s)?://#', $url)) $url = 'http://' . $url;

        $urlParts = parse_url($url);

        // remove www
        $domain = preg_replace('/^www\./', '', $urlParts['host']);
        return $domain . $urlParts['path'];
    }
}
