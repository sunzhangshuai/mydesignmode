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
use App\Creational\Builder\Products\Truck;

/**
 * 卡车制造商.
 *
 * Class TruckBuilder
 */
class TruckBuilder implements BuilderInterface
{
    /**
     * 卡车.
     *
     * @var Truck
     */
    private $truck;

    /**
     * 制造车辆.
     */
    public function createVehicle()
    {
        $this->truck = new Truck();
    }

    /**
     * 增加轮子.
     */
    public function addWheel()
    {
        $this->truck->setPart('wheel1', new Wheel());
        $this->truck->setPart('wheel2', new Wheel());
        $this->truck->setPart('wheel3', new Wheel());
        $this->truck->setPart('wheel4', new Wheel());
        $this->truck->setPart('wheel5', new Wheel());
        $this->truck->setPart('wheel6', new Wheel());
    }

    /**
     * 增加发动机.
     */
    public function addEngine()
    {
        $this->truck->setPart('truckEngine', new Engine());
    }

    /**
     * 增加车门.
     */
    public function addDoors()
    {
        $this->truck->setPart('rightDoor', new Door());
        $this->truck->setPart('leftDoor', new Door());
    }

    /**
     * 获取车辆.
     *
     * @return Truck|mixed
     */
    public function getVehicle()
    {
        return $this->truck;
    }
}
