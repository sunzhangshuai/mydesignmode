<?php
/**
 * RolePrintVisitor.php :.
 *
 * PHP version 7.1
 *
 * @category RolePrintVisitor
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Visitor;

/**
 * RolePrintVisitor : Visitor接口的具体实现.
 *
 * @category RolePrintVisitor
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class RolePrintVisitor implements RoleVisitorInterface
{
    /**
     * 访问 User 对象
     *
     * @param User $user
     *
     * @return string
     */
    public function visitUser(User $user)
    {
        return 'Role: '.$user->getName();
    }

    /**
     * 访问 Group 对象
     *
     * @param Group $group
     *
     * @return string
     */
    public function visitGroup(Group $group)
    {
        return 'Role: '.$group->getName();
    }
}
