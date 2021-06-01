<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 2/6/18
 * Time: 4:09 PM
 */

class StringHelper
{
    private static $instance = null;

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public static function removeAccent($mystring)
    {
        $marTViet = array(
            // Chữ thường
            "à", "á", "ạ", "ả", "ã", "â", "ầ", "ấ", "ậ", "ẩ", "ẫ", "ă", "ằ", "ắ", "ặ", "ẳ", "ẵ",
            "è", "é", "ẹ", "ẻ", "ẽ", "ê", "ề", "ế", "ệ", "ể", "ễ",
            "ì", "í", "ị", "ỉ", "ĩ",
            "ò", "ó", "ọ", "ỏ", "õ", "ô", "ồ", "ố", "ộ", "ổ", "ỗ", "ơ", "ờ", "ớ", "ợ", "ở", "ỡ",
            "ù", "ú", "ụ", "ủ", "ũ", "ư", "ừ", "ứ", "ự", "ử", "ữ",
            "ỳ", "ý", "ỵ", "ỷ", "ỹ",
            "đ", "Đ", "'",
        );

        $marKoDau = array(
            /// Chữ thường
            "a", "a", "a", "a", "a", "â", "â", "â", "â", "â", "â", "ă", "ă", "ă", "ă", "ă", "ă",
            "e", "e", "e", "e", "e", "ê", "ê", "ê", "ê", "ê", "ê",
            "i", "i", "i", "i", "i",
            "o", "o", "o", "o", "o", "ô", "ô", "ô", "ô", "ô", "ô", "ơ", "ơ", "ơ", "ơ", "ơ", "ơ",
            "u", "u", "u", "u", "u", "ư", "ư", "ư", "ư", "ư", "ư",
            "y", "y", "y", "y", "y",
            "đ", "đ", "",
        );

        return str_replace($marTViet, $marKoDau, $mystring);
    }

    public static function convertStrToLower($str)
    {
        $str = trim(mb_strtolower($str));
        $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
        $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
        $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
        $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
        $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
        $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
        $str = preg_replace('/(đ)/', 'd', $str);
        $str = preg_replace('/([\s]+)/', ' ', $str);

        return $str;
    }

    public function convertVnToAlphabet($str)
    {
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
        $str = preg_replace("/(đ)/", 'd', $str);

        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
        $str = preg_replace("/(Đ)/", 'D', $str);

        return $str;
    }


    /*
	Remove HTML truoc khi add vao database
	*/
    public static function htmlSpecialbo($str)
    {
        $arrDenied  = array('<', '>', '"');
        $arrReplace = array('&lt;', '&gt;', '&quot;');
        $str        = str_replace($arrDenied, $arrReplace, $str);

        return $str;
    }

    public function buildTrigrams($keyword)
    {
        $t = "__" . $keyword . "__";
        $trigrams = "";
        for ($i = 0; $i < mb_strlen($t,"UTF-8") - 2; $i++)
        {
            $trigrams .= mb_substr($t, $i, 3, "UTF-8") . " ";
        }
        return $trigrams;
    }

    public function buildPhraseTrigrams($keyword)
    {
        $keyword = str_replace(' ','_',$keyword);
        $t = $keyword ;
        $trigrams = "";
        for ($i = 0; $i < mb_strlen($t,"UTF-8") - 2; $i++)
        {
            $trigrams .= mb_substr($t, $i, 3, "UTF-8") . " ";
        }
        return $trigrams;
    }

    public function buildTokenizeOnSpace($keyword)
    {
        $keywords = explode(" ", $keyword);
        $keywordsLength = count($keywords);
        $data = [];
        for ($i = 0; $i < $keywordsLength; $i ++)
        {
            $keywordArr = array_slice($keywords, $i, $keywordsLength);
            $keywordVi  = implode(" ", $keywordArr);
            $keywordEn  = str_slug_fix($keywordVi, " ");
            $data[]     = $keywordEn;
            $data[]     = $keywordVi;
        }
        return $data;
    }
}