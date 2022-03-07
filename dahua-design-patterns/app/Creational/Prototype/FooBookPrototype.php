<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace App\Creational\Prototype;

class FooBookPrototype extends BookPrototype
{
    protected $category = 'Foo';

    /**
     * 克隆方法.
     */
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}
