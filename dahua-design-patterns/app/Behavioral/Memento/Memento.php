<?php
/**
 * Memento.php :.
 *
 * PHP version 7.1
 *
 * @category Memento
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Memento;

/**
 * Memento : 备忘录.
 *
 * @category Memento
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class Memento
{
    /**
     * @var int 血量
     */
    public $bloodFlow;

    /**
     * @var int 蓝量
     */
    public $magicPoint;

    /**
     * 初始化蓝条，血条
     *
     * Role constructor.
     *
     * @param $bloodFlow
     * @param $magicPoint
     */
    public function __construct($bloodFlow, $magicPoint)
    {
        $this->bloodFlow = $bloodFlow;
        $this->magicPoint = $magicPoint;
    }
}
