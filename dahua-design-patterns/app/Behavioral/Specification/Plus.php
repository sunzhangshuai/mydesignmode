<?php
/**
 * Plus.php :.
 *
 * PHP version 7.1
 *
 * @category Plus
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Specification;

/**
 * Plus : 逻辑与规格.
 *
 * @category Plus
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */
class Plus extends AbstractSpecification
{
    protected $left;
    protected $right;

    /**
     * Plus constructor.
     *
     * @param SpecificationInterface $left
     * @param SpecificationInterface $right
     */
    public function __construct(SpecificationInterface $left, SpecificationInterface $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    /**
     * 返回两种规格的逻辑与评估.
     *
     * @param Item $item
     *
     * @return bool
     */
    public function isSatisfiedBy(Item $item)
    {
        return $this->left->isSatisfiedBy($item) && $this->right->isSatisfiedBy($item);
    }
}
