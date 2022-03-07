<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace App\Structural\Adapter;

/**
 * 电子书接口.
 *
 * Interfaces EBookInterface
 */
interface EBookInterface
{
    /**
     * 解锁
     */
    public function unlock();

    /**
     * 点击下一步.
     */
    public function pressNext();

    /**
     * 获取页码信息
     * 返回当前页和总页数，像 [10, 100] 是总页数100中的第10页。
     *
     * @return array
     */
    public function getPage(): array;
}
