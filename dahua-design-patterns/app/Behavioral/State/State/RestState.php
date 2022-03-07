<?php

namespace App\Behavioral\State\State;

use App\Behavioral\State\Work;

class RestState extends State
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
        return sprintf("当前时间：%s 下班回家\n", $work->getHour());
    }
}
