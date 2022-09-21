<?php

namespace idegostaran\cloudkade\Services\Live;

class Stream extends Live
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
        return parent::$http->get("/live/streams");
    }

    public function single($stream_id)
    {
        return parent::$http->get("/live/streams/" . $stream_id, $this->data);
    }

    public function create($data = [])
    {
        $this->data = array_merge($data, $this->data);
        return parent::$http->post("/live/streams", $this->data);
    }

    public function update($stream_id, $data = [])
    {
        $this->data = array_merge($data, $this->data);
        return parent::$http->patch("/live/streams/" . $stream_id, $this->data);
    }

    public function delete($stream_id)
    {
        return parent::$http->delete("/live/streams/" . $stream_id, $this->data);
    }


}
