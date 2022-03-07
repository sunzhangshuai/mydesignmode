<?php
/**
 * AbstractSpecification.php :.
 *
 * PHP version 7.1
 *
 * @category AbstractSpecification
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Specification;

/**
 * AbstractSpecification : 规格抽象类.
 *
 * @category AbstractSpecification
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */
abstract class AbstractSpecification implements SpecificationInterface
{
    /**
     * 判断对象是否满足规格
     *
     * @param Item $item
     *
     * @return bool
     */
    abstract public function isSatisfiedBy(Item $item);

    /**
     * 创建一个逻辑与规格（AND）.
     *
     * @param SpecificationInterface $spec
     *
     * @return SpecificationInterface
     */
    public function plus(SpecificationInterface $spec)
    {
        return new Plus($this, $spec);
    }

    /**
     * 创建一个逻辑或规格（OR）.
     *
     * @param SpecificationInterface $spec
     *
     * @return SpecificationInterface
     */
    public function either(SpecificationInterface $spec)
    {
        return new Either($this, $spec);
    }

    /**
     * 创建一个逻辑非规格（NOT）.
     *
     * @return SpecificationInterface
     */
    public function not()
    {
        return new Not($this);
    }
}
