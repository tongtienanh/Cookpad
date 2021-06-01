<?php
if (!function_exists('get_data_user'))
{
    function get_data_user($type, $field = 'id')
    {
//        return Auth::guard($type)->user() ? Auth::guard($type)->user()->$field : '';
    }
}

if (!function_exists('get_data_json'))
{
    function get_data_json($file, $path = 'public')
    {
        switch ($path)
        {
            case 'database':
                $path = database_path($file);
                break;
            case 'absolute':
                $path = $file;
                break;
            default:
                $path = public_path($file);
        }
        $data = file_get_contents($path);
        if (!$data) return [];

        return json_decode($data, true);
    }
}

if (!function_exists('get_link'))
{
    function get_link($route = '', $link = '', $link_type = '')
    {
        if ($route)
        {
            return route($route);
        }
        if ($link_type)
        {
            return url_main($link, $link_type);
        }
        else
        {
            if ($link && $link != '#')
            {
                return url_main($link);
            }

            return '#';
        }
    }
}

if (!function_exists('url_main'))
{
    function url_main($link = '', $type = '')
    {
        switch ($type)
        {
            case 'api':
                $prefix = config('url.api');
                break;
            case 'employer':
                $prefix = config('url.employer');
                break;
            case 'company':
                $prefix = config('url.company');
                break;
            case 'main':
                $prefix = config('url.main');
                break;
            default:
                $prefix = config('url.123job');
        }

        return $prefix . $link;
    }
}
