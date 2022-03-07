<?php

namespace App\Structural\Decorator\Decorates;

/**
 * 大T恤.
 *
 * Class TShirts
 */
class TShirts extends Finery
{
    const FINERY = '大T恤';

    public function show()
    {
        parent::show();
        echo self::FINERY.' ';
    }
}
