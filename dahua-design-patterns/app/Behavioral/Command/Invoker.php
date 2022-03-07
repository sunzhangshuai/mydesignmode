<?php
/**
 * Invoker.php :.
 *
 * PHP version 7.1
 *
 * @category Invoker
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Command;

/**
 * Invoker : 请求方.
 *
 * @category Invoker
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class Invoker
{
    /**
     * @var CommandInterface 命令
     */
    private $command;

    /**
     * 设置命令.
     *
     * @param CommandInterface $command
     */
    public function setCommand(CommandInterface $command)
    {
        $this->command = $command;
    }

    /**
     * 执行命令.
     */
    public function run()
    {
        $this->command->execute();
    }
}
