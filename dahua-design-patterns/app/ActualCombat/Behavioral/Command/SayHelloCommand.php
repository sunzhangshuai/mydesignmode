<?php
/**
 * SayHelloCommand.php :
 *
 * PHP version 7.1
 *
 * @category SayHelloCommand
 * @package  App\ActualCombat\Behavioral\Command
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Behavioral\Command;


class SayHelloCommand extends Command
{
    public $command = "say:hello %start";

    public function handle() {
        echo "hello-----" . $this->input('start') . PHP_EOL;
        $this->command(['say:world', 'start=laozhang']);
    }
}
