<?php

namespace App\Behavioral\Observer\Observer;

use App\Behavioral\Observer\Subject\ISubject;

/**
 * 观察者.
 *
 * Interfaces IObserver
 */
interface IObserver
{
    public function update(ISubject $subject);
}
