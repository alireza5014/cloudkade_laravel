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

    private static function vod()
    {
        return new Vod();
    }

    private static function live()
    {
        return new Live();
    }


}
