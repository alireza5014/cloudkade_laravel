<?php

namespace idegostaran\cloudkade;


use idegostaran\cloudkade\Adapter\HttpRequest;
use idegostaran\cloudkade\Services\Live\Live;
use idegostaran\cloudkade\Services\Vod\Vod;

class Cloudkade
{

    protected static $http;

    public function __construct()
    {
        self::$http = new HttpRequest();
    }

    public static function vod($method = null)
    {
        $class = new Vod();
        if ($method) {
            return $class->$method();
        }

        return $class;
    }

    public static function live($method = null)
    {

        $class = new Live();
        if ($method) {
            return $class->$method();
        }

        return $class;
    }


}
