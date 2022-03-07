<?php
/**
 * Mediator.php :.
 *
 * PHP version 7.1
 *
 * @category Mediator
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Mediator;

use App\Behavioral\Mediator\Subsystem\Client;
use App\Behavioral\Mediator\Subsystem\Server;
use App\Behavioral\Mediator\Subsystem\Database;

/**
 * Mediator : 中介者模式的具体实现类.
 *
 * @category Mediator
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class Mediator implements MediatorInterface
{
    /**
     * @var Server
     */
    protected $server;

    /**
     * @var Database
     */
    protected $database;

    /**
     * @var Client
     */
    protected $client;

    /**
     * @param Database $db
     * @param Client   $cl
     * @param Server   $srv
     */
    public function setColleague(Database $db, Client $cl, Server $srv)
    {
        $this->database = $db;
        $this->server = $srv;
        $this->client = $cl;
    }

    /**
     * 发送响应.
     *
     * @param string $content
     */
    public function sendResponse($content)
    {
        $this->client->output($content);
    }

    /**
     * 发起请求
     */
    public function makeRequest()
    {
        $this->server->process();
    }

    /**
     * 查询数据库.
     */
    public function queryDb()
    {
        return $this->database->getData();
    }
}
