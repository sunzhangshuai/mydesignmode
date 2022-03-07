<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace Tests\Unit;

use Tests\TestCase;
use App\Creational\StaticFactory\FormatNumber;
use App\Creational\StaticFactory\FormatString;
use App\Creational\StaticFactory\StaticFactory;

/**
 * 静态工厂测试.
 *
 * Class StaticFactoryTest
 */
class StaticFactoryTest extends TestCase
{
    /**
     * @group staticFactory
     */
    public function testCanCreateNumberFormatter()
    {
        $this->assertInstanceOf(
            FormatNumber::class,
            StaticFactory::factory('number')
        );
    }

    /**
     * @group staticFactory
     */
    public function testCanCreateStringFormatter()
    {
        $this->assertInstanceOf(
            FormatString::class,
            StaticFactory::factory('string')
        );
    }

    /**
     * @group staticFactory
     * @expectedException \InvalidArgumentException
     */
    public function testException()
    {
        StaticFactory::factory('object');
    }
}
