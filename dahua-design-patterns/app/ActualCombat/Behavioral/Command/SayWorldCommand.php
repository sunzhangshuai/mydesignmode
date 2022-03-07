<?php
/**
 * SayWorldCommand.php :
 *
 * PHP version 7.1
 *
 * @category SayWorldCommand
 * @package  App\ActualCombat\Behavioral\Command
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Behavioral\Command;


class SayWorldCommand extends Command
{
    public $command = "say:world %start";

    public function handle() {
        echo "world-----" . $this->input('start') . PHP_EOL;
    }
}
