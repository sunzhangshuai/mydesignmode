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

use App\ActualCombat\Behavioral\Command\Command;

include __DIR__ . '/' . 'Command.php';
include __DIR__ . '/' . 'SayHelloCommand.php';
include __DIR__ . '/' . 'SayWorldCommand.php';

array_shift($argv);
(new Command())->command($argv);
