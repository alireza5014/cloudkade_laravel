<?php

namespace idegostaran\cloudkade\Services\Live;


use idegostaran\cloudkade\Cloudkade;

class Live extends Cloudkade
{
    public function stream()
    {
        return new Stream();
    }

    public function pull()
    {
        return new Pull();
    }

    public function record()
    {
        return new Record();
    }
}
