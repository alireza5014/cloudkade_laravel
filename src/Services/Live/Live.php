<?php

namespace idegostaran\cloudkade\Services\Live;


use idegostaran\cloudkade\Adapter\Adapter;
use idegostaran\cloudkade\Services\API;

class Live
{
    protected static $http;

    public function __construct(Adapter $http)
    {
        static::$http = $http;
    }
}