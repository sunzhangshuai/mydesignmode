<?php

namespace App\Behavioral\Strategy\Strategy;

class CashNormal extends CashSuper
{
    /**
     * 收银.
     *
     * @param $cash
     *
     * @return float
     */
    public function acceptCash($cash): float
    {
        return $cash;
    }
}
