<?php
/**
 * MaoMao.php :
 *
 * PHP version 7.1
 *
 * @category MaoMao
 * @package  App\ActualCombat\Creational\Prototype\Object
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Creational\Prototype\Object;


class MaoMao
{
    public $name;

    public function __construct() {
        $this->name = '毛毛';
    }

    public function __toString()
    {
        return $this->name;
    }
}
