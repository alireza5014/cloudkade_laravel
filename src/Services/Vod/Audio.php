<?php

namespace idegostaran\cloudkade\Services\Vod;

class Audio extends Vod
{
    private $data = [];

    public function all($channel_id)
    {
        return parent::$http->get("/vod/channels/" . $channel_id . "/audios");
    }

    public function single($audio_id)
    {
        return parent::$http->get("/vod/audios/" . $audio_id, $this->data);
    }

    public function create($channel_id, $data = [])
    {
        $this->data = array_merge($data, $this->data);
        return parent::$http->post("/vod/channels/" . $channel_id . "/audios", $this->data);
    }

    public function update($audio_id, $data = [])
    {
        $this->data = array_merge($data, $this->data);
        return parent::$http->patch("/vod/audios/" . $audio_id, $this->data);
    }

    public function delete($audio_id)
    {
        return parent::$http->delete("/vod/audios/" . $audio_id, $this->data);
    }
}
