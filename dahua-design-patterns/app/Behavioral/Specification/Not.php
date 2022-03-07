<?php
/**
 * Not.php :.
 *
 * PHP version 7.1
 *
 * @category Not
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Specification;

/**
 * Not : 逻辑非规格.
 *
 * @category Not
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */
class Not extends AbstractSpecification
{
    protected $spec;

    /**
     * Plus constructor.
     *
     * @param SpecificationInterface $spec
     */
    public function __construct(SpecificationInterface $spec)
    {
        $this->spec = $spec;
    }

    /**
     * 返回规格的相反结果.
     *
     * @param Item $item
     *
     * @return bool
     */
    public function isSatisfiedBy(Item $item)
    {
        return ! $this->spec->isSatisfiedBy($item);
    }
}
