<?php

namespace idegostaran\cloudkade\Services\Vod;

class Watermark extends Vod
{

    private $data = [];

    public function all($channel_id)
    {
        return parent::$http->get("/vod/channels/" . $channel_id . "/watermark");
    }

    public function single($watermark_id)
    {
        return parent::$http->get("/vod/watermark/" . $watermark_id, $this->data);
    }

    public function create($channel_id, $data = [])
    {
        $this->data = array_merge($data, $this->data);
        return parent::$http->post("/vod/channels/" . $channel_id . "/watermark", $this->data);
    }

    public function update($watermark_id, $data = [])
    {
        $this->data = array_merge($data, $this->data);
        return parent::$http->patch("/vod/watermark/" . $watermark_id, $this->data);
    }

    public function delete($watermark_id)
    {
        return parent::$http->delete("/vod/watermark/" . $watermark_id, $this->data);
    }
}
