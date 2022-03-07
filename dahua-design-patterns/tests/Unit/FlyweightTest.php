<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Structural\Flyweight\User;
use App\Structural\Flyweight\WebsiteFactory;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * FlyweightTest : 享元模式测试类.
 *
 * @category FlyweightTest
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class FlyweightTest extends TestCase
{
    /**
     * @group flyweight
     *
     * @return void
     */
    public function testFlyweight()
    {
        $f = new WebsiteFactory();
        $fx = $f->getWebSiteCategory('产品展示');
        $this->assertEquals($fx->use(new User('张伟')), '网站分类: 产品展示，用户:张伟');

        $fy = $f->getWebSiteCategory('产品展示');
        $this->assertEquals($fy->use(new User('王伟')), '网站分类: 产品展示，用户:王伟');

        $fz = $f->getWebSiteCategory('产品展示');
        $this->assertEquals($fz->use(new User('王芳')), '网站分类: 产品展示，用户:王芳');

        $fl = $f->getWebSiteCategory('博客');
        $this->assertEquals($fl->use(new User('李伟')), '网站分类: 博客，用户:李伟');

        $fm = $f->getWebSiteCategory('博客');
        $this->assertEquals($fm->use(new User('王秀英')), '网站分类: 博客，用户:王秀英');

        $fn = $f->getWebSiteCategory('博客');
        $this->assertEquals($fn->use(new User('李秀英')), '网站分类: 博客，用户:李秀英');

        $this->assertEquals($f->getWebSiteCount(), 2);
    }
}
