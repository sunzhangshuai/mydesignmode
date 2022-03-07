<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace App\Creational\SimpleFactory;

class Bicycle
{
    public function driveTo($destination)
    {
        return '驶向'.$destination;
    }
}
