<?php

namespace idegostaran\cloudkade\Services\Vod;

use idegostaran\cloudkade\Adapter\Adapter;

class Channel
{

    protected $http;

    public function __construct(Adapter $http)
    {
        $this->http = $http;
    }

    public function all()
    {
        $url = "/channels";
        $this->http->get($url);
    }
}
