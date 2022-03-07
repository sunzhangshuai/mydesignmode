<?php
/**
 * ValueAccessInterface.php :.
 *
 * PHP version 7.1
 *
 * @category ValueAccessInterface
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\OtherPatterns\EAV;

/**
 * 值访问接口.
 *
 * Interfaces ValueAccessInterface
 */
interface ValueAccessInterface
{
    /**
     * @return mixed
     */
    public function getValues();

    /**
     * @param ValueInterface $value
     *
     * @return void
     */
    public function addValue(ValueInterface $value);

    /**
     * @param ValueInterface $value
     *
     * @return void
     */
    public function removeValue(ValueInterface $value);
}
