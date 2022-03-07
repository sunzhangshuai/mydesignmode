<?php
/**
 * FastStorage.php :.
 *
 * PHP version 7.1
 *
 * @category FastStorage
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\ChainOfResponsibilities\Responsible;

use App\Behavioral\ChainOfResponsibilities\Handle;
use App\Behavioral\ChainOfResponsibilities\Request;

/**
 * FastStorage :.
 *
 * @category FastStorage
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class FastStorage extends Handle
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
