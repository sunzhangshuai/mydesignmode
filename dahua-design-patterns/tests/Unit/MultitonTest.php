<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace Tests\Unit;

use Tests\TestCase;
use App\Creational\Multiton\Multiton;

class MultitonTest extends TestCase
{
    /**
     * @group multiton
     */
    public function testMultiton()
    {
        $instance_zs = Multiton::getInstance('zs');
        $instance_sc = Multiton::getInstance('sc');

        $instance_zs->name = 'zhangshuai';
        $instance_sc->name = 'sunchen';

        self::assertStringContainsString('zhangshuai', $instance_zs->name);
        self::assertStringContainsString('sunchen', $instance_sc->name);
    }
}
