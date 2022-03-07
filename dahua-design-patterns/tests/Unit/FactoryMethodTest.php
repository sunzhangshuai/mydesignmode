<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace Tests\Unit;

use Tests\TestCase;
use App\Creational\FactoryMethod\FileLogger;
use App\Creational\FactoryMethod\StdoutLogger;
use App\Creational\FactoryMethod\FileLoggerFactory;
use App\Creational\FactoryMethod\StdoutLoggerFactory;

class FactoryMethodTest extends TestCase
{
    /**
     * @group factoryMethod
     */
    public function testCanCreateStdoutLogging()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();
        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    /**
     * @group factoryMethod
     */
    public function testCanCreateFileLogging()
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();
        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}
