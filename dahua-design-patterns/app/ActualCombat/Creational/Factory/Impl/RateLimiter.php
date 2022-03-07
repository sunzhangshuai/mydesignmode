<?php
/**
 * RateLimiter.php :
 *
 * PHP version 7.1
 *
 * @category RateLimiter
 * @package  App\ActualCombat\Creational\Factory\Impl
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Creational\Factory\Impl;

use App\ActualCombat\Creational\Factory\Interfaces\CounterInterface;

/**
 * RateLimiter : 速度限制
 *
 * @category RateLimiter
 * @author   zhangshuai <zhangshuai1134@gmail.com>
 */
class RateLimiter
{
    private $redisCounter;

    private $logger;

    public function __construct(CounterInterface $redisCounter, Logger $logger)
    {
        $this->redisCounter = $redisCounter;
        $this->logger       = $logger;
        echo self::class . '已创建' . PHP_EOL;
    }

    public function __toString()
    {
        return '这是' . self::class . PHP_EOL;
    }
}
