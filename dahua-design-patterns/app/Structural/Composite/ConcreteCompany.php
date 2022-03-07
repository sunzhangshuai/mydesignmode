<?php
/**
 * ConcreteCompany.php :.
 *
 * PHP version 7.1
 *
 * @category ConcreteCompany
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Structural\Composite;

/**
 * ConcreteCompany : 混凝土公司.
 *
 * @category ConcreteCompany
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class ConcreteCompany extends Company
{
    /**
     * @var array 子公司/部门
     */
    private $children;

    /**
     * 增加公司/部门.
     *
     * @param Company $company
     *
     * @return void
     */
    public function add(Company $company)
    {
        $this->children[] = $company;
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
        $key = array_search($company, $this->children);
        unset($this->children[$key]);
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
        foreach ($this->children as $component) {
            $component->display($depth + 2);
        }
    }

    /**
     * 履行职责.
     *
     * @return void
     */
    public function lineOfDuty()
    {
        foreach ($this->children as $component) {
            $component->lineOfDuty();
        }
    }
}
