<?php
/**
 * Observer.php :
 *
 * PHP version 7.1
 *
 * @category Observer
 * @package  App\Behavioral\Observer\Database\Obervers
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Observer\Database\Obervers;


use App\Behavioral\Observer\Database\Event;

interface Observer
{
    /**
     * 处理事件
     *
     * @param Event $event
     */
    public function handle(Event $event);
}
