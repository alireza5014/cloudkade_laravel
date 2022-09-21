<?php

namespace idegostaran\cloudkade\Services\Vod;


class Channel extends Vod
{

    private $data = [];


    public function setTitle($title)
    {
        $this->data['title'] = $title;
        return $this;
    }

    public function setDescription($description)
    {
        $this->data['description'] = $description;
        return $this;
    }

    public function all()
    {
        return parent::$http->get("/channels");
    }

    public function create($data = [])
    {
        $this->data = array_merge($data, $this->data);
        return parent::$http->post("/channels", $this->data);
    }
}
