<?php
/**
 * HRDepartment.php :.
 *
 * PHP version 7.1
 *
 * @category HRDepartment
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Structural\Composite;

/**
 * HRDepartment : 人力资源部.
 *
 * @category HRDepartment
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class HRDepartment extends Company
{
    /**
     * 增加公司/部门.
     *
     * @param Company $company
     *
     * @return void
     */
    public function add(Company $company)
    {
    }

    /**
     * 移除公司/部门.
     *
     * @param Company $company
     *
     * @return void
     */
    public function remove(Company $company)
    {
    }

    /**
     * 显示公司/部门.
     *
     * @param $depth
     *
     * @return void
     */
    public function display($depth)
    {
        echo str_repeat('-', $depth).$this->name."\n";
    }

    /**
     * 履行职责.
     *
     * @return void
     */
    public function lineOfDuty()
    {
        echo $this->name.'员工招聘培训管理'."\n";
    }
}
