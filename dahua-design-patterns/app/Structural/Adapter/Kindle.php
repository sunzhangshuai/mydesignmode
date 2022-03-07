<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace App\Structural\Adapter;

/**
 * 电子书实现类.
 *
 * Class Kindle
 */
class Kindle implements EBookInterface
{
    /**
     * @var int
     */
    private $page = 1;

    /**
     * @var int
     */
    private $totalPages = 100;

    /**
     * 解锁
     */
    public function unlock()
    {
    }

    /**
     * 点击下一步.
     */
    public function pressNext()
    {
        $this->page++;
    }

    /**
     * 获取页码信息
     * 返回当前页和总页数，像 [10, 100] 是总页数100中的第10页。
     *
     * @return array
     */
    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}
