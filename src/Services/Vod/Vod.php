<?php

namespace idegostaran\cloudkade\Services\Vod;

use idegostaran\cloudkade\Adapter\Adapter;
use idegostaran\cloudkade\Cloudkade;
use idegostaran\cloudkade\Services\API;

class Vod extends Cloudkade
{



    public function channels()
    {
        return new Channel(parent::$http);
    }


}
