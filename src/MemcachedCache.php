<?php

namespace Bunny\Cache;

use BunnyPHP\Cache;
use Memcached;

class MemcachedCache implements Cache
{

    /**
     * @var $memcached Memcached
     */
    private $memcached;

    public function __construct($config = [])
    {
        $this->memcached = new Memcached();
        $this->memcached->addServers($config['servers']);
    }

    public function get(string $key, $expire = 0)
    {
        return $this->memcached->get($key);
    }

    public function has(string $key, $expire = 0): bool
    {
        $this->memcached->get($key);
        return $this->memcached->getResultCode() === Memcached::RES_SUCCESS;
    }

    public function set(string $key, $value, $expire = 0)
    {
        $this->memcached->set($key, $value, time() + $expire);
    }

    public function del(string $key)
    {
        $this->memcached->delete($key);
    }
}