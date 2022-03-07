<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Behavioral\Interpreter\Context;
use App\Behavioral\Interpreter\TerminalExpression;
use App\Behavioral\Interpreter\NonTerminalExpression;

/**
 * InterpreterTest : 解释器模式.
 *
 * @category InterpreterTest
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class InterpreterTest extends TestCase
{
    /**
     * @return array
     */
    public function expectedAuthors()
    {
        return [
            [
                [
                    '终端解释器',
                    '非终端解释器',
                    '终端解释器',
                    '终端解释器',
                ],
            ],
        ];
    }

    /**
     * @group         interpreter
     *
     * @dataProvider  expectedAuthors
     *
     * @param $expected
     *
     * @return void
     */
    public function testInterpreter($expected)
    {
        $context = new Context();
        $syntax = [];
        array_push($syntax, new TerminalExpression());
        array_push($syntax, new NonTerminalExpression());
        array_push($syntax, new TerminalExpression());
        array_push($syntax, new TerminalExpression());

        foreach ($syntax as $value) {
            $expectedContent = array_shift($expected);
            $this->assertEquals($value->interpret($context), $expectedContent);
        }
    }
}
