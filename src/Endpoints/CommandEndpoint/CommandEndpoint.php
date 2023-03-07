<?php

namespace TS3AudioBotAPI\Endpoints\CommandEndpoint;

use TS3AudioBotAPI\TS3AudioBotAPI;

class CommandEndpoint
{
    private $TS3AudioBotAPI;

    public function __construct(TS3AudioBotAPI $TS3AudioBotAPI)
    {
        $this->TS3AudioBotAPI = $TS3AudioBotAPI;
    }

    /**
     * @return array|string
     */
    public function parse(int $bot_id, string $parameter)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/command/parse/'.$parameter);
    }

    /**
     * @return array|string
     */
    public function tree(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/command/tree');
    }
}

