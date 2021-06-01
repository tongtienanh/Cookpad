<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 6/23/19
 * Time: 15:48
 */

namespace Workable\FileUploader\Core\Utils;


class MimeType
{
    /**
     * B
     * @param $link
     * @return array|mixed|null
     * User: Hungokata
     * Date: 8/14/19
     */
    public function getMimeType($link)
    {
        $mime = $this->getContent($link);
        $mime = $mime ? explode("/", $mime) : [];
        $mime = $mime[1] ?? null;
        return $mime;
    }

    /**
     * B
     * @param $link
     * @return null
     * User: Hungokata
     * Date: 8/14/19
     */
    protected function getContent($link)
    {
        $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        );

        @file_get_contents($link, false, stream_context_create($arrContextOptions));
        $pattern = "/^content-type\s*:\s*(.*)$/i";
        if (($header = array_values(preg_grep($pattern, $http_response_header))) &&
            (preg_match($pattern, $header[0], $match) !== false)) {
            $content_type = $match[1];
            return $content_type;
        }

        return null;
    }
}