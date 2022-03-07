<?php

namespace App\Behavioral\Observer\Observer;

use App\Behavioral\Observer\Subject\ISubject;

class ObserverB implements IObserver
{
    public function update(ISubject $subject)
    {
        $subject->setCount(10);
    }
}
