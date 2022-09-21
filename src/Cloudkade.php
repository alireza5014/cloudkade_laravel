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

    public static function vod()
    {
        return new Vod();
    }

    public static function live()
    {
        return new Live();
    }


}
