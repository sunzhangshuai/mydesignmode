<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace App\Creational\FactoryMethod;

/**
 * 标准输出日志.
 *
 * Class StdoutLogger
 */
class StdoutLogger implements Logger
{
    public function log($message)
    {
        echo $message;
    }
}
