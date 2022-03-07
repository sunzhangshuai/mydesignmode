<?php
/**
 * DnsValidator.php :
 *
 * PHP version 7.1
 *
 * @category DnsValidator
 * @package  App\Behavioral\ChainOfResponsibilities\Route\Validator
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\ChainOfResponsibilities\Route\Validator;

use App\Behavioral\ChainOfResponsibilities\Route\Request;
use App\Behavioral\ChainOfResponsibilities\Route\Response;
use App\Behavioral\ChainOfResponsibilities\Route\RouteValidator;

/**
 * DnsValidator : 域名验证类
 *
 * @category DnsValidator
 * @author   zhangshuai <zhangshuai1134@gmail.com>
 */
class DnsValidator implements Validator
{
    /**
     * @inheritDoc
     */
    public function handle(Request $request, Response $response, RouteValidator $validator)
    {
        if (!$request->dns) {
            $response->success = false;
            $response->msg = '域名验证不通过';
            return;
        }
        $validator->handle($request, $response);
        if ($response->success) {
            $response->msg .= '域名验证通过' . PHP_EOL;
        }
    }
}
