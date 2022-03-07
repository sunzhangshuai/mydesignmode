<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace App\Creational\FactoryMethod;

/**
 * 标准输出日志工厂
 *
 * Class StdoutLoggerFactory
 */
class StdoutLoggerFactory implements LoggerFactory
{
    public function createLogger()
    {
        return new StdoutLogger();
    }
}
