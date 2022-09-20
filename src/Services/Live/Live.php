<?php

namespace idegostaran\cloudkade\Services\Live;


use idegostaran\cloudkade\Adapter\Adapter;
use idegostaran\cloudkade\Services\API;

class Live implements API
{

    public function __construct(Adapter $http, array $config)
    {
    }
}
