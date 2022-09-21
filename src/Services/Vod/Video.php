<?php

namespace IdeGostaran\Cloudkade\Services\Vod;

class Video extends Vod
{

    private $data = [];

    public function all($channel_id)
    {
        return parent::$http->get("/vod/channels/" . $channel_id . "/videos");
    }

    public function single($video_id)
    {
        return parent::$http->get("/vod/videos/" . $video_id, $this->data);
    }

    public function create($channel_id, $data = [])
    {
        $this->data = array_merge($data, $this->data);
        return parent::$http->post("/vod/channels/" . $channel_id . "/videos", $this->data);
    }

    public function update($video_id, $data = [])
    {
        $this->data = array_merge($data, $this->data);
        return parent::$http->patch("/vod/videos/" . $video_id, $this->data);
    }

    public function delete($video_id)
    {
        return parent::$http->delete("/vod/videos/" . $video_id, $this->data);
    }
}
