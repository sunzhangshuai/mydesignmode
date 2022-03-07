<?php
/**
 * Role.php :.
 *
 * PHP version 7.1
 *
 * @category Role
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Memento;

class Role
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

    /**
     * 展示角色当前状态
     *
     * @return string
     */
    public function display()
    {
        return '用户当前状态：血量：'.$this->bloodFlow.'，蓝量：'.$this->magicPoint;
    }

    /**
     * 存档.
     *
     * @return Memento
     */
    public function saveMemento()
    {
        return new Memento($this->bloodFlow, $this->magicPoint);
    }

    /**
     * 载入存档.
     *
     * @param Memento $memento
     */
    public function restoreMemento(Memento $memento)
    {
        $this->bloodFlow = $memento->bloodFlow;
        $this->magicPoint = $memento->magicPoint;
    }
}
