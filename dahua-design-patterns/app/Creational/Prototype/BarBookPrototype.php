<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace App\Creational\Prototype;

class BarBookPrototype extends BookPrototype
{
    protected $category = 'Bar';

    /**
     * 克隆方法.
     */
    public function __clone()
    {
    }
}
