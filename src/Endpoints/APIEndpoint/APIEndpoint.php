<?php

namespace TS3AudioBotAPI\Endpoints\APIEndpoint;

use TS3AudioBotAPI\TS3AudioBotAPI;

class APIEndpoint
{
    private $TS3AudioBotAPI;

    public function __construct(TS3AudioBotAPI $TS3AudioBotAPI)
    {
        $this->TS3AudioBotAPI = $TS3AudioBotAPI;
    }


    /**
     * @return array|string
     */
    public function token(string $validTime)
    {
        return $this->TS3AudioBotAPI->get('api/token/'.$validTime);
    }

}

