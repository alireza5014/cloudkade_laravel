<?php

namespace idegostaran\cloudkade;


use idegostaran\cloudkade\Adapter\Adapter;
use idegostaran\cloudkade\Services\API;
use idegostaran\cloudkade\Services\Live\Live;
use idegostaran\cloudkade\Services\Vod\Vod;

class Cloudkade implements API
{

    public $http;

    public function __construct(Adapter $http)
    {
        $this->http = $http;
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
