<?php
/**
 * SunChen.php :
 *
 * PHP version 7.1
 *
 * @category SunChen
 * @package  App\ActualCombat\Creational\Prototype\Object
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Creational\Prototype\Object;


class SunChen
{
    public $name;

    public $maomao;

    public function __construct(MaoMao $maoMao) {
        $this->maomao = $maoMao;
        $this->name = '孙晨';
    }

    public function __toString()
    {
        return $this->name . '|' . $this->maomao;
    }
}
