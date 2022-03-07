<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace App\Structural\Proxy;

use OutOfRangeException;

class Record
{
    private $data;

    public function __construct($data = [])
    {
        $this->data = $data;
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        if (! isset($this->data[$name])) {
            throw new OutOfRangeException('Invalid name given');
        }

        return $this->data[$name];
    }
}
