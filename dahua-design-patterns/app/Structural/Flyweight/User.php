<?php
/**
 * User.php :.
 *
 * PHP version 7.1
 *
 * @category User
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Structural\Flyweight;

/**
 * User : 用户.
 *
 * @category User
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class User
{
    /**
     * @var string 用户名称
     */
    private $name;

    /**
     * User constructor.
     *
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string 获取用户
     */
    public function getName()
    {
        return $this->name;
    }
}
