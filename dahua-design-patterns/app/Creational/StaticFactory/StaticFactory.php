<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace App\Creational\StaticFactory;

use InvalidArgumentException;

/**
 * 静态工厂类.
 *
 * 注意点1: 记住，静态意味着全局状态，因为它不能被模拟进行测试，所以它是有弊端的
 * 注意点2: 不能被分类或模拟或有多个不同的实例。
 *
 * Class StaticFactory
 */
class StaticFactory
{
    public static function factory($type)
    {
        if ('number' == $type) {
            return new FormatNumber();
        }

        if ('string' == $type) {
            return new FormatString();
        }

        throw new InvalidArgumentException('Unknown format given');
    }
}
