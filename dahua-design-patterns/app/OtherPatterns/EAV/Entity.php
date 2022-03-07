<?php
/**
 * Entity.php :.
 *
 * PHP version 7.1
 *
 * @category Entity
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\OtherPatterns\EAV;

use SplObjectStorage;

class Entity implements ValueAccessInterface
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
     * @param string $name
     * @param Value[] $values
     */
    public function __construct(string $name, $values)
    {
        $this->values = new SplObjectStorage();
        $this->name = $name;

        foreach ($values as $value) {
            $this->values->attach($value);
        }
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
        $text = [$this->name];

        foreach ($this->values as $value) {
            $text[] = (string) $value;
        }

        return implode(', ', $text);
    }
}
