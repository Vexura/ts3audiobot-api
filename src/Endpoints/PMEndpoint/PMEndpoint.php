<?php

namespace TS3AudioBotAPI\Endpoints\PMEndpoint;

use TS3AudioBotAPI\TS3AudioBotAPI;

class PMEndpoint
{
    private $TS3AudioBotAPI;

    public function __construct(TS3AudioBotAPI $TS3AudioBotAPI)
    {
        $this->TS3AudioBotAPI = $TS3AudioBotAPI;
    }


    /**
     * @return array|string
     */
    public function pm(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/pm');
    }

    /**
     * @return array|string
     */
    public function channel(int $bot_id, string $message)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/pm/'.$message);
    }

    /**
     * @return array|string
     */
    public function server(int $bot_id, string $message)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/pm/'.$message);
    }

    /**
     * @return array|string
     */
    public function user(int $bot_id, string $clientId, string $message)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/pm/'.$clientId.'/'.$message);
    }

}

