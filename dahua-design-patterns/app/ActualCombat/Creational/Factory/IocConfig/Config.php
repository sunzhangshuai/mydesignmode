<?php
/**
 * Config.php :
 *
 * PHP version 7.1
 *
 * @category Config
 * @package  App\ActualCombat\Creational\Factory\IocConfig
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Creational\Factory\IocConfig;


use App\ActualCombat\Creational\Factory\Impl\MysqlCounter;
use App\ActualCombat\Creational\Factory\Impl\RedisConnect;
use App\ActualCombat\Creational\Factory\Impl\Logger;
use App\ActualCombat\Creational\Factory\Interfaces\CounterInterface;

class Config
{
    public $config = [
        CounterInterface::class => MysqlCounter::class
    ];

    public $singleton = [
        Logger::class,
        RedisConnect::class
    ];
}
