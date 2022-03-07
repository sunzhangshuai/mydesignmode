<?php
/**
 * Command.php :
 *
 * PHP version 7.1
 *
 * @category Command
 * @package  App\ActualCombat\Behavioral\Command
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Behavioral\Command;


use ReflectionClass;

class Command
{
    public $command = '';

    public $commands = [
        SayHelloCommand::class,
        SayWorldCommand::class
    ];

    public $inputs = [];

    public function input($key)
    {
        $commands      = explode(' ', $this->command);
        array_shift($commands);
        if (in_array('%' . $key, $commands) && isset($this->inputs[$key])) {
            return $this->inputs[$key];
        }
        return '';
    }

    public function handle()
    {

    }

    public function command($inputs)
    {
        $command_name = array_shift($inputs);
        foreach ($this->commands as $command) {
            /** @var Command $command_model */
            $command_model = (new ReflectionClass($command))->newInstance();
            $commands      = explode(' ', $command_model->command);
            if ($commands[0] == $command_name) {
                foreach ($inputs as $input) {
                    $param = explode('=', $input);
                    $command_model->inputs[$param[0]] = $param[1];
                }
                $command_model->handle();
            }
        }
    }
}
