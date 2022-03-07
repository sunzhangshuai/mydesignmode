<?php

namespace App\Behavioral\Strategy\Strategy;

class CashReturn extends CashSuper
{
    private $maxMoney;

    private $return;

    public function __construct($maxMoney, $return)
    {
        $this->maxMoney = $maxMoney;
        $this->return = $return;
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
        if ($cash >= $this->maxMoney) {
            return $cash - $this->return;
        }

        return $cash;
    }
}
