<?php

namespace App\Behavioral\Observer\Subject;

use App\Behavioral\Observer\Observer\IObserver;

/**
 * 具体主题.
 *
 * Class Subject
 */
class Subject implements ISubject
{
    /**
     * 观察者列表.
     *
     * @var array
     */
    private $_observers = [];

    /**
     * 加入观察者.
     *
     * @param IObserver $observer
     */
    public function attach(IObserver $observer)
    {
        if (! in_array($observer, $this->_observers)) {
            $this->_observers[] = $observer;
        }
    }

    /**
     * 去除观察者.
     *
     * @param IObserver $observer
     */
    public function detach(IObserver $observer)
    {
        if (false !== ($index = array_search($observer, $this->_observers))) {
            unset($this->_observers[$index]);
        }
    }

    /**
     * 向观察者发送通知.
     */
    public function notify()
    {
        foreach ($this->_observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * 设置数量.
     *
     * @param $count
     */
    public function setCount($count)
    {
        echo '数据量加'.$count."\n";
    }

    /**
     * 设置积分.
     *
     * @param $integral
     */
    public function setIntegral($integral)
    {
        echo '积分量加'.$integral."\n";
    }
}
