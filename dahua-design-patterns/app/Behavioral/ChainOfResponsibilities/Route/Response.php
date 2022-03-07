<?php
/**
 * Response.php :
 *
 * PHP version 7.1
 *
 * @category Response
 * @package  App\Behavioral\ChainOfResponsibilities\Route
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\ChainOfResponsibilities\Route;


class Response
{
    /**
     * @var boolean 是否成功
     */
    public $success = true;

    /**
     * @var string 备注
     */
    public $msg;

    /**
     * @var array 数组
     */
    public $data;
}
