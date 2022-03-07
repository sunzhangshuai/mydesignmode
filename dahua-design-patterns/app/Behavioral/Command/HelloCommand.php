<?php
/**
 * HelloCommand.php :.
 *
 * PHP version 7.1
 *
 * @category HelloCommand
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Command;

/**
 * HelloCommand : 打招呼命令.
 *
 * @category HelloCommand
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class HelloCommand implements CommandInterface
{
    /**
     * @var Receiver 输出
     */
    private $output;

    /**
     * HelloCommand constructor.
     *
     * @param Receiver $console
     */
    public function __construct(Receiver $console)
    {
        $this->output = $console;
    }

    /**
     * 命令执行.
     *
     * @return void
     */
    public function execute()
    {
        // 没有Receiver的时候完全通过命令类来实现功能
        $this->output->write('Hello World!');
    }
}
