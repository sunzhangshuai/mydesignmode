<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Behavioral\Mediator\Mediator;
use App\Behavioral\Mediator\Subsystem\Client;
use App\Behavioral\Mediator\Subsystem\Server;
use App\Behavioral\Mediator\Subsystem\Database;

/**
 * MediatorTest : 中介者模式测试.
 *
 * @category MediatorTest
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class MediatorTest extends TestCase
{
    protected $client;

    protected function setUp():void
    {
        $media = new Mediator();
        $this->client = new Client($media);
        $media->setColleague(new Database($media), $this->client, new Server($media));
    }

    /**
     * @group mediator
     */
    public function testOutputHelloWorld()
    {
        // 测试是否输出 Hello World :
        $this->expectOutputString('Hello World');
        // 正如你所看到的, Client, Server 和 Database 是完全解耦的
        $this->client->request();
    }
}
