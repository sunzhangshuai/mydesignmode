<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Structural\Bridge\Car;
use App\Structural\Bridge\Produce;
use App\Structural\Bridge\Assemble;
use App\Structural\Bridge\Motorcycle;

/**
 * BridgeTest : 桥接模式测试.
 *
 * @category BridgeTest
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */
class BridgeTest extends TestCase
{
    /**
     * @group bridge
     */
    public function testCar()
    {
        $vehicle = new Car(new Produce(), new Assemble());
        $this->expectOutputString('Car Produced Assembled');
        $vehicle->manufacture();
    }

    /**
     * @group bridge
     */
    public function testMotorcycle()
    {
        $vehicle = new Motorcycle(new Produce(), new Assemble());
        $this->expectOutputString('Motorcycle Produced Assembled');
        $vehicle->manufacture();
    }
}
