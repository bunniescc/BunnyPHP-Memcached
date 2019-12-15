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

    public function get($key, $expire = 0)
    {
        return $this->memcached->get($key);
    }

    public function has($key, $expire = 0)
    {
        $this->memcached->get($key);
        return $this->memcached->getResultCode() === \Memcached::RES_SUCCESS;
    }

    public function set($key, $value, $expire = 0)
    {
        $this->memcached->set($key, $value, time() + $expire);
    }

    public function del($key)
    {
        $this->memcached->delete($key);
    }
}