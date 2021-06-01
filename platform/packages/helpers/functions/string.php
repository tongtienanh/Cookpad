<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 5/23/19
 * Time: 22:51
 */
if (!function_exists('plaintext'))
{
    function plaintext($str)
    {
        $str = strip_tags($str);
        $str = str_replace(["\xC2\xA0", "\xE2\x80\x80", "\xE2\x80\x81", "\xE2\x80\x82", "\xE2\x80\x83", "\xE2\x80\x84", "\xE2\x80\x85", "\xE2\x80\x86", "\xE2\x80\x87", "\xE2\x80\x88", "\xE2\x80\x89", "\xE2\x80\x8A", "\xE2\x80\xAF", "\xE2\x81\x9F", "\xE3\x80\x80"], "", $str);
        $str = str_replace('&nbsp;', '', $str);
        $str = html_entity_decode($str, ENT_QUOTES | ENT_COMPAT , 'UTF-8');
        $str = html_entity_decode($str, ENT_HTML5, 'UTF-8');
        $str = html_entity_decode($str);
        $str = htmlspecialchars_decode($str);
        $str = preg_replace("/\(.*?\)/i", "", $str);
        $str = trim($str);
        return $str;
    }
}

if (!function_exists('remove_emoji_charecter'))
{
    /**
     * Remove emoji charecter
     * @param $string
     * @return null|string|string[]
     */
    function remove_emoji_charecter($string)
    {
        // Match Emoticons
        $regex_emoticons = '/[\x{1F600}-\x{1F64F}]/u';
        $clear_string = preg_replace($regex_emoticons, '', $string);

        // Match Miscellaneous Symbols and Pictographs
        $regex_symbols = '/[\x{1F300}-\x{1F5FF}]/u';
        $clear_string = preg_replace($regex_symbols, '', $clear_string);

        // Match Transport And Map Symbols
        $regex_transport = '/[\x{1F680}-\x{1F6FF}]/u';
        $clear_string = preg_replace($regex_transport, '', $clear_string);

        // Match Miscellaneous Symbols
        $regex_misc = '/[\x{2600}-\x{26FF}]/u';
        $clear_string = preg_replace($regex_misc, '', $clear_string);

        // Match Dingbats
        $regex_dingbats = '/[\x{2700}-\x{27BF}]/u';
        $clear_string = preg_replace($regex_dingbats, '', $clear_string);

        $clear_string = str_replace(["�"], "", $clear_string);
        // Match Flags
        $regexDingbats = '/[\x{1F1E6}-\x{1F1FF}]/u';
        $clear_string = preg_replace($regexDingbats, '', $clear_string);

        // Others
        $regexDingbats = '/[\x{1F910}-\x{1F95E}]/u';
        $clear_string = preg_replace($regexDingbats, '', $clear_string);

        $regexDingbats = '/[\x{1F980}-\x{1F991}]/u';
        $clear_string = preg_replace($regexDingbats, '', $clear_string);

        $regexDingbats = '/[\x{1F9C0}]/u';
        $clear_string = preg_replace($regexDingbats, '', $clear_string);

        $regexDingbats = '/[\x{1F9F9}]/u';
        $clear_string = preg_replace($regexDingbats, '', $clear_string);

        return $clear_string;
    }
}

if (!function_exists("replace_multi_br"))
{
    function replace_multi_br($text)
    {
        $text = preg_replace('#(<br *\/?>\s*(&nbsp;)*)+#', '<br>', $text);
        return $text;
    }
}

if (!function_exists('clear_character_spec'))
{
    function clear_character_spec($text)
    {
        $text = preg_replace('/[~\-=_-]{3,}/', '', $text);
        return $text;
    }
}

if (!function_exists('cut_string'))
{
    function cut_string($str, $length, $char = " ...")
    {
        //Nếu chuỗi cần cắt nhỏ hơn $length thì return luôn
        $strlen = mb_strlen($str, "UTF-8");
        if ($strlen <= $length) return $str;

        //Cắt chiều dài chuỗi $str tới đoạn cần lấy
        $substr = mb_substr($str, 0, $length, "UTF-8");

        if (mb_substr($str, $length, 1, "UTF-8") == " ") return $substr . $char;

        //Xác định dấu " " cuối cùng trong chuỗi $substr vừa cắt
        $strPoint = mb_strrpos($substr, " ", "UTF-8");

        //Return string
        if ($strPoint < $length - 20) return $substr . $char;
        else return mb_substr($substr, 0, $strPoint, "UTF-8") . $char;
    }
}

if (!function_exists('remove_character_special'))
{
    function remove_character_special($str)
    {
        $strSpecial = array( chr(9), chr(10), chr(13), '"', "?", ":", "*", "%", "|",
                             "\\", "‘", "’", '“', '”', "&nbsp;", '@', '~', '[', ']', '(', ')', "'", "'", '$', '&',"`",
                             '^',"–", "&quot;","&#34;","\"","&apos;","&#39;","'","&laquo;","&#171;","«","&raquo;","&#187;","»",":",
                             "“","”","(",")","!","_","-","[","]","{","}","|","\\","%","@","^","*","=",";",
                             "<",">","...","…");

        $str = str_replace($strSpecial, " ", $str);
        $str = trim($str);
        $str = trim(preg_replace('/[\s|&|\/]+/', '-', $str));
        $str = preg_replace('/ +/', ' ', $str);
        return mb_strtolower($str);

    }
}

if (!function_exists('str_slug_fix'))
{
    function str_slug_fix($str, $separator="-", $language = 'en')
    {
        $str = remove_character_special($str);
        return str_slug($str, $separator, $language);
    }
}

if (!function_exists('change_number'))
{
    function change_number($stringInput)
    {
        $arr = preg_replace_callback('/[0-9]+/', function ($matches) {
            return str_repeat('*', strlen($matches[0]));
        }, $stringInput);
        $arr = (array)$arr;
        $arr = array_unique($arr);
        return $arr[0] ?? null;
    }
}


if (!function_exists('echo_array'))
{
    function echo_array($array)
    {
        if (!empty($array))
        {
            echo "<pre>";
            print_r($array);
            echo "</pre>";
        }
        else
        {
            echo "ko co hang";
        }
    }
}

if (!function_exists('remove_html'))
{
    function remove_html($string)
    {
        $string = preg_replace ('/<script.*?\>.*?<\/script>/si', ' ', $string);
        $string = preg_replace ('/<style.*?\>.*?<\/style>/si', ' ', $string);
        $string = preg_replace ('/<.*?\>/si', ' ', $string);
        $string = str_replace ('&nbsp;', ' ', $string);
        return $string;
    }
}

if (!function_exists('random'))
{
    function random()
    {
        $rand_value = "";
        $rand_value .= rand(1000, 9999);
        $rand_value .= chr(rand(65, 90));
        $rand_value .= rand(1000, 9999);
        $rand_value .= chr(rand(97, 122));
        $rand_value .= rand(1000, 9999);
        $rand_value .= chr(rand(97, 122));
        $rand_value .= rand(1000, 9999);

        return $rand_value;
    }
}

if (!function_exists("convert_str_to_array"))
{
    /**
     * Convert a string to a array
     * @param string $name
     * @return array
     */
    function convert_str_to_array($name='')
    {
        $nameArr = explode("\r\n", $name);
        $dataKeyword = [];
        if (!$nameArr) return $dataKeyword;
        foreach ($nameArr as $nameItem)
        {
            $name = explode("|", $nameItem);
            $name = array_map('trim',$name);
            $dataKeyword = array_merge($dataKeyword, $name);
        }

        return $dataKeyword;
    }
}
