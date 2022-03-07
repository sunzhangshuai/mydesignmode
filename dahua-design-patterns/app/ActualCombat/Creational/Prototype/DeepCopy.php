<?php
/**
 * DeepCopy.php :
 *
 * PHP version 7.1
 *
 * @category DeepCopy
 * @package  App\ActualCombat\Creational\Prototype
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Creational\Prototype;


use App\ActualCombat\Creational\Prototype\Object\SunChen;
use App\ActualCombat\Creational\Prototype\Object\ZhangShuai;

class DeepCopy
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


    /**
     * 递归拷贝
     *
     * @param $new
     * @param $old
     */
    public function copy1($new, $old)
    {
        $attributes = get_class_vars(get_class($old));
        foreach ($attributes as $key => $attribute) {
            if (is_object($old->$key)) {
                $new->$key = clone $old->$key;
                $this->copy1($new->$key, $old->$key);
            }
        }
    }

    /**
     * 通过序列化深拷贝
     */
    public function copy2()
    {
        $string = serialize($this);
        return unserialize($string);
    }


    public function __clone()
    {
        $this->copy1($this, $this);
    }
}
