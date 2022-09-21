<?php

namespace idegostaran\cloudkade\Services\Vod;

class AudioTrack extends Vod
{
    private $data = [];

    public function all($video_id)
    {
        return parent::$http->get("/vod/videos/" . $video_id . "/audio_tracks");
    }

    public function single($audio_track_id)
    {
        return parent::$http->get("/vod/audio_tracks/" . $audio_track_id, $this->data);
    }

    public function create($video_id, $data = [])
    {
        $this->data = array_merge($data, $this->data);
        return parent::$http->post("/vod/videos/" . $video_id . "/audio_tracks", $this->data);
    }


    public function delete($audio_track_id)
    {
        return parent::$http->delete("/vod/audio_tracks/" . $audio_track_id);
    }

    public function delete_all($video_id)
    {
        return parent::$http->delete("/vod/videos/" . $video_id . "/audio_tracks/delete_all");
    }
}
