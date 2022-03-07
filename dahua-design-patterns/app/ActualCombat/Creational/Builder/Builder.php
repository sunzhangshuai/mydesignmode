<?php
/**
 * Builder.php :
 *
 * PHP version 7.1
 *
 * @category Builder
 * @package  App\ActualCombat\Creational\Builder
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Creational\Builder;


use Exception;

class Builder
{
    public $name;

    public $maxTotal = 8;

    // 最大资源空闲数
    public $maxIdle = 8;

    public $minIdle = 0;

    public function builder() {
        if (!$this->name) {
            throw new Exception('资源名称必填');
        }
        if (!is_numeric($this->maxIdle) || $this->maxIdle < 0 || $this->maxIdle > $this->maxTotal) {
            throw new Exception('最大资源空闲数有误');
        }

        if (!is_numeric($this->minIdle) || $this->minIdle < 0 || $this->minIdle > $this->maxIdle) {
            throw new Exception('最小资源空闲数有误');
        }

        return new ResourcePoolConfig($this);
    }
}
