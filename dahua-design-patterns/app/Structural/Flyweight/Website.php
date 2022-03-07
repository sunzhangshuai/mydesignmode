<?php
/**
 * Website.php :.
 *
 * PHP version 7.1
 *
 * @category Website
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Structural\Flyweight;

/**
 * Website : 网站类.
 *
 * @category Website
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
abstract class Website
{
    abstract public function use(User $user);
}
