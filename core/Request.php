<?php
/*
    This File handles the request URI and the Method
*/

class Request
{
    public static function uri()
    {
        return trim(
                parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
            , '/');
    }

    public static function method()
    {
       return  $_SERVER['REQUEST_METHOD'];
    }
}