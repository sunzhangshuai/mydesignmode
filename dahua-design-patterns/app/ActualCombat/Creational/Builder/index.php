<?php
/**
 * index.php :
 *
 * PHP version 7.1
 *
 * @category ${NAME}
 * @package  ${NAMESPACE}
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

use App\ActualCombat\Creational\Builder\Builder;

include __DIR__ . '/' . 'Builder.php';
include __DIR__ . '/' . 'ResourcePoolConfig.php';

$builder = new Builder();
$builder->name = '张帅';
$builder->maxIdle = 10;
$builder->maxTotal = 20;
echo $builder->builder();
