<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Structural\Decorator\Decorates\Shoes;
use App\Structural\Decorator\Persons\SuperMan;
use App\Structural\Decorator\Decorates\TShirts;
use App\Structural\Decorator\Decorates\Underwear;
use App\Structural\Decorator\Decorates\BigTrouser;

/**
 * DecoratorTest : 装饰器模式测试类.
 *
 * @category DecoratorTest
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class DecoratorTest extends TestCase
{
    /**
     * @group decorator
     */
    public function testSuperMan()
    {
        $person = new SuperMan('张帅');
        $this->assertEquals('飞', $person->fly());
    }

    /**
     * 装扮测试.
     *
     * @group decorator
     */
    public function testDecorate()
    {
        $person = new SuperMan('张帅');

        $bigTrouser = new BigTrouser();
        $shoes = new Shoes();
        $tShirts = new TShirts();
        $underwear = new Underwear();

        $bigTrouser->decorate($person);
        $shoes->decorate($bigTrouser);
        $tShirts->decorate($shoes);
        $underwear->decorate($tShirts);

        $underwear->show();

        $this->expectOutputString('张帅穿了垮裤 皮鞋 大T恤 袜子 ');
    }
}
