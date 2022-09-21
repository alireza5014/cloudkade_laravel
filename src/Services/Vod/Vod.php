<?php

namespace IdeGostaran\Cloudkade\Services\Vod;

use IdeGostaran\Cloudkade;

class Vod extends Cloudkade
{


    public function audio()
    {
        return new Audio();
    }

    public function audioTrack()
    {
        return new AudioTrack();
    }

    public function channels()
    {
        return new Channel();
    }

    public function file()
    {
        return new File();
    }

    public function profile()
    {
        return new Profile();
    }

    public function sutitle()
    {
        return new Subtitle();
    }

    public function video()
    {
        return new Video();
    }

    public function watermark()
    {
        return new Watermark();
    }
}
