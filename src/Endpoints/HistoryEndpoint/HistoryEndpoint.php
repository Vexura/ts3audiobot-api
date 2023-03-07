<?php

namespace TS3AudioBotAPI\Endpoints\HistoryEndpoint;

use TS3AudioBotAPI\TS3AudioBotAPI;

class HistoryEndpoint
{
    private $TS3AudioBotAPI;

    public function __construct(TS3AudioBotAPI $TS3AudioBotAPI)
    {
        $this->TS3AudioBotAPI = $TS3AudioBotAPI;
    }

    /**
     * @return array|string
     */
    public function add(int $bot_id, string $hid)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/history/add/'.$hid);
    }

    /**
     * @return array|string
     */
    public function clean(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/history/clean');
    }

    /**
     * @return array|string
     */
    public function cleanUpgrade(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/history/clean/upgrade');
    }


    /**
     * @return array|string
     */
    public function delete(int $bot_id, string $id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/history/delete/'.$id);
    }

    /**
     * @return array|string
     */
    public function from(int $bot_id, string $userUid, int $amount)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/history/from/'.$userUid.'/'.$amount);
    }

    /**
     * @return array|string
     */
    public function id(int $bot_id, string $id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/history/id/'.$id);
    }

    /**
     * @return array|string
     */
    public function special(int $bot_id, string $special)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/history/id/'.$special);
    }

    /**
     * @return array|string
     */
    public function lastAmount(int $bot_id, int $amount)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/history/last/'.$amount);
    }

    /**
     * @return array|string
     */
    public function last(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/history/last');
    }

    /**
     * @return array|string
     */
    public function play(int $bot_id, string $hid)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/history/play/'.$hid);
    }

    /**
     * @return array|string
     */
    public function rename(int $bot_id, string $id, string $newName)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/history/rename/'.$id.'/'.$newName);
    }

    /**
     * @return array|string
     */
    public function till(int $bot_id, string $time)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/history/till/'.$time);
    }

    /**
     * @return array|string
     */
    public function title(int $bot_id, string $part)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/history/title/'.$part);
    }
}

