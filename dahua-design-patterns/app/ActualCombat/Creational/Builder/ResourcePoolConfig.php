<?php
/**
 * ResourcePoolConfig.php :
 *
 * PHP version 7.1
 *
 * @category ResourcePoolConfig
 * @package  App\ActualCombat\Creational\Builder
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Creational\Builder;


class ResourcePoolConfig
{
    private $name;

    private $maxTotal;

    // 最大资源空闲数
    private $maxIdle;

    private $minIdle;

    public function __construct(Builder $builder)
    {
        $this->name     = $builder->name;
        $this->maxTotal = $builder->maxTotal;
        $this->maxIdle  = $builder->maxIdle;
        $this->minIdle  = $builder->minIdle;
    }

    public function __toString() {
        return $this->name;
    }

}
