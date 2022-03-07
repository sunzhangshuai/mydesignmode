<?php
/**
 * Client.php :.
 *
 * PHP version 7.1
 *
 * @category Client
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Mediator\Subsystem;

use App\Behavioral\Mediator\Colleague;

/**
 * Client : 发起请求&获取响应的客户端。
 *
 * @category Client
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class Client extends Colleague
{
    /**
     * request.
     */
    public function request()
    {
        $this->getMediator()->makeRequest();
    }

    /**
     * output content.
     *
     * @param string $content
     */
    public function output($content)
    {
        echo $content;
    }
}
