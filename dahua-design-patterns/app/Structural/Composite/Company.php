<?php
/**
 * Company.php :.
 *
 * PHP version 7.1
 *
 * @category Company
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Structural\Composite;

/**
 * Company : 公司抽象类.
 *
 * @category Company
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
abstract class Company
{
    /**
     * @var string 公司名称
     */
    protected $name;

    /**
     * 初始化公司名称.
     *
     * Company constructor.
     *
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * 增加公司/部门.
     *
     * @param Company $company
     *
     * @return void
     */
    abstract public function add(self $company);

    /**
     * 移除公司/部门.
     *
     * @param Company $company
     *
     * @return void
     */
    abstract public function remove(self $company);

    /**
     * 显示公司/部门.
     *
     * @param $depth
     *
     * @return void
     */
    abstract public function display($depth);

    /**
     * 履行职责.
     *
     * @return void
     */
    abstract public function lineOfDuty();
}
