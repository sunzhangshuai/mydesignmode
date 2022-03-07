<?php

namespace App\Behavioral\Observer\Subject;

use App\Behavioral\Observer\Observer\IObserver;

/**
 * 观察主题.
 *
 * Interfaces ISubject
 */
interface ISubject
{
    /**
     * 加入观察者.
     *
     * @param IObserver $observer
     */
    public function attach(IObserver $observer);

    /**
     * 去除观察者.
     *
     * @param IObserver $observer
     */
    public function detach(IObserver $observer);

    /**
     * 向观察者发送通知.
     */
    public function notify();
}
