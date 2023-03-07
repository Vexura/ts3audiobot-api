<?php

namespace TS3AudioBotAPI\Endpoints\KickMeEndpoint;

use TS3AudioBotAPI\TS3AudioBotAPI;

class KickMeEndpoint
{
    private $TS3AudioBotAPI;
    public function __construct(TS3AudioBotAPI $TS3AudioBotAPI)
    {
        $this->TS3AudioBotAPI = $TS3AudioBotAPI;
    }

    /**
     * @return array|string
     */
    public function kickme(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/kickme');
    }

    /**
     * @return array|string
     */
    public function far(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/kickme/far');
    }

}

