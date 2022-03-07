<?php
/**
 * Assemble.php :.
 *
 * PHP version 7.1
 *
 * @category Assemble
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Structural\Bridge;

/**
 * Assemble : 组装.
 *
 * @category Assemble
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */
class Assemble implements Workshop
{
    /**
     * 工作.
     *
     * @return void
     */
    public function work()
    {
        echo 'Assembled';
    }
}
