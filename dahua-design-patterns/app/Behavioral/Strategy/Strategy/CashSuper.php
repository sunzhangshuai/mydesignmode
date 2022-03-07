<?php

namespace App\Behavioral\Strategy\Strategy;

abstract class CashSuper
{
    /**
     * 收银.
     *
     * @param $cash
     *
     * @return float
     */
    abstract public function acceptCash($cash): float;
}
