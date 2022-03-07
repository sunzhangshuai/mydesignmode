<?php
/**
 * LessExpression.php :
 *
 * PHP version 7.1
 *
 * @category LessExpression
 * @package  App\ActualCombat\Behavioral\Interpreter
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Behavioral\Interpreter;


use Exception;

class LessExpression implements Expression
{
    protected $key;

    protected $value;

    public function __construct($ruleExpression)
    {
        $terms = explode('<', $ruleExpression);
        if (count($terms) != 2) {
            throw new Exception('表达式有误');
        }
        $this->key   = trim($terms[0]);
        $this->value = trim($terms[1]);
    }

    public function interpreter($stats)
    {
        if (!isset($stats[$this->key])) {
            return false;
        }
        return $stats[$this->key] < $this->value;
    }
}
