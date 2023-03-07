<?php

namespace TS3AudioBotAPI\Endpoints\SettingsEndpoint;

use TS3AudioBotAPI\TS3AudioBotAPI;

class SettingsEndpoint
{
    private $TS3AudioBotAPI;
    public function __construct(TS3AudioBotAPI $TS3AudioBotAPI)
    {
        $this->TS3AudioBotAPI = $TS3AudioBotAPI;
    }

    /**
     * @return array|string
     */
    public function settings()
    {
        return $this->TS3AudioBotAPI->get('/settings');
    }

    /**
     * @return array|string
     */
    public function copy(string $from, string $to)
    {
        return $this->TS3AudioBotAPI->get('/settings/copy/'.$from.'/'.$to);
    }

    /**
     * @return array|string
     */
    public function create(string $name)
    {
        return $this->TS3AudioBotAPI->get('/settings/create/'.$name);
    }

    /**
     * @return array|string
     */
    public function delete(string $name)
    {
        return $this->TS3AudioBotAPI->get('/settings/delete/'.$name);
    }

    /**
     * @return array|string
     */
    public function get(string $path)
    {
        return $this->TS3AudioBotAPI->get('/settings/get/'.$path);
    }

    /**
     * @return array|string
     */
    public function set(string $path, string $value)
    {
        return $this->TS3AudioBotAPI->get('/settings/set/'.$path.'/'.$value);
    }

    /**
     * @return array|string
     */
    public function botGet(string $botName, string $path)
    {
        return $this->TS3AudioBotAPI->get('/settings/bot/get/'.$botName.'/'.$path);
    }

    /**
     * @return array|string
     */
    public function botSet(string $botName, string $path, string $value)
    {
        return $this->TS3AudioBotAPI->get('/settings/bot/set/'.$botName.'/'.$path.'/'.$value);
    }

    /**
     * @return array|string
     */
    public function botReload(string $name)
    {
        return $this->TS3AudioBotAPI->get('/settings/bot/reload/'.$name);
    }

    /**
     * @return array|string
     */
    public function globalGet(string $path)
    {
        return $this->TS3AudioBotAPI->get('/settings/global/get/'.$path);
    }

    /**
     * @return array|string
     */
    public function globalSet(string $path, string $value)
    {
        return $this->TS3AudioBotAPI->get('/settings/global/set/'.$path.'/'.$value);
    }

    /**
     * @return array|string
     */
    public function help(string $path)
    {
        return $this->TS3AudioBotAPI->get('/settings/help/'.$path);
    }
}

