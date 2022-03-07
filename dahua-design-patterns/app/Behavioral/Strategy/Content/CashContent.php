<?php

namespace App\Behavioral\Strategy\Content;

use App\Behavioral\Strategy\Strategy\CashSuper;

class CashContent
{
    private $cashMethod;

    public function __construct(CashSuper $cashMethod)
    {
        $this->cashMethod = $cashMethod;
    }

    public function getResult($money)
    {
        return $this->cashMethod->acceptCash($money);
    }
}
