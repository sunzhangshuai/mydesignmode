<?php
/**
 * TeamLead.php :.
 *
 * PHP version 7.1
 *
 * @category TeamLead
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\OtherPatterns\Delegation;

/**
 * TeamLead : `TeamLead` 类将工作委托给 `JuniorDeveloper`.
 *
 * @category TeamLead
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */
class TeamLead
{
    /**
     * @var JuniorDeveloper
     */
    protected $slave;

    /**
     * 在构造函数中注入初级开发者JuniorDeveloper.
     * @param JuniorDeveloper $junior
     */
    public function __construct(JuniorDeveloper $junior)
    {
        $this->slave = $junior;
    }

    /**
     * TeamLead 喝咖啡, JuniorDeveloper 工作.
     * @return string
     */
    public function writeCode()
    {
        return $this->slave->writeBadCode();
    }
}
