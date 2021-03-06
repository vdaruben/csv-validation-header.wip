<?php

namespace Misery\Component\Common\Cache\Redis;

class RedisAccount
{
    private $host;

    public function __construct(string $host)
    {
        $this->host = $host;
    }

    public function getHost(): string
    {
        return $this->host;
    }
}