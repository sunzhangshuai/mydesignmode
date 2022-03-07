<?php
/**
 * Proxy.php :
 *
 * PHP version 7.1
 *
 * @category Proxy
 * @package  App\ActualCombat\Structural\Proxy
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Structural\Proxy;


class Proxy
{
    private $local;

    private $config = [
        User::class => [
            'insert',
            'delete'
        ],
    ];

    public function __construct($local)
    {
        $this->local = $local;
    }

    public function __call($name, $args)
    {
        $model_name = get_class($this->local);
        if (isset($this->config[$model_name]) && in_array($name, $this->config[$model_name])) {
            echo get_class($this->local) . '的' . $name . '方法开始代理' . PHP_EOL;
            $result = call_user_func_array([$this->local, $name], $args);
            echo get_class($this->local) . '的' . $name . '方法结束代理' . PHP_EOL;
            return $result;
        }
        return call_user_func_array([$this->local, $name], $args);
    }

    public function __get($key)
    {
        return $this->local->$key;
    }
}
