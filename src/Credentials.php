<?php


namespace TS3AudioBotAPI;

class Credentials
{
    private $token;
    private $url;

    /**
     * Credentials constructor.
     * @param string $token
     * @param string $url
     */
    public function __construct(string $token, string $url)
    {
        $this->token = $token;
        $this->url = $url;
    }

    public function __toString()
    {
        return sprintf(
            '[Host: %s], [Token: %s].',
            $this->url,
            $this->token
        );
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

}
