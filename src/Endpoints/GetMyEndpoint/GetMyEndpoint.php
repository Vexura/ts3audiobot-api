<?php

namespace TS3AudioBotAPI\Endpoints\GetMyEndpoint;

use TS3AudioBotAPI\TS3AudioBotAPI;

class GetMyEndpoint
{
    private $TS3AudioBotAPI;

    public function __construct(TS3AudioBotAPI $TS3AudioBotAPI)
    {
        $this->TS3AudioBotAPI = $TS3AudioBotAPI;
    }

    /**
     * @return array|string
     */
    public function id(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/getmy/id');
    }

    /**
     * @return array|string
     */
    public function uid(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/getmy/uid');
    }

    /**
     * @return array|string
     */
    public function name(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/getmy/name');
    }

    /**
     * @return array|string
     */
    public function dbid(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/getmy/dbid');
    }

    /**
     * @return array|string
     */
    public function channel(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/getmy/channel');
    }

    /**
     * @return array|string
     */
    public function all(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/getmy/all');
    }
}

