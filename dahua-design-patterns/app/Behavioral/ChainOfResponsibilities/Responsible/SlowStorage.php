<?php
/**
 * SlowStorage.php :.
 *
 * PHP version 7.1
 *
 * @category SlowStorage
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\ChainOfResponsibilities\Responsible;

use App\Behavioral\ChainOfResponsibilities\Handle;
use App\Behavioral\ChainOfResponsibilities\Request;

/**
 * SlowStorage : 该类和FastStorage基本相同，但也有所不同
 * 责任链的一个重要特性是：责任链中的每个处理器都不知道自己在责任链中的位置。
 * 如果请求没有被处理，那么责任链也就不能被称作责任链，除非在请求到达的时候抛出异常。
 *
 * 为了实现真正的扩展性，每一个处理器都不知道后面是否还有处理器
 *
 * @category SlowStorage
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class SlowStorage extends Handle
{
    /**
     * @var array
     */
    protected $data = [];

    /**
     * @param array $data
     */
    public function __construct($data = [])
    {
        $this->data = $data;
    }

    /**
     * 每个处理器具体实现类要实现这个方法对请求进行处理。
     *
     * @param Request $request
     *
     * @return bool true if the request has been processed
     */
    public function processing(Request $request)
    {
        if ('get' === $request->verb) {
            if (array_key_exists($request->key, $this->data)) {
                $request->response = $this->data[$request->key];

                return true;
            }
        }

        return false;
    }
}
