# BunnyPHP Memcached Cache Component

MemcachedCache for BunnyPHP

[![Version](https://img.shields.io/packagist/v/ivanlulyf/bunnyphp-memcached.svg?color=orange&style=flat-square)](https://packagist.org/packages/ivanlulyf/bunnyphp-memcached)
[![Total Downloads](https://img.shields.io/packagist/dt/ivanlulyf/bunnyphp-memcached.svg?color=brightgreen&style=flat-square)](https://packagist.org/packages/ivanlulyf/bunnyphp-memcached)
![License](https://img.shields.io/packagist/l/ivanlulyf/bunnyphp-memcached.svg?color=blue&style=flat-square)

English | [中文](README_CN.md)

## Install

```shell
composer require ivanlulyf/bunnyphp-memcached
```

## Configure

```php
"cache" =>[
    "name" => "bunny.memcached",
    "servers" => [
        ["127.0.0.1",11211],          // replace to your memcached server address list
        ["127.0.0.1",11211,11],       // with priority  
    ]
],
```