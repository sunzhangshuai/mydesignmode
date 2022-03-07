<?php
/**
 * Iterator.php :
 *
 * PHP version 7.1
 *
 * @category Iterator
 * @package  App\ActualCombat\Behavioral\Iterator
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Behavioral\Iterator;


class ArrayIterator implements IteratorInterface
{
    /**
     * @var ArrayList
     */
    public $list;

    public $createTimestamps;

    public $cursorInAll = 0; // 容器下标

    public $leftCount;

    public $totalSize;

    public function __construct(ArrayList $list)
    {
        $this->createTimestamps = $this->microtime();
        $this->list      = $list;
        $this->leftCount = $list->actualSize;
        $this->totalSize = $list->totalSize;
        $this->jumpNext();
    }

    public function hasNext()
    {
        return $this->leftCount >= 0;
    }

    public function next()
    {
        $result = $this->list->elements[$this->cursorInAll++];
        $this->jumpNext();
        return $result;
    }

    public function jumpNext()
    {
        $this->leftCount--;
        while ($this->cursorInAll < $this->totalSize) {
            if ($this->checkValid()) {
                return;
            }
            $this->cursorInAll++;
        }
    }

    public function checkValid()
    {
        $addTimestamp = $this->list->addTimestamps[$this->cursorInAll];
        $delTimestamp = $this->list->delTimestamps[$this->cursorInAll] ?? '';
        return $this->createTimestamps > $addTimestamp && (!$delTimestamp || $this->createTimestamps < $delTimestamp);
    }

    public function microtime()
    {
        list($msec, $sec) = explode(' ', microtime());
        return $sec . $msec;
    }
}
