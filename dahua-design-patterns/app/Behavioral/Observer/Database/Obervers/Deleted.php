<?php
/**
 * Deleted.php :
 *
 * PHP version 7.1
 *
 * @category Deleted
 * @package  App\Behavioral\Observer\Database\Obervers
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Observer\Database\Obervers;

use App\Behavioral\Observer\Database\Event;

class Deleted implements Observer
{
    /**
     * @inheritDoc
     */
    public function handle(Event $event)
    {
        $id = array_get($event->model, 'id', 0);
        echo sprintf("id为%s的数据刚刚删除%s", $id, PHP_EOL);

        app('redis')->hdel('User:select:', $id);
        app('redis')->hdel('User:update:', $id);
        app('redis')->hdel('User:save:', $id);
    }
}
