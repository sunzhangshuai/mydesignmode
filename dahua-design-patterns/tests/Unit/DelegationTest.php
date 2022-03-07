<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\OtherPatterns\Delegation\TeamLead;
use App\OtherPatterns\Delegation\JuniorDeveloper;

/**
 * DelegationTest : 委托模式测试类.
 *
 * @category DelegationTest
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */
class DelegationTest extends TestCase
{
    /**
     * @group delegation
     *
     * @return void
     */
    public function testHowTeamLeadWriteCode()
    {
        $junior = new JuniorDeveloper();
        $teamLead = new TeamLead($junior);
        $this->assertEquals($junior->writeBadCode(), $teamLead->writeCode());
    }
}
