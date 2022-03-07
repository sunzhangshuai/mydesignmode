<?php

namespace Tests\Unit;

use StdClass;
use Tests\TestCase;
use App\Structural\Registry\Registry;

/**
 * RegistryTest : 注册树模式.
 *
 * @category RegistryTest
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */
class RegistryTest extends TestCase
{
    /**
     * @group registry
     *
     * @return void
     */
    public function testSetAndGetLogger()
    {
        Registry::set(Registry::LOGGER, new StdClass());

        $logger = Registry::get(Registry::LOGGER);
        $this->assertInstanceOf('StdClass', $logger);
    }
}
