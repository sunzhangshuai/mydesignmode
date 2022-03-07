<?php
/**
 * Updated.php :
 *
 * PHP version 7.1
 *
 * @category Updated
 * @package  App\Behavioral\Observer\Database\Obervers
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Observer\Database\Obervers;


use App\Behavioral\Observer\Database\Event;

class Updated implements Observer
{
    protected $key = 'User:update:';

    /**
     * @inheritDoc
     */
    public function handle(Event $event)
    {
        $id    = array_get($event->model, 'id', 0);
        $count = app('redis')->hincrby($this->key, $id, 1);
        echo sprintf("id为%s的数据修改了%s次了%s", $id, $count, PHP_EOL);

    }
}
