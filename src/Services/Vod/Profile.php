<?php

namespace IdeGostaran\Cloudkade\Services\Vod;

class Profile extends  Vod
{
    private $data = [];

    public function all($channel_id)
    {
        return parent::$http->get("/vod/channels/" . $channel_id . "/profile");
    }

    public function single($profile_id)
    {
        return parent::$http->get("/vod/profile/" . $profile_id, $this->data);
    }

    public function create($channel_id, $data = [])
    {
        $this->data = array_merge($data, $this->data);
        return parent::$http->post("/vod/channels/" . $channel_id . "/profile", $this->data);
    }

    public function update($profile_id, $data = [])
    {
        $this->data = array_merge($data, $this->data);
        return parent::$http->patch("/vod/profile/" . $profile_id, $this->data);
    }

    public function delete($profile_id)
    {
        return parent::$http->delete("/vod/profile/" . $profile_id, $this->data);
    }
}
