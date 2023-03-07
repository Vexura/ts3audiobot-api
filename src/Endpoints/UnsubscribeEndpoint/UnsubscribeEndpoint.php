<?php

namespace TS3AudioBotAPI\Endpoints\UnsubscribeEndpoint;

use TS3AudioBotAPI\TS3AudioBotAPI;

class UnsubscribeEndpoint
{
    private $TS3AudioBotAPI;

    public function __construct(TS3AudioBotAPI $TS3AudioBotAPI)
    {
        $this->TS3AudioBotAPI = $TS3AudioBotAPI;
    }

    /**
     * @return array|string
     */
    public function channels(int $bot_id, array $channels)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/unsubscribe/channel/' . json_encode($channels));
    }

    /**
     * @return array|string
     */
    public function temporary(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/unsubscribe/temporary');
    }

    /**
     * @return array|string
     */
    public function client(int $bot_id,string $client_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/unsubscribe/client/' . $client_id);
    }

    /**
     * @return array|string
     */
    public function all(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/unsubscribe');
    }
}

