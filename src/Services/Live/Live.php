<?php

namespace IdeGostaran\Cloudkade\Services\Live;


use IdeGostaran\Cloudkade\Cloudkade;

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
