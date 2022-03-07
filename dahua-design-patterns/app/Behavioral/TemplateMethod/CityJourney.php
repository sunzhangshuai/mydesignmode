<?php

namespace App\Behavioral\TemplateMethod;

class CityJourney extends Journey
{
    /**
     * 这个方法必须要实现，它是这个模式的关键点.
     */
    protected function enjoyVacation(): string
    {
        return 'Eat, drink, take photos and sleep';
    }

    /**
     * 买礼物.
     *
     * @return string
     */
    protected function buyGift()
    {
        return 'Buy a gift';
    }
}
