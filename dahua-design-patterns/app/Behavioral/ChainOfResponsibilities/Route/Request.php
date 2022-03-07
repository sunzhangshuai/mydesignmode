<?php
/**
 * Request.php :
 *
 * PHP version 7.1
 *
 * @category Request
 * @package  App\Behavioral\ChainOfResponsibilities\Route
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\ChainOfResponsibilities\Route;

/**
 * Request : 请求
 *
 * @category Request
 * @author   zhangshuai <zhangshuai1134@gmail.com>
 */
class Request
{
    /**
     * @var mixed
     */
    public $param;

    /**
     * @var mixed
     */
    public $network;

    /**
     * @var mixed
     */
    public $dns;
}
