<?php

namespace TS3AudioBotAPI\Endpoints\RepeatEndpoint;

use TS3AudioBotAPI\TS3AudioBotAPI;

class RepeatEndpoint
{
    private $TS3AudioBotAPI;

    public function __construct(TS3AudioBotAPI $TS3AudioBotAPI)
    {
        $this->TS3AudioBotAPI = $TS3AudioBotAPI;
    }


    /**
     * @return array|string
     */
    public function repeat(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/repeat');
    }

    /**
     * @return array|string
     */
    public function off(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/repeat/off');
    }

    /**
     * @return array|string
     */
    public function one(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/repeat/one');
    }

    /**
     * @return array|string
     */
    public function all(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/repeat/all');
    }
}

