<?php
/**
 * Expression.php :
 *
 * PHP version 7.1
 *
 * @category Expression
 * @package  App\ActualCombat\Behavioral\Interpreter
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Behavioral\Interpreter;


interface Expression
{
    public function __construct($ruleExpression);

    public function interpreter($stats);
}
