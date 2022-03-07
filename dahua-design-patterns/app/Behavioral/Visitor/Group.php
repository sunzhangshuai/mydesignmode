<?php
/**
 * Group.php :.
 *
 * PHP version 7.1
 *
 * @category Group
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Visitor;

/**
 * Group :.
 *
 * @category Group
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class Group extends Role
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = (string) $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'Group: '.$this->name;
    }
}
