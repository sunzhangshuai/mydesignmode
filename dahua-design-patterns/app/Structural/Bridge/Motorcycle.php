<?php
/**
 * Motorcycle.php :.
 *
 * PHP version 7.1
 *
 * @category Motorcycle
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Structural\Bridge;

/**
 * Motorcycle : 摩托车.
 *
 * @category Motorcycle
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */
class Motorcycle extends Vehicle
{
    /**
     * 制造.
     *
     * @return void
     */
    public function manufacture()
    {
        echo 'Motorcycle ';
        $this->workShopA->work();
        $this->workShopB->work();
    }
}
