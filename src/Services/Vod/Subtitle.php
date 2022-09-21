<?php

namespace idegostaran\cloudkade\Services\Vod;

class Subtitle extends  Vod
{

    private $data = [];

    public function all($video_id)
    {
        return parent::$http->get("/vod/videos/" . $video_id . "/watermarks");
    }

    public function single($watermark_id)
    {
        return parent::$http->get("/vod/watermarks/" . $watermark_id, $this->data);
    }

    public function create($video_id, $data = [])
    {
        $this->data = array_merge($data, $this->data);
        return parent::$http->post("/vod/videos/" . $video_id . "/watermarks", $this->data);
    }


    public function delete($watermark_id)
    {
        return parent::$http->delete("/vod/watermarks/" . $watermark_id);
    }

    public function delete_all($video_id)
    {
        return parent::$http->delete("/vod/videos/" . $video_id . "/watermarks/delete_all");
    }
}
