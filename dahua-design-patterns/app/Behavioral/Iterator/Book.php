<?php
/**
 * Book.php :.
 *
 * PHP version 7.1
 *
 * @category Book
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Iterator;

/**
 * Book : 书本类.
 *
 * @category Book
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class Book
{
    /**
     * @var string 作者
     */
    private $author;

    /**
     * @var string 书名
     */
    private $title;

    /**
     * Book constructor.
     *
     * @param $author
     * @param $title
     */
    public function __construct($author, $title)
    {
        $this->author = $author;
        $this->title = $title;
    }

    /**
     * @return string 获取作者
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return string 获取书名
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string 获取作者和书名
     */
    public function getAuthorAndTitle()
    {
        return $this->getTitle().' by '.$this->getAuthor();
    }
}
