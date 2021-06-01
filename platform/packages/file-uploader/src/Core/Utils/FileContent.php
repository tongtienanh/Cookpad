<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 6/26/19
 * Time: 13:53
 */

namespace Workable\FileUploader\Core\Utils;


class FileContent
{
    /**
     * B
     * @param      $link
     * @param bool $ssl
     * @return bool|string
     * User: Hungokata
     * Date: 8/14/19
     */
    public static function getContent($link, $ssl = true)
    {
        $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"     =>false,
                "verify_peer_name" =>false,
            ),
        );
        return @file_get_contents($link, false, stream_context_create($arrContextOptions));
    }
}