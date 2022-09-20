<?php

namespace idegostaran\cloudkade;



use idegostaran\cloudkade\Services\Live;
use idegostaran\cloudkade\Services\Vod;

class Cloudkade extends CurlRequest
{
    public static function vod()
    {
        return new Vod();
    }

    public static function live()
    {
        return new Live();
    }

    public function create()
    {
        $this->post();
    }

    public function update()
    {
        $this->patch();

    }

    public function delete()
    {
        $this->delete();

    }

    public function get()
    {
        $this->get();

    }

    public function single()
    {
        $this->get();

    }


}
