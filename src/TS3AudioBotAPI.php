<?php


namespace TS3AudioBotAPI;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use TS3AudioBotAPI\Endpoints\AliasEndpoint\AliasEndpoint;
use TS3AudioBotAPI\Endpoints\APIEndpoint\APIEndpoint;
use TS3AudioBotAPI\Endpoints\BotEndpoint\BotEndpoint;
use TS3AudioBotAPI\Endpoints\CommandEndpoint\CommandEndpoint;
use TS3AudioBotAPI\Endpoints\DataEndpoint\DataEndpoint;
use TS3AudioBotAPI\Endpoints\DefaultEndpoint\DefaultEndpoint;
use TS3AudioBotAPI\Endpoints\GetMyEndpoint\GetMyEndpoint;
use TS3AudioBotAPI\Endpoints\GetUserEndpoint\GetUserEndpoint;
use TS3AudioBotAPI\Endpoints\HelpEndpoint\HelpEndpoint;
use TS3AudioBotAPI\Endpoints\HistoryEndpoint\HistoryEndpoint;
use TS3AudioBotAPI\Endpoints\JSONEndpoint\JSONEndpoint;
use TS3AudioBotAPI\Endpoints\KickMeEndpoint\KickMeEndpoint;
use TS3AudioBotAPI\Endpoints\ListEndpoint\ListEndpoint;
use TS3AudioBotAPI\Endpoints\PluginEndpoint\PluginEndpoint;
use TS3AudioBotAPI\Endpoints\PMEndpoint\PMEndpoint;
use TS3AudioBotAPI\Endpoints\QuizEndpoint\QuizEndpoint;
use TS3AudioBotAPI\Endpoints\RandomEndpoint\RandomEndpoint;
use TS3AudioBotAPI\Endpoints\RepeatEndpoint\RepeatEndpoint;
use TS3AudioBotAPI\Endpoints\RightsEndpoint\RightsEndpoint;
use TS3AudioBotAPI\Endpoints\SearchEndpoint\SearchEndpoint;
use TS3AudioBotAPI\Endpoints\ServerEndpoint\ServerEndpoint;
use TS3AudioBotAPI\Endpoints\SettingsEndpoint\SettingsEndpoint;
use TS3AudioBotAPI\Endpoints\SubscribeEndpoint\SubscribeEndpoint;
use TS3AudioBotAPI\Endpoints\UnsubscribeEndpoint\UnsubscribeEndpoint;
use TS3AudioBotAPI\Endpoints\WhisperEndpoint\WhisperEndpoint;
use TS3AudioBotAPI\Exception\ParameterException;
use Psr\Http\Message\ResponseInterface;

class TS3AudioBotAPI
{
    private $httpClient;
    private $credentials;
    private $apiToken;

    private $aliasHandler;

    private $url;
    private $whisperHandler;

    private $apiHandler;

    private $botHandler;

    private $commandHandler;

    private $dataHandler;

    private $defaultHandler;

    private $getmyHandler;

    private $getUserHandler;

    private $helpHandler;

    private $historyHandler;

    private $jsonHandler;

    private $kickMeHandler;

    private $listHandler;

    private $pluginHandler;

    private $pmHandler;

    private $quizHandler;

    private $randomHandler;

    private $repeatHandler;

    private $rightsHandler;

    private $searchHandler;

    private $serverHandler;

    private $settingsHandler;

    private $subscribeHandler;

    private $unsubscribeHandler;

    /**
     * TS3AudioBotAPI constructor.
     *
     * @param string $token API Token for all requests
     * @param null $httpClient
     */
    public function __construct(string $url, string $token, $httpClient = null) {
        $this->url = $url;
        $this->apiToken = $token;
        $this->setHttpClient($httpClient);
        $this->setCredentials($url, $token);
    }


    public function setHttpClient(Client $httpClient = null)
    {
        $this->httpClient = $httpClient ?: new Client([
            'allow_redirects' => false,
            'follow_redirects' => false,
            'timeout' => 120,
            'http_errors' => false,
        ]);

    }

