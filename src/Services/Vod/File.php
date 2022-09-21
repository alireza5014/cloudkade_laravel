<?php

namespace idegostaran\cloudkade\Services\Vod;

class File extends  Vod
{

    private $data = [];

    public function all($channel_id)
    {
        return parent::$http->get("/vod/channels/" . $channel_id . "/files");
    }

    public function single($file_id)
    {
        return parent::$http->get("/vod/files/" . $file_id, $this->data);
    }

    public function create($channel_id, $data = [])
    {
        $this->data = array_merge($data, $this->data);
        return parent::$http->post("/vod/channels/" . $channel_id . "/files", $this->data);
    }

    public function update($file_id, $data = [])
    {
        $this->data = array_merge($data, $this->data);
        return parent::$http->patch("/vod/files/" . $file_id, $this->data);
    }

    public function delete($file_id)
    {
        return parent::$http->delete("/vod/files/" . $file_id, $this->data);
    }
}
