<?php

namespace TS3AudioBotAPI\Endpoints\JSONEndpoint;

use TS3AudioBotAPI\TS3AudioBotAPI;

class JSONEndpoint
{
    private $TS3AudioBotAPI;
    public function __construct(TS3AudioBotAPI $TS3AudioBotAPI)
    {
        $this->TS3AudioBotAPI = $TS3AudioBotAPI;
    }

    /**
     * @return array|string
     */
    public function merge()
    {
        return $this->TS3AudioBotAPI->get('/json/merge');
    }

    /**
     * @return array|string
     */
    public function api()
    {
        return $this->TS3AudioBotAPI->get('/json/api');
    }
}

