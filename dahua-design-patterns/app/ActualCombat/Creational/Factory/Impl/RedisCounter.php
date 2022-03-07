<?php
/**
 * RedisCounter.php :
 *
 * PHP version 7.1
 *
 * @category RedisCounter
 * @package  App\ActualCombat\Creational\Factory\Impl
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Creational\Factory\Impl;

use App\ActualCombat\Creational\Factory\Interfaces\CounterInterface;

/**
 * RedisCounter : redis计数器
 *
 * @category RedisCounter
 * @author   zhangshuai <zhangshuai1134@gmail.com>
 */
class RedisCounter implements CounterInterface
{
    private $connect;

    public function __construct(RedisConnect $connect)
    {
        $this->connect = $connect;
        echo self::class . '已创建' . PHP_EOL;
    }

    public function __toString() {
        return '这是' . self::class . PHP_EOL;
    }
}
