<?php
/**
 * Database.php :.
 *
 * PHP version 7.1
 *
 * @category Database
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Mediator\Subsystem;

use App\Behavioral\Mediator\Colleague;

/**
 * Database : 提供数据库服务
 *
 * @category Database
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class Database extends Colleague
{
    /**
     * @return string
     */
    public function getData()
    {
        return 'World';
    }
}
