<?php
/**
 * Attribute.php :.
 *
 * PHP version 7.1
 *
 * @category Attribute
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\OtherPatterns\EAV;

use SplObjectStorage;

/**
 * Attribute : 属性类.
 *
 * @category Attribute
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */
class Attribute implements ValueAccessInterface
{
    /**
     * @var SplObjectStorage
     */
    private $values;

    /**
     * @var string
     */
    private $name;

    /**
     * Attribute constructor.
     *
     * @param $name
     */
    public function __construct($name)
    {
        $this->values = new SplObjectStorage();
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param ValueInterface $value
     *
     * @return void
     */
    public function addValue(ValueInterface $value)
    {
        $this->values->attach($value);
    }

    /**
     * @param ValueInterface $value
     *
     * @return void
     */
    public function removeValue(ValueInterface $value)
    {
        $this->values->detach($value);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->name;
    }
}
