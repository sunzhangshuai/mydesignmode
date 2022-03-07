<?php
/**
 * ServiceLocatorInterface.php :.
 *
 * PHP version 7.1
 *
 * @category ServiceLocatorInterface
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\OtherPatterns\ServiceLocator;

/**
 * 服务定位器接口定义.
 *
 * Interfaces ServiceLocatorInterface
 */
interface ServiceLocatorInterface
{
    /**
     * 判断服务是否被注册.
     *
     * @param $interface
     *
     * @return bool
     */
    public function has($interface): bool;

    /**
     * 通过接口名获取服务
     *
     * @param $interface
     *
     * @return mixed
     */
    public function get($interface);
}
