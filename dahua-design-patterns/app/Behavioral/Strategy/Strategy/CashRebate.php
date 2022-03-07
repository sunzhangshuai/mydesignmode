<?php

namespace App\Behavioral\Strategy\Strategy;

class CashRebate extends CashSuper
{
    private $rebate;

    public function __construct($rebate)
    {
        $this->rebate = $rebate;
    }

    /**
     * 收银.
     *
     * @param $cash
     *
     * @return float
     */
    public function acceptCash($cash): float
    {
        return $cash * $this->rebate;
    }
}
