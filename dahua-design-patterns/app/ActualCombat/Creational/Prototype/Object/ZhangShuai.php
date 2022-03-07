<?php
/**
 * ZhangShuai.php :
 *
 * PHP version 7.1
 *
 * @category ZhangShuai
 * @package  App\ActualCombat\Creational\Prototype\Object
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Creational\Prototype\Object;


class ZhangShuai
{
    public $name;

    public function __construct() {
        $this->name = '张帅';
    }

    public function __toString()
    {
        return $this->name;
    }
}
