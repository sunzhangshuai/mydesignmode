<?php
/**
 * OrExpression.php :
 *
 * PHP version 7.1
 *
 * @category OrExpression
 * @package  App\ActualCombat\Behavioral\Interpreter
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Behavioral\Interpreter;


class OrExpression implements Expression
{
    private $expressions;

    public function __construct($ruleExpression)
    {
        $ruleExpression = trim($ruleExpression);
        $expressions = explode('||', $ruleExpression);
        foreach ($expressions as $expression) {
            $this->expressions[] = new AndExpression($expression);
        }
    }

    public function interpreter($stats)
    {
        foreach ($this->expressions as $expression) {
            if ($expression->interpreter($stats)) {
                return true;
            }
        }
        return false;
    }
}
