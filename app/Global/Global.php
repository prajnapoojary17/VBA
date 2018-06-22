<?php


if (!function_exists('debug')) {
    /**
     * check the given plugin is enabled or not
     * @param $plugin_name
     * @return bool
     */
    function debug($data)
    {
       echo "<pre>";
       print_r($data);
       echo "</pre>";
    }
}

if (!function_exists('dump')) {
    /**
     * check the given plugin is enabled or not
     * @param $plugin_name
     * @return bool
     */
    function dump($data)
    {
       echo "<pre>";
       print_r($data->toArray());
       echo "</pre>";
    }
}