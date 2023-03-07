<?php

namespace TS3AudioBotAPI\Endpoints\WhisperEndpoint;

use TS3AudioBotAPI\TS3AudioBotAPI;

class WhisperEndpoint
{
    private $TS3AudioBotAPI;
    public function __construct(TS3AudioBotAPI $TS3AudioBotAPI)
    {
        $this->TS3AudioBotAPI = $TS3AudioBotAPI;
    }

    /**
     * @return array|string
     */
    public function all(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/whisper/all');
    }

    /**
     * @return array|string
     */
    public function group(int $bot_id, string $type, string $target, int $targetId)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/whisper/group/'.$type.'/'.$target.'/'.$targetId);
    }

    /**
     * @return array|string
     */
    public function list(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/whisper/list');
    }

    /**
     * @return array|string
     */
    public function off(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/whisper/off');
    }

    /**
     * @return array|string
     */
    public function subscription(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/whisper/subscription');
    }

}

