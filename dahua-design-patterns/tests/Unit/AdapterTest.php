<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace Tests\Unit;

use Tests\TestCase;
use App\Structural\Adapter\Book;
use App\Structural\Adapter\Kindle;
use App\Structural\Adapter\EBookAdapter;

/**
 * 适配器类单元测试.
 *
 * Class AdapterTest
 */
class AdapterTest extends TestCase
{
    /**
     * 测试纸质书翻页.
     *
     * @group adapter
     */
    public function testCanTurnPageOnBook()
    {
        $book = new Book();
        $book->open();
        $book->turnPage();

        $this->assertEquals(2, $book->getPage());
    }

    /**
     * 测试电子书翻页.
     *
     * @group adapter
     */
    public function testCanTurnPageOnKindleLikeInANormalBook()
    {
        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);

        $book->open();
        $book->turnPage();

        $this->assertEquals(2, $book->getPage());
    }
}
