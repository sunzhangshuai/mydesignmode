<?php

namespace App\Behavioral\Observer\Observer;

use App\Behavioral\Observer\Subject\ISubject;

class ObserverA implements IObserver
{
    public function update(ISubject $subject)
    {
        $subject->setIntegral(10);
    }
}
