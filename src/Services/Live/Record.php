<?php

namespace idegostaran\cloudkade\Services\Live;

class Record extends Live
{
    private $data = [];

    public function start($stream_id)
    {
        return parent::$http->get("/live/streams/" . $stream_id . "/record/start", $this->data);

    }

    public function end($stream_id)
    {
        return parent::$http->get("/live/streams/" . $stream_id . "/record/end", $this->data);

    }

    public function pause($stream_id)
    {
        return parent::$http->get("/live/streams/" . $stream_id . "/record/stop", $this->data);

    }
}
