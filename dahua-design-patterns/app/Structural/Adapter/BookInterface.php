<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace App\Structural\Adapter;

interface BookInterface
{
    /**
     * 打开书.
     */
    public function open();

    /**
     * 翻页.
     */
    public function turnPage();

    /**
     * 获取页数.
     *
     * @return int
     */
    public function getPage(): int;
}
