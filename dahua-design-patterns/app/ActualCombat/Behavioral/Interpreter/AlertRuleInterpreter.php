<?php
/**
 * AlertRuleInterpreter.php :
 *
 * PHP version 7.1
 *
 * @category AlertRuleInterpreter
 * @package  App\ActualCombat\Behavioral\Interpreter
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Behavioral\Interpreter;


class AlertRuleInterpreter
{
    protected $expression;

    public function __construct($ruleExpression)
    {
        $this->expression = new OrExpression($ruleExpression);
    }

    public function interpret($stats)
    {
        return $this->expression->interpreter($stats);
    }
}
