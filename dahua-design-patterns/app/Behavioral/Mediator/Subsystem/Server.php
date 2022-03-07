<?php
/**
 * Server.php :.
 *
 * PHP version 7.1
 *
 * @category Server
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Mediator\Subsystem;

use App\Behavioral\Mediator\Colleague;

/**
 * Server : 用于发送响应。
 *
 * @category Server
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class Server extends Colleague
{
    /**
     * process on server.
     */
    public function process()
    {
        $data = $this->getMediator()->queryDb();
        $this->getMediator()->sendResponse("Hello $data");
    }
}
