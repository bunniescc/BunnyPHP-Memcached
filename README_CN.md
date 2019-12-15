# BunnyPHP Memcached缓存组件

BunnyPHP的Memcached缓存组件

[![Version](https://img.shields.io/packagist/v/ivanlulyf/bunnyphp-memcached.svg?color=orange&style=flat-square)](https://packagist.org/packages/ivanlulyf/bunnyphp-memcached)
[![Total Downloads](https://img.shields.io/packagist/dt/ivanlulyf/bunnyphp-memcached.svg?color=brightgreen&style=flat-square)](https://packagist.org/packages/ivanlulyf/bunnyphp-memcached)
![License](https://img.shields.io/packagist/l/ivanlulyf/bunnyphp-memcached.svg?color=blue&style=flat-square)

[English](README.md) | 中文

## 安装

```shell
composer require ivanlulyf/bunnyphp-memcached
```

## 配置

```php
"cache" =>[
    "name" => "bunny.memcached",
    "servers" => [
        ["127.0.0.1",11211],          // 替换为你的Memcached的服务器列表
        ["127.0.0.1",11211,11],       // 有优先级的服务器配置
    ]
],
```