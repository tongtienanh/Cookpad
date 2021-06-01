<?php

if (!function_exists('has_error')) {
    /**
     * @param $errors
     * @param $field
     * @return string
     */
    function has_error($errors, $field)
    {
        $field = str_replace(array('[', ']'), '', $field);
        return isset($errors) && $errors->has($field) ? 'has-error is-invalid' : '';
    }
}


if (!function_exists('get_error')) {
    /**
     * @param $errors
     * @param $field
     * @return string
     */
    function get_error($errors, $field)
    {
        $field = str_replace(array('[', ']'), '', $field);
        $helpBlock = (isset($errors) && $errors->count()) ? '<span class="help-block color_red">' . $errors->first($field) . '</span>' : '';

        return $helpBlock;
    }
}


if (!function_exists('form_input')) {
    /**
     * @param $field
     * @param array $data
     * @param string $default
     * @return mixed
     */
    function form_input($field, $data = [], $default = '')
    {
        $field = str_replace(array('[', ']'), '', $field);
        $value = old($field, $data->$field ?? $default);

        return $value;
    }
}

if (!function_exists('form_query'))
{
    /**
     * @param $field
     * @param array $data
     * @param string $default
     * @return mixed|string
     */
    function form_query($field, $data = [], $default = '')
    {
        $value = $data[$field] ?? $default;
        return $value;
    }
}

if (!function_exists('query_selected')) {
    /**
     * @param $field
     * @param $value
     * @param null $valueActive
     * @return string
     */
    function query_selected($field, $valueCompare, $valueActive = null)
    {
        $valueCurrent = \Request::get($field) ?? $valueActive;

        return ($valueCurrent !== null && $valueCurrent == $valueCompare) ? 'selected' : '';
    }
}

if (!function_exists('old_selected')) {
    /**
     * @param $field
     * @param $data
     * @param null $valueCompare
     * @return string
     */
    function old_selected($field, $data, $valueCompare = null)
    {
        $valueCurrent = old($field, $data[$field] ?? '');

        return  ($valueCurrent !== null && $valueCurrent == $valueCompare) ? 'selected' : '';
    }
}

if (!function_exists('old_checked')) {
    /**
     * @param $field
     * @param $data
     * @param null $value
     * @return string
     */
    function old_checked($field, $data, $valueCompare = null)
    {
        $valueCurrent = old($field, $data[$field] ?? '');
        return $valueCurrent === $valueCompare ? 'checked' : '';
    }
}
