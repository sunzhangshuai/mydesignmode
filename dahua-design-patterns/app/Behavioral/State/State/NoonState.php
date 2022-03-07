<?php
/**
 * NoonState :中午状态
 *
 * PHP version 7.3
 *
 * @category NoonState
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */

namespace App\Behavioral\State\State;

use App\Behavioral\State\Work;

/**
 * NoonState :中午状态
 *
 * @category NoonState
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class NoonState extends State
{
    /**
     * 写代码
     *
     * @param Work $work 工作
     *
     * @return string
     */
    public function WriteProgram(Work $work)
    {
        if ($work->getHour() < 13) {
            return sprintf("当前时间：%s 饿了，午饭；犯困，午休\n", $work->getHour());
        }
        $work->setState(new AfterNoonState());

        return $work->WriteProgram();
    }
}
