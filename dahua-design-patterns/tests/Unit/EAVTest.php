<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\OtherPatterns\EAV\Value;
use App\OtherPatterns\EAV\Entity;
use App\OtherPatterns\EAV\Attribute;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * EAVTest : EAV模式测试类.
 *
 * @category EAVTest
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */
class EAVTest extends TestCase
{
    /**
     * @group eav
     *
     * @return void
     */
    public function testCanAddAttributeToEntity()
    {
        $colorAttribute = new Attribute('color');
        $colorSilver = new Value($colorAttribute);
        $colorSilver->setName('silver');
        $colorBlack = new Value($colorAttribute);
        $colorBlack->setName('black');

        $memoryAttribute = new Attribute('memory');
        $memory8Gb = new Value($memoryAttribute);
        $memory8Gb->setName('8GB');

        $entity = new Entity('MacBook Pro', [$colorSilver, $colorBlack, $memory8Gb]);

        $this->assertEquals('MacBook Pro, color: silver, color: black, memory: 8GB', (string) $entity);
    }
}
