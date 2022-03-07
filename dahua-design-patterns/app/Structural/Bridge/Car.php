<?php
/**
 * Car.php :.
 *
 * PHP version 7.1
 *
 * @category Car
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Structural\Bridge;

class Car extends Vehicle
{
    /**
     * 制造.
     *
     * @return void
     */
    public function manufacture()
    {
        echo 'Car ';
        $this->workShopA->work();
        $this->workShopB->work();
    }
}
