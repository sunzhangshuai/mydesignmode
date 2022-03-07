<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Structural\Composite\HRDepartment;
use App\Structural\Composite\ConcreteCompany;
use App\Structural\Composite\FinanceDepartment;

/**
 * CompositeTest : 组合模式测试.
 *
 * @category CompositeTest
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class CompositeTest extends TestCase
{
    /**
     * 增加子公司.
     *
     * @group composite
     *
     * @return void
     */
    public function testAdd()
    {
        $root = new ConcreteCompany('北京总公司');
        $root->add(new HRDepartment('总公司人力资源部'));
        $root->display(1);
        $str = <<<'display'
-北京总公司
---总公司人力资源部

display;
        $this->expectOutputString($str);
    }

    /**
     * @group composite
     *
     * 移除子公司
     */
    public function testRemove()
    {
        $root = new ConcreteCompany('北京总公司');
        $root->add(new HRDepartment('总公司人力资源部'));
        $root->add(new FinanceDepartment('总公司财务部'));
        $root->remove(new HRDepartment('总公司人力资源部'));
        $root->display(1);
        $str = <<<'display'
-北京总公司
---总公司财务部

display;
        $this->expectOutputString($str);
    }

    /**
     * 展示公司.
     *
     * @group composite
     */
    public function testDisplay()
    {
        $root = $this->_getRoot();
        $root->display(1);
        $str = <<<'display'
-北京总公司
---总公司人力资源部
---总公司财务部
---上海华东分公司
-----华东分公司人力资源部
-----华东分公司财务部
---南京办事处
-----南京办事处人力资源部
-----南京办事处财务部
---杭州办事处
-----杭州办事处人力资源部
-----杭州办事处财务部

display;

        $this->expectOutputString($str);
    }

    /**
     * @group composite
     *
     * 查看职能
     */
    public function testLineOfDuty()
    {
        $root = $this->_getRoot();
        $root->lineOfDuty();
        $str = <<<'display'
总公司人力资源部员工招聘培训管理
总公司财务部公司财务收支管理
华东分公司人力资源部员工招聘培训管理
华东分公司财务部公司财务收支管理
南京办事处人力资源部员工招聘培训管理
南京办事处财务部公司财务收支管理
杭州办事处人力资源部员工招聘培训管理
杭州办事处财务部公司财务收支管理

display;

        $this->expectOutputString($str);
    }

    /**
     * @return ConcreteCompany
     */
    private function _getRoot()
    {
        $root = new ConcreteCompany('北京总公司');
        $root->add(new HRDepartment('总公司人力资源部'));
        $root->add(new FinanceDepartment('总公司财务部'));

        $comp = new ConcreteCompany('上海华东分公司');
        $comp->add(new HRDepartment('华东分公司人力资源部'));
        $comp->add(new FinanceDepartment('华东分公司财务部'));
        $root->add($comp);

        $comp1 = new ConcreteCompany('南京办事处');
        $comp1->add(new HRDepartment('南京办事处人力资源部'));
        $comp1->add(new FinanceDepartment('南京办事处财务部'));
        $root->add($comp1);

        $comp2 = new ConcreteCompany('杭州办事处');
        $comp2->add(new HRDepartment('杭州办事处人力资源部'));
        $comp2->add(new FinanceDepartment('杭州办事处财务部'));
        $root->add($comp2);

        return $root;
    }
}
