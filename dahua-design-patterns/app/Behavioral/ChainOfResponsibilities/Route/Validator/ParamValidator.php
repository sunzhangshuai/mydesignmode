<?php
/**
 * ParamValidator.php :
 *
 * PHP version 7.1
 *
 * @category ParamValidator
 * @package  App\Behavioral\ChainOfResponsibilities\Route\Validator
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\ChainOfResponsibilities\Route\Validator;

use App\Behavioral\ChainOfResponsibilities\Route\Request;
use App\Behavioral\ChainOfResponsibilities\Route\Response;
use App\Behavioral\ChainOfResponsibilities\Route\RouteValidator;

/**
 * ParamValidator : 参数验证类
 *
 * @category ParamValidator
 * @author   zhangshuai <zhangshuai1134@gmail.com>
 */
class ParamValidator implements Validator
{
    /**
     * @inheritDoc
     */
    public function handle(Request $request, Response $response, RouteValidator $validator)
    {
        if (!$request->param) {
            $response->success = false;
            $response->msg = '参数验证不通过';
            return;
        }
        $validator->handle($request, $response);
        if ($response->success) {
            $response->msg .= '参数验证通过' . PHP_EOL;
        }
    }
}
