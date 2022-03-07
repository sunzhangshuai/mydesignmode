<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Behavioral\Iterator\Book;
use App\Behavioral\Iterator\BookList;
use Illuminate\Foundation\Testing\WithFaker;
use App\Behavioral\Iterator\BookListIterator;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Behavioral\Iterator\BookListReverseIterator;

/**
 * IteratorTest :.
 *
 * @category IteratorTest
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class IteratorTest extends TestCase
{
    /**
     * @var BookList
     */
    protected $bookList;

    public function setUp(): void
    {
        $this->bookList = new BookList();
        $this->bookList->addBook(new Book('张帅', '孙孙是傻逼'));
        $this->bookList->addBook(new Book('还是张帅', '孙孙是个大傻逼'));
        $this->bookList->addBook(new Book('孙孙', '对，我是傻逼'));
    }

    /**
     * @return array
     */
    public function expectedAuthors()
    {
        return [
            [
                [
                    '孙孙是傻逼 by 张帅',
                    '孙孙是个大傻逼 by 还是张帅',
                    '对，我是傻逼 by 孙孙',
                ],
            ],
        ];
    }

    /**
     * @group         iterator
     *
     * @dataProvider  expectedAuthors
     *
     * @param $expected
     */
    public function testUseAIteratorAndValidateAuthors($expected)
    {
        $iterator = new BookListIterator($this->bookList);

        while ($iterator->valid()) {
            $expectedBook = array_shift($expected);
            $this->assertEquals($expectedBook, $iterator->current()->getAuthorAndTitle());
            $iterator->next();
        }
    }

    /**
     * @group         iterator
     *
     * @dataProvider  expectedAuthors
     *
     * @param $expected
     */
    public function testUseAReverseIteratorAndValidateAuthors($expected)
    {
        $iterator = new BookListReverseIterator($this->bookList);

        while ($iterator->valid()) {
            $expectedBook = array_pop($expected);
            $this->assertEquals($expectedBook, $iterator->current()->getAuthorAndTitle());
            $iterator->next();
        }
    }

    /**
     * @group iterator
     */
    public function testBookRemove()
    {
        $this->bookList->removeBook($this->bookList->getBook(0));
        $this->assertEquals($this->bookList->count(), 2);
    }
}
