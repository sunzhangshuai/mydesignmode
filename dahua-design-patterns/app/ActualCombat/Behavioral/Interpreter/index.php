<?php
/**
 * index.php :
 *
 * PHP version 7.1
 *
 * @category ${NAME}
 * @package  ${NAMESPACE}
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

use App\ActualCombat\Behavioral\Interpreter\AlertRuleInterpreter;

include __DIR__ . '/' . 'Expression.php';
include __DIR__ . '/' . 'EqualExpression.php';
include __DIR__ . '/' . 'LessExpression.php';
include __DIR__ . '/' . 'GreaterExpression.php';
include __DIR__ . '/' . 'AndExpression.php';
include __DIR__ . '/' . 'OrExpression.php';
include __DIR__ . '/' . 'AlertRuleInterpreter.php';

$rule = "key1 > 100 && key2 < 30 || key3 < 100 || key4 == 88";
$stats = [
    'key1' => 101,
    'key3' => 121,
    'key4' => 88
];
var_dump((new AlertRuleInterpreter($rule))->interpret($stats));

