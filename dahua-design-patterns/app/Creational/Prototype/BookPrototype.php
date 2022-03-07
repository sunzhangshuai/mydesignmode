<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace App\Creational\Prototype;

abstract class BookPrototype
{
    protected $title;

    protected $category;

    /**
     * 克隆方法.
     */
    abstract public function __clone();

    /**
     * 设置书名.
     *
     * @param $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * 获取书名.
     *
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }
}
