<?php
/**
 * AbstractExpression.php :.
 *
 * PHP version 7.1
 *
 * @category AbstractExpression
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Interpreter;

/**
 * 抽象表达式.
 *
 * Interfaces AbstractExpression
 */
interface AbstractExpression
{
    /**
     * 解释.
     *
     * @param Context $context
     *
     * @return string
     */
    public function interpret(Context $context);
}
