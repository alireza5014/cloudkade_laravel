<?php

namespace idegostaran\cloudkade\Services\Vod;

use idegostaran\cloudkade\Adapter\Adapter;
use idegostaran\cloudkade\Cloudkade;
use idegostaran\cloudkade\Services\API;

class Vod
{


    protected $http;

    public function __construct($http)
    {
        $this->http=$http;
    }

    public function channels()
    {
        return new Channel($this->http);
    }


}
