<?php
/**
 * RouteValidator.php :
 *
 * PHP version 7.1
 *
 * @category RouteValidator
 * @package  App\Behavioral\ChainOfResponsibilities\Route
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\ChainOfResponsibilities\Route;


use App\Behavioral\ChainOfResponsibilities\Route\Validator\Validator;

class RouteValidator
{
    /**
     * @var int 责任链中验证个数
     */
    protected $length;

    /**
     * @var int 当前的验证位置
     */
    protected $index = 0;

    /**
     * @var Validator[] 验证类
     */
    protected $validators;

    /**
     * 添加验证类
     *
     * @param Validator $validator
     *
     * @return RouteValidator
     */
    public function addValidator(Validator $validator)
    {
        $this->validators[] = $validator;
        $this->length++;
        return $this;
    }

    /**
     * 处理
     *
     * @param Request  $request
     * @param Response $response
     */
    public function handle(Request $request, Response $response)
    {
        if ($this->index === $this->length) {
            $response->data = '老婆，我爱你';
            return;
        }
        $validator = $this->validators[$this->index];
        $this->index++;
        $validator->handle($request, $response, $this);
        $this->index = 0;
    }
}
