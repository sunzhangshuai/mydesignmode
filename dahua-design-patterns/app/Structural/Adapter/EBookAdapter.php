<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace App\Structural\Adapter;

/**
 * 电子书适配器.
 *
 * Class EBookAdapter
 */
class EBookAdapter implements BookInterface
{
    /**
     * @var EBookInterface 电子书
     */
    private $eBook;

    public function __construct(EBookInterface $eBook)
    {
        $this->eBook = $eBook;
    }

    /**
     * 打开书.
     */
    public function open()
    {
        $this->eBook->unlock();
    }

    /**
     * 翻页.
     */
    public function turnPage()
    {
        $this->eBook->pressNext();
    }

    /**
     * 获取页数.
     *
     * @return int
     */
    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }
}
