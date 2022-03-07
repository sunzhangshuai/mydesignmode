<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace Tests\Unit;

use Tests\TestCase;
use App\Creational\Prototype\BarBookPrototype;
use App\Creational\Prototype\FooBookPrototype;

/**
 * 原型模式测试类.
 *
 * Class PrototypeTest
 */
class PrototypeTest extends TestCase
{
    /**
     * @group prototype
     */
    public function testCanGetFooBook()
    {
        $fooPrototype = new FooBookPrototype();
        $barPrototype = new BarBookPrototype();

        for ($i = 0; $i < 10; $i++) {
            $book = clone $fooPrototype;
            $book->setTitle('Foo Book No '.$i);
            $this->assertInstanceOf(FooBookPrototype::class, $book);
        }

        for ($i = 0; $i < 5; $i++) {
            $book = clone $barPrototype;
            $book->setTitle('Bar Book No '.$i);
            $this->assertInstanceOf(BarBookPrototype::class, $book);
        }
    }
}
