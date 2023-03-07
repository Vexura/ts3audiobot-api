<?php

namespace TS3AudioBotAPI\Endpoints\SubscribeEndpoint;

use TS3AudioBotAPI\TS3AudioBotAPI;

class SubscribeEndpoint
{
    private $TS3AudioBotAPI;

    public function __construct(TS3AudioBotAPI $TS3AudioBotAPI)
    {
        $this->TS3AudioBotAPI = $TS3AudioBotAPI;
    }

    /**
     * @return array|string
     */
    public function subscribe(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/subscribe');
    }

    /**
     * @return array|string
     */
    public function tempChannel(int $bot_id, string $channel)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/subscribe/tempchannel/'.$channel);
    }

    /**
     * @return array|string
     */
    public function channel(int $bot_id, array $channels)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/subscribe/channel/'.json_encode($channels));
    }


    /**
     * @return array|string
     */
    public function client(int $bot_id, string $client)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/subscribe/client/'.$client);
    }
}

