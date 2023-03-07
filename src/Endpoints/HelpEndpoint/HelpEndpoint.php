<?php

namespace TS3AudioBotAPI\Endpoints\HelpEndpoint;

use TS3AudioBotAPI\TS3AudioBotAPI;

class HelpEndpoint
{
    private $TS3AudioBotAPI;
    public function __construct(TS3AudioBotAPI $TS3AudioBotAPI)
    {
        $this->TS3AudioBotAPI = $TS3AudioBotAPI;
    }

    /**
     * @return array|string
     */
    public function help(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/help');
    }

    /**
     * @return array|string
     */
    public function all(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/help/all');
    }

    /**
     * @return array|string
     */
    public function command(int $bot_id, array $command)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/help/command/'.json_encode($command));
    }

    /**
     * @return array|string
     */
    public function play(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/help/play');
    }
}

