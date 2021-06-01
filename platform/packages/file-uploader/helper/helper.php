<?php
if (!function_exists('static_url'))
{
    function static_url($link = '', $option = [])
    {
        return \Workable\FileUploader\FileUploader::instance()->getStaticUrl($link, $option);
    }
}

if (!function_exists('static_url_no_bucket'))
{
    function static_url_no_bucket($link = '')
    {
        return \Workable\FileUploader\FileUploader::instance()->getStaticUrlNoBucket($link);
    }
}