<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace App\Creational\Pool;

use DateTime;

/**
 * 字符串反转类.
 *
 * Class StringReverseWorker
 */
class StringReverseWorker
{
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new DateTime();
    }

    public function run($text)
    {
        return strrev($text);
    }
}
