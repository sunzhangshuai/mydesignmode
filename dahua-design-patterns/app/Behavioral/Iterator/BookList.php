<?php
/**
 * BookList.php :.
 *
 * PHP version 7.1
 *
 * @category BookList
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Iterator;

use Countable;

/**
 * BookList :书列.
 *
 * @category BookList
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class BookList implements Countable
{
    /**
     * @var array 书列
     */
    private $books = [];

    /**
     * 根据索引获取书.
     *
     * @param int $bookNumberToGet
     *
     * @return mixed|null
     */
    public function getBook(int $bookNumberToGet)
    {
        if (isset($this->books[$bookNumberToGet])) {
            return $this->books[$bookNumberToGet];
        }
    }

    /**
     * 增加书.
     *
     * @param Book $book
     */
    public function addBook(Book $book)
    {
        $this->books[] = $book;
    }

    /**
     * 移除书.
     *
     * @param Book $bookToRemove
     */
    public function removeBook(Book $bookToRemove)
    {
        foreach ($this->books as $key => $book) {
            /** @var Book $book */
            if ($book->getAuthorAndTitle() === $bookToRemove->getAuthorAndTitle()) {
                unset($this->books[$key]);
            }
        }
    }

    /**
     * Count elements of an object.
     *
     * @link  https://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     * @since 5.1.0
     */
    public function count()
    {
        return count($this->books);
    }
}
