<?php

namespace TS3AudioBotAPI\Endpoints\DefaultEndpoint;

use TS3AudioBotAPI\TS3AudioBotAPI;

class DefaultEndpoint
{
    private $TS3AudioBotAPI;

    public function __construct(TS3AudioBotAPI $TS3AudioBotAPI)
    {
        $this->TS3AudioBotAPI = $TS3AudioBotAPI;
    }

    /**
     * @return array|string
     */
    public function version()
    {
        return $this->TS3AudioBotAPI->get('api/version');
    }

    /**
     * @return array|string
     */
    public function volume(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/volume');
    }

    /**
     * @return array|string
     */
    public function setVolume(int $bot_id, string $volume)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/volume/'.$volume);
    }

    /**
     * @return array|string
     */
    public function next(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/next');
    }

    /**
     * @return array|string
     */
    public function param(int $bot_id,string $index)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/param/' . $index);
    }

    /**
     * @return array|string
     */
    public function pause(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/pause');
    }

    /**
     * @return array|string
     */
    public function play(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/play');
    }

    /**
     * @return array|string
     */
    public function playUrl(int $bot_id,string $url, array $attributes)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/play/'.urlencode($url).'/'. json_encode($attributes));
    }

    /**
     * @return array|string
     */
    public function previous(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/previous');
    }

    /**
     * @return array|string
     */
    public function seek(int $bot_id,string $seconds)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/seek/'.$seconds);
    }

    /**
     * @return array|string
     */
    public function song(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/song');
    }

    /**
     * @return array|string
     */
    public function stop(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/stop');
    }

    /**
     * @return array|string
     */
    public function take(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/take');
    }

    /**
     * @return array|string
     */
    public function addUrl(int $bot_id, string $url)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/add/' .urlencode($url));
    }

    /**
     * @return array|string
     */
    public function clear(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/clear');
    }

    /**
     * @return array|string
     */
    public function eval(int $bot_id)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/eval');
    }

    /**
     * @return array|string
     */
    public function from(int $bot_id, string $factory, string $url)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/from/'.$factory.'/'.urlencode($url));
    }


    /**
     * @return array|string
     */
    public function get(int $bot_id, string $index, string $list)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/get/'.$index.'/'.$list);
    }

    /**
     * @return array|string
     */
    public function info(int $bot_id, string $offset, string $count)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/info/'.$offset.'/'.$count);
    }

    /**
     * @return array|string
     */
    public function jump(int $bot_id, string $offset)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/jump/'.$offset);
    }
}

