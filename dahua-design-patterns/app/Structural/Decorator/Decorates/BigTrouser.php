<?php

namespace App\Structural\Decorator\Decorates;

/**
 * 垮裤.
 *
 * Class BigTrouser
 */
class BigTrouser extends Finery
{
    const FINERY = '垮裤';

    public function show()
    {
        parent::show();
        echo self::FINERY.' ';
    }
}
