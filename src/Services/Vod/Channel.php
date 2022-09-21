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
        return parent::$http->get("/vod/channels");
    }

    public function single($channel_id)
    {
        return parent::$http->get("/vod/channels/" . $channel_id, $this->data);
    }

    public function create($data = [])
    {
        $this->data = array_merge($data, $this->data);
        return parent::$http->post("/vod/channels", $this->data);
    }

    public function update($channel_id, $data = [])
    {
        $this->data = array_merge($data, $this->data);
        return parent::$http->patch("/vod/channels/" . $channel_id, $this->data);
    }

    public function delete($channel_id)
    {
        return parent::$http->delete("/vod/channels/" . $channel_id, $this->data);
    }


}
