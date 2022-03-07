<?php

namespace App\Behavioral\Strategy\Content;

use App\Behavioral\Strategy\Strategy\CashNormal;
use App\Behavioral\Strategy\Strategy\CashRebate;
use App\Behavioral\Strategy\Strategy\CashReturn;

/**
 * 策略模式与简单工厂结合.
 *
 * Class CashFactoryContent
 */
class CashFactoryContent
{
    private $cash;

    public function __construct(string $cashMethod)
    {
        switch ($cashMethod) {
            case '正常收费':
                $this->cash = new CashNormal();

                break;
            case '满500减80':
                $this->cash = new CashReturn(500, 80);

                break;
            case '打8折':
                $this->cash = new CashRebate(0.8);

                break;
        }
    }

    /**
     * 获取计算结果.
     *
     * @param $money
     *
     * @return float
     */
    public function getResult($money)
    {
        return $this->cash->acceptCash($money);
    }
}
