<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Behavioral\Specification\Item;
use App\Behavioral\Specification\PriceSpecification;

/**
 * SpecificationTest : 规格模式测试.
 *
 * @category SpecificationTest
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */
class SpecificationTest extends TestCase
{
    /**
     * 简单规格测试.
     *
     * @group specification
     */
    public function testSimpleSpecification()
    {
        $item = new Item(100);
        $spec = new PriceSpecification();

        $this->assertTrue($spec->isSatisfiedBy($item));

        $spec->setMaxPrice(50);
        $this->assertFalse($spec->isSatisfiedBy($item));

        $spec->setMaxPrice(150);
        $this->assertTrue($spec->isSatisfiedBy($item));

        $spec->setMinPrice(101);
        $this->assertFalse($spec->isSatisfiedBy($item));

        $spec->setMinPrice(100);
        $this->assertTrue($spec->isSatisfiedBy($item));
    }

    /**
     * 逻辑非规格测试.
     *
     * @group specification
     */
    public function testNotSpecification()
    {
        $item = new Item(100);
        $spec = new PriceSpecification();
        $not = $spec->not();

        $this->assertFalse($not->isSatisfiedBy($item));

        $spec->setMaxPrice(50);
        $this->assertTrue($not->isSatisfiedBy($item));

        $spec->setMaxPrice(150);
        $this->assertFalse($not->isSatisfiedBy($item));

        $spec->setMinPrice(101);
        $this->assertTrue($not->isSatisfiedBy($item));

        $spec->setMinPrice(100);
        $this->assertFalse($not->isSatisfiedBy($item));
    }

    /**
     * 逻辑与规格测试.
     *
     * @group specification
     */
    public function testPlusSpecification()
    {
        $spec1 = new PriceSpecification();
        $spec2 = new PriceSpecification();
        $plus = $spec1->plus($spec2);

        $item = new Item(100);

        $this->assertTrue($plus->isSatisfiedBy($item));

        $spec1->setMaxPrice(150);
        $spec2->setMinPrice(50);
        $this->assertTrue($plus->isSatisfiedBy($item));

        $spec1->setMaxPrice(150);
        $spec2->setMinPrice(101);
        $this->assertFalse($plus->isSatisfiedBy($item));

        $spec1->setMaxPrice(99);
        $spec2->setMinPrice(50);
        $this->assertFalse($plus->isSatisfiedBy($item));
    }

    /**
     * 逻辑或规格测试.
     *
     * @group specification
     */
    public function testEitherSpecification()
    {
        $spec1 = new PriceSpecification();
        $spec2 = new PriceSpecification();
        $either = $spec1->either($spec2);

        $item = new Item(100);

        $this->assertTrue($either->isSatisfiedBy($item));

        $spec1->setMaxPrice(150);
        $spec2->setMaxPrice(150);
        $this->assertTrue($either->isSatisfiedBy($item));

        $spec1->setMaxPrice(150);
        $spec2->setMaxPrice(0);
        $this->assertTrue($either->isSatisfiedBy($item));

        $spec1->setMaxPrice(0);
        $spec2->setMaxPrice(150);
        $this->assertTrue($either->isSatisfiedBy($item));

        $spec1->setMaxPrice(99);
        $spec2->setMaxPrice(99);
        $this->assertFalse($either->isSatisfiedBy($item));
    }
}
