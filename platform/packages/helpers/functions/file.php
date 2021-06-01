<?php
if (!function_exists('get_file_content_to_array'))
{
    function get_file_content_to_array($file = '')
    {
        $handle = fopen($file, "r");
        $arr = [];
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                if (strpos($line, '#') === 0) {
                    continue;
                } else {
                    array_push($arr, trim($line));
                }
            }
        }
        fclose($handle);
        return $arr;
    }
}

