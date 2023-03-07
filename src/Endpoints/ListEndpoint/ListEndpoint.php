<?php

namespace TS3AudioBotAPI\Endpoints\ListEndpoint;

use TS3AudioBotAPI\TS3AudioBotAPI;

class ListEndpoint
{
    private $TS3AudioBotAPI;
    private $tokenHandler;
    private $usersHandler;

    public function __construct(TS3AudioBotAPI $TS3AudioBotAPI)
    {
        $this->TS3AudioBotAPI = $TS3AudioBotAPI;
    }

    /**
     * @return array|string
     */
    public function create(int $bot_id, string $listId, string $title)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/list/create/'.$listId.'/'.$title);
    }

    /**
     * @return array|string
     */
    public function delete(int $bot_id, string $listId)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/list/delete/'.$listId);
    }

    /**
     * @return array|string
     */
    public function from(int $bot_id, string $resolverName, string $listId, string $url)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/list/from/'.$resolverName.'/'.$listId.'/'.$url);
    }

    /**
     * @return array|string
     */
    public function import(int $bot_id, string $listId, string $url)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/list/import/'.$listId.'/'.$url);
    }

    /**
     * @return array|string
     */
    public function insert(int $bot_id, string $listId, string $index, string $url)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/list/insert/'.$listId.'/'.$index.'/'.$url);
    }

    /**
     * @return array|string
     */
    public function getItem(int $bot_id, string $name, string $index)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/list/item/get/'.$name.'/'.$index);
    }

    /**
     * @return array|string
     */
    public function moveItem(int $bot_id, string $listId, string $from, string $to)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/list/item/move/'.$listId.'/'.$from.'/'.$to);
    }

    /**
     * @return array|string
     */
    public function deleteItem(int $bot_id, string $listId, string $index)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/list/item/delete/'.$listId.'/'.$index);
    }

    /**
     * @return array|string
     */
    public function nameItem(int $bot_id, string $listId, string $index, string $title)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/list/item/name/'.$listId.'/'.$index.'/'.$title);
    }

    /**
     * @return array|string
     */
    public function list(int $bot_id, string $pattern)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/list/list/'.$pattern);
    }

    /**
     * @return array|string
     */
    public function merge(int $bot_id, string $baseListId, string $mergeListId)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/list/merge/'.$baseListId.'/'.$mergeListId);
    }

    /**
     * @return array|string
     */
    public function name(int $bot_id, string $baseListId, string $name)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/list/name/'.$baseListId.'/'.$name);
    }

    /**
     * @return array|string
     */
    public function play(int $bot_id, string $listId, string $index)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/list/play/'.$listId.'/'.$index);
    }

    /**
     * @return array|string
     */
    public function queue(int $bot_id, string $listId)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/list/queue/'.$listId);
    }

    /**
     * @return array|string
     */
    public function show(int $bot_id, string $listId, string $offset, string $index)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/list/show/'.$listId.'/'.$offset.'/'.$index);
    }

    /**
     * @return array|string
     */
    public function add(int $bot_id, string $listId, string $link)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/list/add/'.$listId.'/'.$link);
    }

    /**
     * @return array|string
     */
    public function clear(int $bot_id, string $listId)
    {
        return $this->TS3AudioBotAPI->get('api/bot/use/'.$bot_id.'/(/list/add/'.$listId);
    }
}