    public function setCredentials($url, $credentials)
    {
        if (!$credentials instanceof Credentials) {
            $credentials = new Credentials($credentials, $url);
        }

        $this->credentials = $credentials;
    }

    /**
     * @return Client
     */
    public function getHttpClient(): Client
    {
        return $this->httpClient;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->apiToken;
    }


    /**
     * @return Credentials
     */
    private function getCredentials(): Credentials
    {
        return $this->credentials;
    }


    /**
     * @param string $actionPath The resource path you want to request, see more at the documentation.
     * @param array $params Array filled with request params
     * @param string $method HTTP method used in the request
     *
     * @return ResponseInterface
     *
     * @throws ParameterException If the given field in params is not an array
     * @throws GuzzleException
     */
    private function request(string $actionPath, array $params = [], string $method = 'GET'): ResponseInterface
    {
        $url = $this->getCredentials()->getUrl() . $actionPath;

        if (!is_array($params)) {
            throw new ParameterException();
        }

        switch ($method) {
            case 'GET':
                return $this->getHttpClient()->get($url, ['verify' => false, 'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json', 'Authorization' => "Basic " . base64_encode($this->apiToken)]]);
            default:
                throw new ParameterException('Wrong HTTP method passed');
        }
    }

    private function processRequest(ResponseInterface $response)
    {
        $response = $response->getBody()->__toString();
        $result = json_decode($response);
        if (json_last_error() == JSON_ERROR_NONE) {
            return $result;
        } else {
            return $response;
        }
    }


    public function get($actionPath, $params = [])
    {
        $response = $this->request($actionPath, $params);

        return $this->processRequest($response);
    }

    public function post($actionPath, $params = [])
    {
        $response = $this->request($actionPath, $params, 'POST');

        return $this->processRequest($response);
    }

    public function put($actionPath, $params = [])
    {
        $response = $this->request($actionPath, $params, 'PUT');

        return $this->processRequest($response);
    }

    public function delete($actionPath, $params = [])
    {
        $response = $this->request($actionPath, $params, 'DELETE');

        return $this->processRequest($response);
    }

    public function patch($actionPath, $params = [])
    {
        $response = $this->request($actionPath, $params, 'PATCH');

        return $this->processRequest($response);
    }

    /**
     * @return AliasEndpoint
     */
    public function alias(): AliasEndpoint
    {
        if (!$this->aliasHandler) $this->aliasHandler = new AliasEndpoint($this);
        return $this->aliasHandler;
    }

    /**
     * @return APIEndpoint
     */
    public function api(): APIEndpoint
    {
        if (!$this->apiHandler) $this->apiHandler = new APIEndpoint($this);
        return $this->apiHandler;
    }

    /**
     * @return BotEndpoint
     */
    public function bot(): BotEndpoint
    {
        if (!$this->botHandler) $this->botHandler = new BotEndpoint($this);
        return $this->botHandler;
    }

    /**
     * @return CommandEndpoint
     */
    public function command(): CommandEndpoint
    {
        if (!$this->commandHandler) $this->commandHandler = new CommandEndpoint($this);
        return $this->commandHandler;
    }

    /**
     * @return DataEndpoint
     */
    public function data(): DataEndpoint
    {
        if (!$this->dataHandler) $this->dataHandler = new DataEndpoint($this);
        return $this->dataHandler;
    }

    /**
     * @return DefaultEndpoint
     */
    public function default(): DefaultEndpoint
    {
        if (!$this->defaultHandler) $this->defaultHandler = new DefaultEndpoint($this);
        return $this->defaultHandler;
    }

    /**
     * @return GetMyEndpoint
     */
    public function getmy(): GetMyEndpoint
    {
        if (!$this->getmyHandler) $this->getmyHandler = new GetMyEndpoint($this);
        return $this->getmyHandler;
    }

    /**
     * @return GetUserEndpoint
     */
    public function getUser(): GetUserEndpoint
    {
        if (!$this->getUserHandler) $this->getUserHandler = new GetUserEndpoint($this);
        return $this->getUserHandler;
    }

    /**
     * @return HelpEndpoint
     */
    public function help(): HelpEndpoint
    {
        if (!$this->helpHandler) $this->helpHandler = new HelpEndpoint($this);
        return $this->helpHandler;
    }

    /**
     * @return HistoryEndpoint
     */
    public function history(): HistoryEndpoint
    {
        if (!$this->historyHandler) $this->historyHandler = new HistoryEndpoint($this);
        return $this->historyHandler;
    }

    /**
     * @return JSONEndpoint
     */
    public function json(): JSONEndpoint
    {
        if (!$this->jsonHandler) $this->jsonHandler = new JSONEndpoint($this);
        return $this->jsonHandler;
    }

    /**
     * @return KickMeEndpoint
     */
    public function kickMe(): KickMeEndpoint
    {
        if (!$this->kickMeHandler) $this->kickMeHandler = new KickMeEndpoint($this);
        return $this->kickMeHandler;
    }

    /**
     * @return ListEndpoint
     */
    public function list(): ListEndpoint
    {
        if (!$this->listHandler) $this->listHandler = new ListEndpoint($this);
        return $this->listHandler;
    }

    /**
     * @return PluginEndpoint
     */
    public function plugin(): PluginEndpoint
    {
        if (!$this->pluginHandler) $this->pluginHandler = new PluginEndpoint($this);
        return $this->pluginHandler;
    }

    /**
     * @return PMEndpoint
     */
    public function pm(): PMEndpoint
    {
        if (!$this->pmHandler) $this->pmHandler = new PMEndpoint($this);
        return $this->pmHandler;
    }

    /**
     * @return QuizEndpoint
     */
    public function quiz(): QuizEndpoint
    {
        if (!$this->quizHandler) $this->quizHandler = new QuizEndpoint($this);
        return $this->quizHandler;
    }

    /**
     * @return RandomEndpoint
     */
    public function random(): RandomEndpoint
    {
        if (!$this->randomHandler) $this->randomHandler = new RandomEndpoint($this);
        return $this->randomHandler;
    }

    /**
     * @return RepeatEndpoint
     */
    public function repeat(): RepeatEndpoint
    {
        if (!$this->repeatHandler) $this->repeatHandler = new RepeatEndpoint($this);
        return $this->repeatHandler;
    }

    /**
     * @return RightsEndpoint
     */
    public function rights(): RightsEndpoint
    {
        if (!$this->rightsHandler) $this->rightsHandler = new RightsEndpoint($this);
        return $this->rightsHandler;
    }

    /**
     * @return SearchEndpoint
     */
    public function search(): SearchEndpoint
    {
        if (!$this->searchHandler) $this->searchHandler = new SearchEndpoint($this);
        return $this->searchHandler;
    }

    /**
     * @return ServerEndpoint
     */
    public function server(): ServerEndpoint
    {
        if (!$this->serverHandler) $this->serverHandler = new ServerEndpoint($this);
        return $this->serverHandler;
    }

    /**
     * @return SettingsEndpoint
     */
    public function settings(): SettingsEndpoint
    {
        if (!$this->settingsHandler) $this->settingsHandler = new SettingsEndpoint($this);
        return $this->settingsHandler;
    }

    /**
     * @return SubscribeEndpoint
     */
    public function subscribe(): SubscribeEndpoint
    {
        if (!$this->subscribeHandler) $this->subscribeHandler = new SubscribeEndpoint($this);
        return $this->subscribeHandler;
    }

    /**
     * @return UnsubscribeEndpoint
     */
    public function unsubscribe(): UnsubscribeEndpoint
    {
        if (!$this->unsubscribeHandler) $this->unsubscribeHandler = new UnsubscribeEndpoint($this);
        return $this->unsubscribeHandler;
    }

    /**
     * @return WhisperEndpoint
     */
    public function whisper(): WhisperEndpoint
    {
        if (!$this->whisperHandler) $this->whisperHandler = new WhisperEndpoint($this);
        return $this->whisperHandler;
    }

}
