<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace App\Creational\Pool;

/**
 * 对象池模式.
 *
 * Class WorkerPool
 */
class WorkerPool
{
    /**
     * 已占用.
     *
     * @var array
     */
    private $occupiedWorkers = [];

    /**
     * 空闲.
     *
     * @var array
     */
    private $freeWorks = [];

    /**
     * 获取对象
     *
     * @return StringReverseWorker
     */
    public function get()
    {
        if (0 == count($this->freeWorks)) {
            $worker = new StringReverseWorker();
        } else {
            $worker = array_pop($this->freeWorks);
        }
        $key = spl_object_hash($worker);
        $this->occupiedWorkers[$key] = $worker;

        return $worker;
    }

    /**
     * 销毁对象
     *
     * @param StringReverseWorker $worker
     */
    public function dispose(StringReverseWorker $worker)
    {
        $key = spl_object_hash($worker);
        if (isset($this->occupiedWorkers[$key])) {
            unset($this->occupiedWorkers[$key]);
            $this->freeWorks[$key] = $worker;
        }
    }

    /**
     * 获取池子中对象数量.
     *
     * @return int
     */
    public function count()
    {
        return count($this->occupiedWorkers) + count($this->freeWorks);
    }
}
