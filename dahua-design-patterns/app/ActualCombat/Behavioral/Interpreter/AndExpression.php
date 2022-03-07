<?php
/**
 * AndExpression.php :
 *
 * PHP version 7.1
 *
 * @category AndExpression
 * @package  App\ActualCombat\Behavioral\Interpreter
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Behavioral\Interpreter;


use Exception;

class AndExpression implements Expression
{
    /**
     * @var Expression[]
     */
    private $expressions;

    public function __construct($ruleExpression)
    {
        $ruleExpression = trim($ruleExpression);
        $expressions    = explode('&&', $ruleExpression);
        foreach ($expressions as $expression) {
            if (strpos($expression, '<') !== false) {
                $this->expressions[] = new LessExpression($expression);
            } elseif (strpos($expression, '==') !== false) {
                $this->expressions[] = new EqualExpression($expression);
            } elseif (strpos($expression, '>') !== false) {
                $this->expressions[] = new GreaterExpression($expression);
            } else {
                throw new Exception('表达式有误');
            }
        }
    }

    public function interpreter($stats)
    {
        foreach ($this->expressions as $expression) {
            if (!$expression->interpreter($stats)) {
                return false;
            }
        }
        return true;
    }
}
