<?php

namespace TS3AudioBotAPI\Endpoints\QuizEndpoint;

use TS3AudioBotAPI\TS3AudioBotAPI;

class QuizEndpoint
{
    private $TS3AudioBotAPI;

    public function __construct(TS3AudioBotAPI $TS3AudioBotAPI)
    {
        $this->TS3AudioBotAPI = $TS3AudioBotAPI;
    }

    /**
     * @return array|string
     */
    public function quiz(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/quiz');
    }

    /**
     * @return array|string
     */
    public function on(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/quiz/on');
    }

    /**
     * @return array|string
     */
    public function off(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/quiz/off');
    }
}

