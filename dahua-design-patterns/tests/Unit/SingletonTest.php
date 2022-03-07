<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace Tests\Unit;

use Tests\TestCase;
use App\Creational\Singleton\Singleton;

/**
 * 单例模式单元测试.
 *
 * Class SingletonTest
 */
class SingletonTest extends TestCase
{
    /**
     * @group singleton
     */
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}
