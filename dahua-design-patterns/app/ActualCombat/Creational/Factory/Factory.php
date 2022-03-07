<?php
/**
 * Factory.php :
 *
 * PHP version 7.1
 *
 * @category Factory
 * @package  App\ActualCombat\Creational\Factory
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Creational\Factory;


use App\ActualCombat\Creational\Factory\IocConfig\Config;
use ReflectionClass;

class Factory
{
    private static $instance;

    private $singletons;

    private $config;

    private function __construct()
    {
        $this->config = new Config();
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

    public function create($class_name)
    {
        // 先看单例有没有
        if (isset($this->singletons[$class_name])) {
            return $this->singletons[$class_name];
        }

        // 再看有没有配置过别名，有就提换
        if (isset($this->config->config[$class_name])) {
            $class_name = $this->config->config[$class_name];
        }

        // 真正创建
        $reflector   = new ReflectionClass($class_name);
        $constructor = $reflector->getConstructor();
        if (!$constructor) {
            $instance = $reflector->newInstance();
        } else {
            $params          = $constructor->getParameters();
            $param_instances = [];
            foreach ($params as $param) {
                $param_instances[] = $this->create($param->getClass()->name);
            }
            $instance = $reflector->newInstanceArgs($param_instances);
        }

        // 再看看是不是单例
        if (in_array($class_name, $this->config->singleton)) {
            $this->singletons[$class_name] = $instance;
        }

        return $instance;
    }
}
