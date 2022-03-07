<?php

namespace App\Behavioral\TemplateMethod;

/**
 * 沙滩旅行.
 *
 * Class BeachJourney
 */
class BeachJourney extends Journey
{
    /**
     * 这个方法必须要实现，它是这个模式的关键点.
     */
    protected function enjoyVacation(): string
    {
        return 'Swimming and sun-bathing';
    }
}
