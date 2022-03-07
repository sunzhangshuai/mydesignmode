<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Behavioral\State\Work;

class StateTest extends TestCase
{
    /**
     * 测试状态模式.
     *
     * @group state
     *
     * @return void
     */
    public function testState()
    {
        $emergencyProjects = new Work();

        $emergencyProjects->setHour(9);
        $this->assertContains(
            '当前时间：9 上午工作，精神百倍', $emergencyProjects->WriteProgram()
        );

        $emergencyProjects->setHour(10);
        $this->assertContains(
            '当前时间：10 上午工作，精神百倍', $emergencyProjects->WriteProgram()
        );

        $emergencyProjects->setHour(12);
        $this->assertContains(
            '当前时间：12 饿了，午饭；犯困，午休', $emergencyProjects->WriteProgram()
        );

        $emergencyProjects->setHour(13);
        $this->assertContains(
            '当前时间：13 下午状态不错，继续努力', $emergencyProjects->WriteProgram()
        );

        $emergencyProjects->setHour(14);
        $this->assertContains(
            '当前时间：14 下午状态不错，继续努力', $emergencyProjects->WriteProgram()
        );

        $emergencyProjects->setHour(17);
        $emergencyProjects->setTaskFinished(false);
        $this->assertContains(
            '当前时间：17 加班哦，疲惫之极', $emergencyProjects->WriteProgram()
        );

        $emergencyProjects->setHour(19);
        $this->assertContains(
            '当前时间：19 加班哦，疲惫之极', $emergencyProjects->WriteProgram()
        );

        $emergencyProjects->setHour(22);
        $this->assertContains('当前时间：22 不行了，睡觉', $emergencyProjects->WriteProgram());
    }
}
