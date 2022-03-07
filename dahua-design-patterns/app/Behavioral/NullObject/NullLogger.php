<?php
/**
 * NullLogger.php :.
 *
 * PHP version 7.1
 *
 * @category NullLogger
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\NullObject;

/**
 * NullLogger : 核心特性 : 必须实现LoggerInterface接口.
 *
 * @category NullLogger
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */
class NullLogger implements LoggerInterface
{
    /**
     * @param string $str
     *
     * @return void
     */
    public function log($str)
    {
        // do nothing
    }
}
