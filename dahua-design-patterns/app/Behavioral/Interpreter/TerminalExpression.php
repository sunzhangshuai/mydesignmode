<?php
/**
 * TerminalExpression.php :.
 *
 * PHP version 7.1
 *
 * @category TerminalExpression
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Interpreter;

/**
 * TerminalExpression : 终端解释器类.
 *
 * @category TerminalExpression
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class TerminalExpression implements AbstractExpression
{
    /**
     * 解释.
     *
     * @param Context $context
     *
     * @return string
     */
    public function interpret(Context $context)
    {
        return '终端解释器';
    }
}
