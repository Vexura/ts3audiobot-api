<?php

namespace TS3AudioBotAPI\Endpoints\BotEndpoint;

use TS3AudioBotAPI\TS3AudioBotAPI;

class BotEndpoint
{
    private $TS3AudioBotAPI;

    public function __construct(TS3AudioBotAPI $TS3AudioBotAPI)
    {
        $this->TS3AudioBotAPI = $TS3AudioBotAPI;
    }

    /**
     * @return array|string
     */
    public function setAvatar(int $bot_id, string $url)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/bot/avatar/set/'.urlencode($url));
    }

    /**
     * @return array|string
     */
    public function clearAvatar(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/bot/avatar/clear');
    }

    /**
     * @return array|string
     */
    public function badges(int $bot_id, string $badges)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/bot/badges/'.$badges);
    }

    /**
     * @return array|string
     */
    public function setDescription(int $bot_id, string $description)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/bot/description/set/'.$description);
    }

    /**
     * @return array|string
     */
    public function diagnose(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/bot/diagnose');
    }

    /**
     * @return array|string
     */
    public function disconnect(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/bot/disconnect');
    }

    /**
     * @return array|string
     */
    public function commander(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/bot/commander');
    }

    /**
     * @return array|string
     */
    public function commanderOn(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/bot/commander/on');
    }

    /**
     * @return array|string
     */
    public function commanderOff(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/bot/commander/off');
    }


    /**
     * @return array|string
     */
    public function come(int $bot_id, ?string $password)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/bot/come/'.$password);
    }

    /**
     * @return array|string
     */
    public function connect(int $bot_id, string $template)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/bot/connect/template/'.$template);
    }

    /**
     * @return array|string
     */
    public function connectTo(int $bot_id, string $address, ?string $password)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/bot/connect/to/'.$address.'/'.$password);
    }


    /**
     * @return array|string
     */
    public function info(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/bot/info');
    }

    /**
     * @return array|string
     */
    public function infoClient(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/bot/info/client');
    }

    /**
     * @return array|string
     */
    public function infoTemplate(int $bot_id, string $template)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/bot/info/template/'. $template);
    }

    /**
     * @return array|string
     */
    public function list(int $bot_id, string $template)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/bot/list');
    }


    /**
     * @return array|string
     */
    public function move(int $bot_id, string $channel, ?string $password)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/bot/move/'.$channel.'/'.$password);
    }


    /**
     * @return array|string
     */
    public function name(int $bot_id, string $name)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/bot/name/'.$name);
    }


    /**
     * @return array|string
     */
    public function save(int $bot_id, string $name)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/bot/save/'.$name);
    }

    /**
     * @return array|string
     */
    public function setup(int $bot_id, string $adminToken)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/bot/setup/'.$adminToken);
    }

    /**
     * @return array|string
     */
    public function template(int $bot_id, string $botName, string $cmd)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/bot/template/'.$botName.'/'.$cmd);
    }

}

