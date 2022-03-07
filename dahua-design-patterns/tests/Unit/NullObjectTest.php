<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Behavioral\NullObject\Service;
use App\Behavioral\NullObject\NullLogger;
use App\Behavioral\NullObject\PrintLogger;

/**
 * NullObjectTest : 空对象模式测试类.
 *
 * @category NullObjectTest
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */
class NullObjectTest extends TestCase
{
    /**
     * 空对象测试.
     *
     * @group nullObject
     */
    public function testNullObject()
    {
        $service = new Service(new NullLogger());
        $this->expectOutputString('');  // 没有输出
        $service->doSomething();
    }

    /**
     * 非空对象测试.
     *
     * @group nullObject
     */
    public function testStandardLogger()
    {
        $service = new Service(new PrintLogger());
        $this->expectOutputString('We are in App\Behavioral\NullObject\Service::doSomething');
        $service->doSomething();
    }
}
