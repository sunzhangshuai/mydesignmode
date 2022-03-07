<?php
/**
 * ShallowCopy.php :
 *
 * PHP version 7.1
 *
 * @category ShallowCopy
 * @package  App\ActualCombat\Creational\Prototype
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Creational\Prototype;


use App\ActualCombat\Creational\Prototype\Object\SunChen;
use App\ActualCombat\Creational\Prototype\Object\ZhangShuai;

class ShallowCopy
{
    public $laogong;

    public $laopo;

    public function __construct(ZhangShuai $zhangShuai, SunChen $sunChen)
    {
        $this->laogong = $zhangShuai;
        $this->laopo   = $sunChen;
    }

    public function __toString()
    {
        return $this->laogong . '|' . $this->laopo;
    }
}
