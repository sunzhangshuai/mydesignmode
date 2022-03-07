<?php
/**
 * ArrayList.php :
 *
 * PHP version 7.1
 *
 * @category ArrayList
 * @package  App\ActualCombat\Behavioral\Iterator
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Behavioral\Iterator;


class ArrayList implements ListInterface
{
    public $actualSize = 0; //不包含标记删除元素
    public $totalSize = 0; //包含标记删除元素

    public $realElements = [];

    public $elements = [];

    public $addTimestamps = [];

    public $delTimestamps = [];

    public function add($object)
    {
        $this->elements[$this->totalSize]      = $object;
        $this->addTimestamps[$this->totalSize] = $this->microtime();
        $this->realElements[$this->actualSize]= $object;
        $this->totalSize++;
        $this->actualSize++;
    }

    public function remove($object)
    {
        foreach ($this->elements as $index => $element) {
            if ($element === $object) {
                $this->delTimestamps[$index] = $this->microtime();
            }
        }
        $slow = $fast = 0;
        $length = count($this->realElements);
        while ($fast < $length) {
            if ($this->realElements[$slow] === $object) {
                $this->realElements[$slow] = $this->realElements[$fast];
                $this->actualSize--;
                $fast++;
            } else {
                $slow++;
                $fast++;
            }
        }
    }

    public function get($index)
    {
        return $this->realElements[$index];
    }

    public function iterator()
    {
        return new ArrayIterator($this);
    }

    public function microtime()
    {
        list($msec, $sec) = explode(' ', microtime());
        return $sec . $msec;
    }
}
