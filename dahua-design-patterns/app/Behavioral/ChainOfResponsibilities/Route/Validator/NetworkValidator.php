<?php
/**
 * NetworkValidator.php :
 *
 * PHP version 7.1
 *
 * @category NetworkValidator
 * @package  App\Behavioral\ChainOfResponsibilities\Route\Validator
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\ChainOfResponsibilities\Route\Validator;

use App\Behavioral\ChainOfResponsibilities\Route\Request;
use App\Behavioral\ChainOfResponsibilities\Route\Response;
use App\Behavioral\ChainOfResponsibilities\Route\RouteValidator;

/**
 * NetworkValidator : 网络验证类
 *
 * @category NetworkValidator
 * @author   zhangshuai <zhangshuai1134@gmail.com>
 */
class NetworkValidator implements Validator
{
    /**
     * @inheritDoc
     */
    public function handle(Request $request, Response $response, RouteValidator $validator)
    {
        if (!$request->network) {
            $response->success = false;
            $response->msg = '网络验证不通过';
            return;
        }
        $validator->handle($request, $response);
        if ($response->success) {
            $response->msg .= '网络验证通过' . PHP_EOL;
        }
    }
}
