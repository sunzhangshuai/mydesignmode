<?php
/**
 * Produce.php :.
 *
 * PHP version 7.1
 *
 * @category Produce
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Structural\Bridge;

/**
 * Produce : 生产.
 *
 * @category Produce
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */
class Produce implements Workshop
{
    /**
     * 工作.
     *
     * @return void
     */
    public function work()
    {
        echo 'Produced ';
    }
}
