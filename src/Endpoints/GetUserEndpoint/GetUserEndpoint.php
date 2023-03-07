<?php

namespace TS3AudioBotAPI\Endpoints\GetUserEndpoint;

use TS3AudioBotAPI\TS3AudioBotAPI;

class GetUserEndpoint
{
    private $TS3AudioBotAPI;
    public function __construct(TS3AudioBotAPI $TS3AudioBotAPI)
    {
        $this->TS3AudioBotAPI = $TS3AudioBotAPI;
    }

    /**
     * @return array|string
     */
    public function uidById(int $bot_id, string $id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/getuser/uid/byid/'.$id);
    }

    /**
     * @return array|string
     */
    public function nameById(int $bot_id, string $id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/getuser/name/byid/'.$id);
    }

    /**
     * @return array|string
     */
    public function dbidById(int $bot_id, string $id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/getuser/dbid/byid/'.$id);
    }

    /**
     * @return array|string
     */
    public function channelById(int $bot_id, string $id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/getuser/channel/byid/'.$id);
    }

    /**
     * @return array|string
     */
    public function allById(int $bot_id, string $id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/getuser/all/byid/'.$id);
    }

    /**
     * @return array|string
     */
    public function idByName(int $bot_id, string $username)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/getuser/id/byname/'.$username);
    }

    /**
     * @return array|string
     */
    public function allByName(int $bot_id, string $username)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/getuser/all/byname/'.$username);
    }

    /**
     * @return array|string
     */
    public function nameBydbid(int $bot_id, string $dbid)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/getuser/name/bydbid/'.$dbid);
    }

    /**
     * @return array|string
     */
    public function uidBydbid(int $bot_id, string $dbid)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/getuser/uid/bydbid/'.$dbid);
    }
}

