<?php

namespace idegostaran\cloudkade\Services\Vod;

class Channel extends Vod
{


    public function all()
    {
        $url = "/channels";
        return parent::$http->get($url);
    }
}
