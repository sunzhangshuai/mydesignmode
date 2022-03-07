<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace App\Creational\Builder\Builders;

use App\Creational\Builder\Parts\Door;
use App\Creational\Builder\Parts\Wheel;
use App\Creational\Builder\Parts\Engine;
use App\Creational\Builder\Products\Car;

/**
 * 汽车制造商.
 *
 * Class CarBuilder
 */
class CarBuilder implements BuilderInterface
{
    /**
     * 汽车.
     *
     * @var Car
     */
    private $car;

    /**
     * 制造车辆.
     */
    public function createVehicle()
    {
        $this->car = new Car();
    }

    /**
     * 增加轮子.
     */
    public function addWheel()
    {
        $this->car->setPart('wheelLF', new Wheel());
        $this->car->setPart('wheelRF', new Wheel());
        $this->car->setPart('wheelLR', new Wheel());
        $this->car->setPart('wheelRR', new Wheel());
    }

    /**
     * 增加发动机.
     */
    public function addEngine()
    {
        $this->car->setPart('engine', new Engine());
    }

    /**
     * 增加车门.
     */
    public function addDoors()
    {
        $this->car->setPart('rightDoor', new Door());
        $this->car->setPart('leftDoor', new Door());
        $this->car->setPart('trunkLid', new Door());
    }

    /**
     * 获取车辆.
     *
     * @return mixed
     */
    public function getVehicle()
    {
        return $this->car;
    }
}
