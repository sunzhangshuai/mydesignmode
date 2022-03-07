<?php
/**
 * Caretaker.php :.
 *
 * PHP version 7.1
 *
 * @category Caretaker
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Memento;

/**
 * Caretaker : 负责人类.
 *
 * @category Caretaker
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class Caretaker
{
    /**
     * @var Memento 备忘录
     */
    public $memento;

    /**
     * 负责人初始化备忘录.
     *
     * Caretaker constructor.
     *
     * @param Memento $memento
     */
    public function __construct(Memento $memento)
    {
        $this->memento = $memento;
    }
}
