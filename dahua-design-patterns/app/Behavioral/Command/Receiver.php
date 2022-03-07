<?php
/**
 * Receiver.php :.
 *
 * PHP version 7.1
 *
 * @category Receiver
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Command;

/**
 * Receiver : 接收方.
 *
 * @category Receiver
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class Receiver
{
    /**
     * 写.
     *
     * @param string $str
     *
     * @return void
     */
    public function write($str)
    {
        echo $str;
    }
}
