<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Behavioral\TemplateMethod\CityJourney;
use App\Behavioral\TemplateMethod\BeachJourney;

/**
 * 模板方法测试.
 *
 * Class TemplateMethodTest
 */
class TemplateMethodTest extends TestCase
{
    /**
     * @group templateMethod
     */
    public function testCanGetOnVacationOnTheBeach()
    {
        $beachJourney = new BeachJourney();
        $beachJourney->takeATrip();

        $this->assertEquals(
            ['Buy a flight ticket', 'Taking the plane', 'Swimming and sun-bathing', 'Taking the plane'],
            $beachJourney->getThingsToDo()
        );
    }

    /**
     * @group templateMethod
     */
    public function testCanGetOnAJourneyToACity()
    {
        $cityJourney = new CityJourney();
        $cityJourney->takeATrip();

        $this->assertEquals(
            [
                'Buy a flight ticket',
                'Taking the plane',
                'Eat, drink, take photos and sleep',
                'Buy a gift',
                'Taking the plane',
            ],
            $cityJourney->getThingsToDo()
        );
    }
}
