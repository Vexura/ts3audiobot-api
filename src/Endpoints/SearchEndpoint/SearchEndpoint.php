<?php

namespace TS3AudioBotAPI\Endpoints\SearchEndpoint;

use TS3AudioBotAPI\TS3AudioBotAPI;

class SearchEndpoint
{
    private $TS3AudioBotAPI;
    public function __construct(TS3AudioBotAPI $TS3AudioBotAPI)
    {
        $this->TS3AudioBotAPI = $TS3AudioBotAPI;
    }

    /**
     * @return array|string
     */
    public function add(int $bot_id, string $index)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/search/add/'.$index);
    }

    /**
     * @return array|string
     */
    public function from(int $bot_id, string $resolverName, string $query)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/search/from/'.$resolverName.'/'.$query);
    }

    /**
     * @return array|string
     */
    public function get(int $bot_id, string $index)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/search/get/'.$index);
    }

    /**
     * @return array|string
     */
    public function play(int $bot_id, string $index)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/search/play/'.$index);
    }

    /**
     * @return array|string
     */
    public function show(int $bot_id, string $index)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/search/show');
    }
}

