<?php

namespace App\Behavioral\State\State;

use App\Behavioral\State\Work;

class EveningState extends State
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
        if ($work->getTaskFinishedState()) {
            //如果完成任务，下班
            $work->setState(new RestState());

            return $work->WriteProgram();
        }

        if ($work->getHour() < 21) {
            return sprintf("当前时间：%s 加班哦，疲惫之极\n", $work->getHour());
        }
        //超过21点，则转入睡眠工作状态
        $work->setState(new SleepingState());

        return $work->WriteProgram();
    }
}
