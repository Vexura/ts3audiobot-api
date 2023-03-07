<?php

namespace TS3AudioBotAPI\Endpoints\RightsEndpoint;

use TS3AudioBotAPI\TS3AudioBotAPI;

class RightsEndpoint
{
    private $TS3AudioBotAPI;
    public function __construct(TS3AudioBotAPI $TS3AudioBotAPI)
    {
        $this->TS3AudioBotAPI = $TS3AudioBotAPI;
    }


    /**
     * @return array|string
     */
    public function can(int $bot_id, array $rights)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/rights/can/'. json_encode($rights));
    }

    /**
     * @return array|string
     */
    public function reload(int $bot_id, array $rights)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/rights/reload');
    }
}

