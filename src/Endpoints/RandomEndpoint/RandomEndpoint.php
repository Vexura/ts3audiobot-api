<?php

namespace TS3AudioBotAPI\Endpoints\RandomEndpoint;

use TS3AudioBotAPI\TS3AudioBotAPI;

class RandomEndpoint
{
    private $TS3AudioBotAPI;
    public function __construct(TS3AudioBotAPI $TS3AudioBotAPI)
    {
        $this->TS3AudioBotAPI = $TS3AudioBotAPI;
    }

    /**
     * @return array|string
     */
    public function random(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/random');
    }

    /**
     * @return array|string
     */
    public function on(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/random/on');
    }

    /**
     * @return array|string
     */
    public function off(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/random/off');
    }

    /**
     * @return array|string
     */
    public function seed(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/random/seed');
    }

    /**
     * @return array|string
     */
    public function newSeed(int $bot_id, string $seed)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/random/seed/'.$seed);
    }

}

