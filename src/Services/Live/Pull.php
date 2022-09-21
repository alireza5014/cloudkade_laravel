<?php

namespace idegostaran\cloudkade\Services\Live;

class Pull extends Live
{
    private $data = [];

    public function start($stream_id)
    {
        return parent::$http->delete("/live/streams/" . $stream_id . "/pull/start", $this->data);

    }

    public function stop($stream_id)
    {
        return parent::$http->delete("/live/streams/" . $stream_id . "/pull/stop", $this->data);

    }
}
