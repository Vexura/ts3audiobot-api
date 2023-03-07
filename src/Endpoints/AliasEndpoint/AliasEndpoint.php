<?php

namespace TS3AudioBotAPI\Endpoints\AliasEndpoint;

use TS3AudioBotAPI\TS3AudioBotAPI;

class AliasEndpoint
{
    private $TS3AudioBotAPI;

    public function __construct(TS3AudioBotAPI $TS3AudioBotAPI)
    {
        $this->TS3AudioBotAPI = $TS3AudioBotAPI;
    }

    /**
     * @return array|string
     */
    public function add(int $bot_id, string $commandName, string $command)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/alias/add/'.$commandName.'/'.$command);
    }

    /**
     * @return array|string
     */
    public function remove(int $bot_id, string $commandName)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/alias/remove/'.$commandName);
    }

    /**
     * @return array|string
     */
    public function list(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/alias/list');
    }

    /**
     * @return array|string
     */
    public function show(int $bot_id, string $commandName)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/alias/show/'.$commandName);
    }
}

