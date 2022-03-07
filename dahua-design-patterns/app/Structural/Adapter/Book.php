<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace App\Structural\Adapter;

/**
 * 书实现类.
 *
 * Class Book
 */
class Book implements BookInterface
{
    /**
     * @var int 页数
     */
    private $page;

    /**
     * 打开书.
     */
    public function open()
    {
        $this->page = 1;
    }

    /**
     * 翻页.
     */
    public function turnPage()
    {
        $this->page++;
    }

    /**
     * 获取页数.
     */
    public function getPage(): int
    {
        return $this->page;
    }
}
