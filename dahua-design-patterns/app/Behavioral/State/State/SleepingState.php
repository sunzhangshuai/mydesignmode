<?php

namespace App\Behavioral\State\State;

use App\Behavioral\State\Work;

class SleepingState extends State
{
    /**
     * 写代码
     *
     * @param Work $work
     *
     * @return string
     */
    public function WriteProgram(Work $work)
    {
        return sprintf("当前时间：%s 不行了，睡觉\n", $work->getHour());
    }
}
