<?php

namespace App\Behavioral\State;

use App\Behavioral\State\State\State;
use App\Behavioral\State\State\ForenoonState;

class Work
{
    private $current;

    private $finished = true;

    private $hour;

    /**
     * Work constructor.
     */
    public function __construct()
    {
        $this->current = new ForenoonState();
    }

    /**
     * 获取时间.
     *
     * @return mixed
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * 设置时间.
     *
     * @param int $hour 时间
     *
     * @return void
     */
    public function setHour($hour)
    {
        $this->hour = $hour;
    }

    /**
     * 获取任务状态
     *
     * @return mixed
     */
    public function getTaskFinishedState()
    {
        return $this->finished;
    }

    /**
     * 设置任务状态
     *
     * @param bool $bool 任务状态
     *
     * @return void
     */
    public function setTaskFinished($bool)
    {
        $this->finished = $bool;
    }

    /**
     * 设置状态
     *
     * @param State $state 状态
     *
     * @return void
     */
    public function setState(State $state)
    {
        $this->current = $state;
    }

    /**
     * 撸代码
     *
     * @return string
     */
    public function WriteProgram()
    {
        return $this->current->WriteProgram($this);
    }
}
