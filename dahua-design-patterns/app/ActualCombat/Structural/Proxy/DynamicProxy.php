<?php
/**
 * DynamicProxy.php :
 *
 * PHP version 7.1
 *
 * @category DynamicProxy
 * @package  App\ActualCombat\Structural\Proxy
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Structural\Proxy;


use ReflectionClass;

class DynamicProxy
{
    private static $instance;

    private $config = [
        User::class => Proxy::class
    ];

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function proxy($class_name)
    {
        $instance = (new ReflectionClass($class_name))->newInstance();
        if (isset($this->config[$class_name])) {
            $reflector = new ReflectionClass($this->config[$class_name]);
            return $reflector->newInstanceArgs([$instance]);
        }
        return $instance;
    }
}
