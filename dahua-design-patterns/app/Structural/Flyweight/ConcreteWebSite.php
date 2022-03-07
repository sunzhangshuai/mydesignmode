<?php
/**
 * ConcreteWebSite.php :.
 *
 * PHP version 7.1
 *
 * @category ConcreteWebSite
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Structural\Flyweight;

/**
 * ConcreteWebSite : 具体网站类.
 *
 * @category ConcreteWebSite
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class ConcreteWebSite extends Website
{
    /**
     * @var string 网站名称
     */
    private $name = '';

    /**
     * ConcreteWebSite constructor.
     *
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param User $user 使用网站
     *
     * @return string
     */
    public function use(User $user)
    {
        return '网站分类: '.$this->name.'，用户:'.$user->getName();
    }
}
