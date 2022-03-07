<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace Tests\Unit;

use Tests\TestCase;
use App\Creational\Pool\WorkerPool;

class PoolTest extends TestCase
{
    /**
     * @group pool
     */
    public function testCanGetNewInstancesWithGet()
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $worker2 = $pool->get();

        $this->assertEquals(2, $pool->count());
        $this->assertNotSame($worker1, $worker2);
    }

    /**
     * @group pool
     */
    public function testCanGetSameInstanceTwiceWhenDisposingItFirst()
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $pool->dispose($worker1);
        $worker2 = $pool->get();

        $this->assertEquals(1, $pool->count());
        $this->assertSame($worker1, $worker2);
    }
}
