<?php
/**
 * Role.php :.
 *
 * PHP version 7.1
 *
 * @category Role
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Visitor;

use InvalidArgumentException;

/**
 * Role : 角色类.
 *
 * @category Role
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
abstract class Role
{
    /**
     * 该方法基于Visitor的类名判断调用Visitor的方法。
     * 如果必须调用其他方法，重写本方法即可。
     *
     * @param RoleVisitorInterface $visitor
     *
     * @return string
     */
    public function accept(RoleVisitorInterface $visitor)
    {
        $klass = get_called_class();
        preg_match('#([^\\\\]+)$#', $klass, $extract);
        $visitingMethod = 'visit'.$extract[1];

        if (! method_exists(__NAMESPACE__.'\RoleVisitorInterface', $visitingMethod)) {
            throw new InvalidArgumentException("The visitor you provide cannot visit a $klass instance");
        }

        return call_user_func([$visitor, $visitingMethod], $this);
    }
}
