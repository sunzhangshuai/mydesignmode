<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Behavioral\Strategy\Content\CashContent;
use App\Behavioral\Strategy\Strategy\CashNormal;
use App\Behavioral\Strategy\Strategy\CashRebate;
use App\Behavioral\Strategy\Strategy\CashReturn;
use App\Behavioral\Strategy\Content\CashFactoryContent;

class StrategyTest extends TestCase
{
    /**
     * @group strategy
     */
    public function testNormalCash()
    {
        $cashStrategy = new CashNormal();
        $content = new CashContent($cashStrategy);
        $this->assertEquals(300, $content->getResult(300));
    }

    /**
     * @group strategy
     */
    public function testRebateCash()
    {
        $cashStrategy = new CashRebate(0.8);
        $content = new CashContent($cashStrategy);
        $this->assertEquals(240, $content->getResult(300));
    }

    /**
     * @group strategy
     */
    public function testReturnCash()
    {
        $cashStrategy = new CashReturn(500, 20);
        $content = new CashContent($cashStrategy);
        $this->assertEquals(300, $content->getResult(300));
        $this->assertEquals(580, $content->getResult(600));
    }

    /**
     * @group strategy
     */
    public function testFactoryNormalCash()
    {
        $content = new CashFactoryContent('正常收费');
        $this->assertEquals(300, $content->getResult(300));
    }

    /**
     * @group strategy
     */
    public function testFactoryRebateCash()
    {
        $content = new CashFactoryContent('打8折');
        $this->assertEquals(240, $content->getResult(300));
    }

    /**
     * @group strategy
     */
    public function testFactoryReturnCash()
    {
        $content = new CashFactoryContent('满500减80');
        $this->assertEquals(300, $content->getResult(300));
        $this->assertEquals(520, $content->getResult(600));
    }
}
