<?php
/**
 * Selected.php :
 *
 * PHP version 7.1
 *
 * @category Selected
 * @package  App\Behavioral\Observer\Database\Obervers
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Observer\Database\Obervers;


use App\Behavioral\Observer\Database\Event;

class Selected implements Observer
{
    protected $key = 'User:select:';

    /**
     * @inheritDoc
     */
    public function handle(Event $event)
    {
        if (!$event->model) {
            $count = app('redis')->hincrby($this->key, 'no', 1);
            echo sprintf("第%s次没有查到数据了%s", $count, PHP_EOL);
        } else {
            $id    = array_get($event->model, 'id', 0);
            $count = app('redis')->hincrby($this->key, $id, 1);
            echo sprintf("id为%s的数据查了%s次了%s", $id, $count, PHP_EOL);
        }

    }
}
