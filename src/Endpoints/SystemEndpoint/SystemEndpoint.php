<?php

namespace TS3AudioBotAPI\Endpoints\SystemEndpoint;

use TS3AudioBotAPI\TS3AudioBotAPI;

class SystemEndpoint
{
    private $TS3AudioBotAPI;

    public function __construct(TS3AudioBotAPI $TS3AudioBotAPI)
    {
        $this->TS3AudioBotAPI = $TS3AudioBotAPI;
    }

    /**
     * @return array|string
     */
    public function info()
    {
        return $this->TS3AudioBotAPI->get('/system/info');
    }

    /**
     * @return array|string
     */
    public function quit(string $param)
    {
        return $this->TS3AudioBotAPI->get('/system/quit/'.$param);
    }

}

