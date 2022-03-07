<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace Tests\Unit;

use Tests\TestCase;
use App\Creational\SimpleFactory\Bicycle;
use App\Creational\SimpleFactory\SimpleFactory;

/**
 * 简单工厂模式测试.
 *
 * Class SimpleFactoryTest
 */
class SimpleFactoryTest extends TestCase
{
    /**
     * @group simpleFactory
     */
    public function testCanCreateBicycle()
    {
        $bicycle = (new SimpleFactory())->createBicycle();
        $this->assertInstanceOf(Bicycle::class, $bicycle);
    }

    /**
     * @group simpleFactory
     */
    public function testBicycleDrive()
    {
        $bicycle = (new SimpleFactory())->createBicycle();

        $destination = '老家';
        $this->assertStringContainsString('驶向'.$destination, $bicycle->driveTo($destination));
    }
}
