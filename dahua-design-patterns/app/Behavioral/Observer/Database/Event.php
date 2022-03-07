<?php
/**
 * Event.php :
 *
 * PHP version 7.1
 *
 * @category Event
 * @package  App\Behavioral\Observer\Database
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Observer\Database;


use App\Behavioral\Observer\Database\Obervers\Observer;

class Event
{
    /**
     * @var array
     */
    public $model;

    /**
     * @var array Observer[]
     */
    protected $observers = [];

    /**
     * Event constructor.
     *
     * @param array $model
     *
     * @return Event
     */
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    /**
     * 添加监听者
     *
     * @param Observer $observer
     *
     * @return Event
     */
    public function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
        return $this;
    }

    /**
     * 清空观察者
     *
     * @return Event
     */
    public function clearObserver()
    {
        $this->observers = [];
        return $this;
    }

    /**
     *
     */
    public function action()
    {
        foreach ($this->observers as $observer) {
            /** @var Observer $observer */
            $observer->handle($this);
        }
    }
}
