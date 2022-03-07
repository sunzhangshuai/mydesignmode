<?php
/**
 * WebsiteFactory.php :.
 *
 * PHP version 7.1
 *
 * @category WebsiteFactory
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Structural\Flyweight;

/**
 * WebsiteFactory : 网站工厂类.
 *
 * @category WebsiteFactory
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class WebsiteFactory
{
    /**
     * @var array 享元组
     */
    private $flyweights = [];

    /**
     * @param $key
     *
     * @return ConcreteWebSite
     */
    public function getWebSiteCategory($key)
    {
        if (! isset($this->flyweights[$key])) {
            $this->flyweights[$key] = new ConcreteWebSite($key);
        }

        return $this->flyweights[$key];
    }

    /**
     * @return int 获取网站数量
     */
    public function getWebSiteCount()
    {
        return count($this->flyweights);
    }
}
