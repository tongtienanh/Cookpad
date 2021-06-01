<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 7/11/19
 * Time: 16:09
 */

if (!function_exists('get_data_exception'))
{
    function get_data_exception(Exception $e)
    {
        return 'File:'. $e->getFile(). "\n".
            'Line:'. $e->getLine(). "\n".
            'Message:'. $e->getMessage();
    }
}

if (!function_exists('cli_warning'))
{
    function cli_warning_nl(Exception $e)
    {
        \CliEcho::warningnl(get_data_exception($e));
    }
}

if (!function_exists('cli_success'))
{
    function cli_success_nl(Exception $e)
    {
        \CliEcho::successnl(get_data_exception($e));
    }
}

if (!function_exists('cli_info'))
{
    function cli_info_nl(Exception $e)
    {
        \CliEcho::infonl(get_data_exception($e));
    }
}
