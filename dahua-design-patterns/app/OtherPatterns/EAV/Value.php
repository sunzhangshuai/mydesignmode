<?php
/**
 * Value.php :.
 *
 * PHP version 7.1
 *
 * @category Value
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\OtherPatterns\EAV;

/**
 * Value : value类.
 *
 * @category Value
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */
class Value implements ValueInterface
{
    /**
     * @var Attribute
     */
    private $attribute;

    /**
     * @var string
     */
    private $name;

    /**
     * ValueInterface constructor.
     *
     * @param Attribute $attribute
     */
    public function __construct(Attribute $attribute)
    {
        $this->attribute = $attribute;
    }

    /**
     * @param Attribute $attribute
     *
     * @return void
     */
    public function setAttribute(Attribute $attribute)
    {
        $this->attribute = $attribute;
    }

    /**
     * @return Attribute
     */
    public function getAttribute(): Attribute
    {
        return $this->attribute;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return sprintf('%s: %s', $this->attribute, $this->name);
    }
}
