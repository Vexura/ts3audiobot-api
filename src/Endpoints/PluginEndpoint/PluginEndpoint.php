<?php

namespace TS3AudioBotAPI\Endpoints\PluginEndpoint;

use TS3AudioBotAPI\TS3AudioBotAPI;

class PluginEndpoint
{
    private $TS3AudioBotAPI;

    public function __construct(TS3AudioBotAPI $TS3AudioBotAPI)
    {
        $this->TS3AudioBotAPI = $TS3AudioBotAPI;
    }

    /**
     * @return array|string
     */
    public function list(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/plugin/list');
    }

    /**
     * @return array|string
     */
    public function unload(int $bot_id, string $identifier)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/plugin/unload/'.$identifier);
    }

    /**
     * @return array|string
     */
    public function load(int $bot_id, string $identifier)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/plugin/load/'.$identifier);
    }

}

