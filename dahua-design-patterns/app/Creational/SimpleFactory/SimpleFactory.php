<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace App\Creational\SimpleFactory;

class SimpleFactory
{
    public function createBicycle(): Bicycle
    {
        return new Bicycle();
    }
}
