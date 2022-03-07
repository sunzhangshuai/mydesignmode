<?php

namespace App\Structural\Decorator\Persons;

/**
 * 人.
 *
 * Class Person
 */
class Person
{
    protected $name;

    public function __construct($name = '')
    {
        $this->name = $name;
    }

    /**
     * 自我展示.
     */
    public function show()
    {
        echo $this->name.'穿了';
    }

    public function eat()
    {
        return '吃饱了';
    }
}
