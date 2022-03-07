<?php

namespace App\Behavioral\State\State;

use App\Behavioral\State\Work;

class ForenoonState extends State
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
        if ($work->getHour() < 12) {
            return sprintf("当前时间：%s 上午工作，精神百倍\n", $work->getHour());
        }

        $work->setState(new NoonState());

        return $work->WriteProgram();
    }
}
