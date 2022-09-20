<?php

namespace idegostaran\cloudkade\Services\Vod;

use idegostaran\cloudkade\Adapter\Adapter;
use idegostaran\cloudkade\Cloudkade;
use idegostaran\cloudkade\Services\API;

class Vod implements Api
{


    protected $http;

    public function channels()
    {
        return new Channel($this->http);
    }

    public function __construct(Adapter $http, array $config)
    {
        $this->http = $http;
    }
}
