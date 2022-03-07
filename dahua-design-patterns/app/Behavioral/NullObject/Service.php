<?php
/**
 * Service.php :.
 *
 * PHP version 7.1
 *
 * @category Service
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\NullObject;

/**
 * Service : 使用 Logger 的模拟服务
 *
 * @category Service
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */
class Service
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * 我们在构造函数中注入logger.
     *
     * @param LoggerInterface $log
     */
    public function __construct(LoggerInterface $log)
    {
        $this->logger = $log;
    }

    /**
     * do something ...
     */
    public function doSomething()
    {
        // 在空对象模式中不再需要这样判断 "if (!is_null($this->logger))..."
        $this->logger->log('We are in '.__METHOD__);
        // something to do...
    }
}
