<?php
/**
 * Item.php :.
 *
 * PHP version 7.1
 *
 * @category Item
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Specification;

/**
 * Item :.
 *
 * @category Item
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */
class Item
{
    protected $price;

    /**
     * An item must have a price.
     *
     * @param int $price
     */
    public function __construct($price)
    {
        $this->price = $price;
    }

    /**
     * 获取价格
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }
}
