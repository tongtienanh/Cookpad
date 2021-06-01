<?php
if (!function_exists('platform_path')) {
    /**
     * @return string
     * @author HungNguyen
     */
    function platform_path($path = null)
    {
        return base_path('platform' . DIRECTORY_SEPARATOR . $path);
    }
}

if (! function_exists('asset')) {
    /**
     * Generate an asset path for the application.
     *
     * @param  string  $path
     * @param  bool    $secure
     * @return string
     */
    function asset($path, $secure = null)
    {
        return app('url')->url($path, $secure);
    }
}


if (!function_exists('cdn'))
{
    // global CDN link helper function
    function cdn( $asset ){

        // Verify if KeyCDN URLs are present in the config file
        if( !Config::get('cdn.cdn'))
        {
            return asset( $asset );
        }

        // Get file name incl extension and CDN URLs
        $cdns = Config::get('cdn.cdn');
        $assetName = basename( $asset );

        // Remove query string
        $assetName = explode("?", $assetName);
        $assetName = $assetName[0];

        // Select the CDN URL based on the extension
        foreach( $cdns as $cdn => $types ) {
            if( preg_match('/^.*\.(' . $types . ')$/i', $assetName) )
                return cdnPath($cdn, $asset);
        }

        // In case of no match use the last in the array
        end($cdns);
        return cdnPath( key( $cdns ) , $asset);
    }
}

if (!function_exists('cdnPath'))
{
    function cdnPath($cdn, $asset) {
        return  "//" . rtrim($cdn, "/") . "/" . ltrim( $asset, "/");
    }
}

if (! function_exists('mix')) {
    /**
     * Get the path to a versioned Mix file.
     *
     * @param  string  $path
     * @param  string  $manifestDirectory
     * @return \Illuminate\Support\HtmlString|string
     *
     * @throws \Exception
     */
    function mix($path, $manifestDirectory = '')
    {
        return app(\Workable\Base\Supports\Mix::class)(...func_get_args());
    }
}
