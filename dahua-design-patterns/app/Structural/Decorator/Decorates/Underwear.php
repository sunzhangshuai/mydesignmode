<?php

namespace App\Structural\Decorator\Decorates;

/**
 * 袜子.
 *
 * Class Underwear
 */
class Underwear extends Finery
{
    const FINERY = '袜子';

    public function show()
    {
        parent::show();
        echo self::FINERY.' ';
    }
}
