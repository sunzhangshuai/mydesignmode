<?php
/**
 * FileSystemNode.php :
 *
 * PHP version 7.1
 *
 * @category FileSystemNode
 * @package  App\ActualCombat\Structural\Composite
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Structural\Composite;


abstract class FileSystemNode
{
    public $name;

    public $size;

    public $count;

    public $parent;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getPath()
    {
        $path = '/' . $this->name;
        if ($this->parent) {
            $path =  $this->parent->getPath() . $path;
        }
        return $path;
    }

    public function countNumOfFiles() {
        return $this->count;
    }

    public function countSizeOfFiles() {
        return $this->size;
    }

    public function rename($name) {
        $this->name = $name;
    }
}
