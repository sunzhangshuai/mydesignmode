<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace App\Creational\Builder\Builders;

/**
 * 制造接口.
 *
 * Interfaces BuilderInterface
 */
interface BuilderInterface
{
    /**
     * 制造车辆.
     */
    public function createVehicle();

    /**
     * 增加轮子.
     */
    public function addWheel();

    /**
     * 增加发动机.
     */
    public function addEngine();

    /**
     * 增加车门.
     */
    public function addDoors();

    /**
     * 获取车辆.
     *
     * @return mixed
     */
    public function getVehicle();
}
