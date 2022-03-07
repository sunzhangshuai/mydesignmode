<?php
/**
 * BookListIterator.php :.
 *
 * PHP version 7.1
 *
 * @category BookListIterator
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Iterator;

use Iterator;

/**
 * BookListIterator :书列迭代器.
 *
 * @category BookListIterator
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class BookListIterator implements Iterator
{
    /**
     * @var BookList 书列
     */
    protected $bookList;

    /**
     * @var int 当前书本的索引
     */
    protected $currentBook = 0;

    /**
     * BookListIterator constructor.
     *
     * @param BookList $bookList
     */
    public function __construct(BookList $bookList)
    {
        $this->bookList = $bookList;
    }

    /**
     * Return the current element.
     *
     * @link  https://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
     * @since 5.0.0
     */
    public function current()
    {
        return $this->bookList->getBook($this->key());
    }

    /**
     * Move forward to next element.
     *
     * @link  https://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function next()
    {
        $this->currentBook++;
    }

    /**
     * Return the key of the current element.
     *
     * @link  https://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     * @since 5.0.0
     */
    public function key()
    {
        return $this->currentBook;
    }

    /**
     * Checks if current position is valid.
     *
     * @link  https://php.net/manual/en/iterator.valid.php
     * @return bool The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     * @since 5.0.0
     */
    public function valid()
    {
        return null !== $this->current();
    }

    /**
     * Rewind the Iterator to the first element.
     *
     * @link  https://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function rewind()
    {
        $this->currentBook = 0;
    }
}
