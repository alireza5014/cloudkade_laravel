<?php

namespace idegostaran\cloudkade;


use idegostaran\cloudkade\Services\Live\Live;
use idegostaran\cloudkade\Services\Vod\Vod;

class Cloudkade
{




    public static function vod()
    {
        return new Vod();
    }

    public static function live()
    {
        return new Live();
    }


}
