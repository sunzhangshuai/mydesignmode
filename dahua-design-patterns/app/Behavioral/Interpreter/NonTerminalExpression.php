<?php
/**
 * NonTerminalExpression.php :.
 *
 * PHP version 7.1
 *
 * @category NonTerminalExpression
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Interpreter;

/**
 * NonTerminalExpression : 非终端解释器类.
 *
 * @category NonTerminalExpression
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class NonTerminalExpression implements AbstractExpression
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
        return '非终端解释器';
    }
}
