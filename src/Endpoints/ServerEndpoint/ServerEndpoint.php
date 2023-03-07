<?php

namespace TS3AudioBotAPI\Endpoints\ServerEndpoint;

use TS3AudioBotAPI\TS3AudioBotAPI;

class ServerEndpoint
{
    private $TS3AudioBotAPI;

    public function __construct(TS3AudioBotAPI $TS3AudioBotAPI)
    {
        $this->TS3AudioBotAPI = $TS3AudioBotAPI;
    }

    /**
     * @return array|string
     */
    public function show(int $bot_id, string $index)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/server/tree');
    }

}

