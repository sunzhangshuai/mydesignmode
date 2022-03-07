<?php

namespace App\Behavioral\State\State;

use App\Behavioral\State\Work;

/**
 * 状态模板方法.
 *
 * Class State
 */
abstract class State
{
    /**
     * 写代码
     *
     * @param Work $work
     *
     * @return string
     */
    abstract public function WriteProgram(Work $work);
}
