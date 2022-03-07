<?php
/**
 * Vehicle.php :.
 *
 * PHP version 7.1
 *
 * @category Vehicle
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Structural\Bridge;

/**
 * Vehicle : 车辆类.
 *
 * @category Vehicle
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */
abstract class Vehicle
{
    protected $workShopA;
    protected $workShopB;

    /**
     * Vehicle constructor.
     *
     * @param Workshop $workShopA
     * @param Workshop $workShopB
     */
    public function __construct(Workshop $workShopA, Workshop $workShopB)
    {
        $this->workShopA = $workShopA;
        $this->workShopB = $workShopB;
    }

    /**
     * 制造.
     *
     * @return void
     */
    abstract public function manufacture();
}
