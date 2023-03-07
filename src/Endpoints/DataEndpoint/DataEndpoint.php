<?php

namespace TS3AudioBotAPI\Endpoints\DataEndpoint;

use TS3AudioBotAPI\TS3AudioBotAPI;

class DataEndpoint
{
    private $TS3AudioBotAPI;
    public function __construct(TS3AudioBotAPI $TS3AudioBotAPI)
    {
        $this->TS3AudioBotAPI = $TS3AudioBotAPI;
    }

    /**
     * @return array|string
     */
    public function getSongCover(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/data/song/cover/get');
    }

}

