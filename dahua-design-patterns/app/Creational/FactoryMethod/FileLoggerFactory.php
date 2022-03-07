<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace App\Creational\FactoryMethod;

/**
 * 文件日志工厂
 *
 * Class FileLoggerFactory
 */
class FileLoggerFactory implements LoggerFactory
{
    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function createLogger()
    {
        return new FileLogger($this->filePath);
    }
}
