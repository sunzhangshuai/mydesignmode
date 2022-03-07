<?php

namespace App\Behavioral\State\State;

use App\Behavioral\State\Work;

class AfterNoonState extends State
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
        if ($work->getHour() < 17) {
            return sprintf("当前时间：%s 下午状态不错，继续努力\n", $work->getHour());
        }

        $work->setState(new EveningState());

        return $work->WriteProgram();
    }
}
