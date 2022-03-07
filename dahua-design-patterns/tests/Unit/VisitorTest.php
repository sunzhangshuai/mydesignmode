<?php

namespace Tests\Unit;

use Tests\TestCase;
use ReflectionException;
use InvalidArgumentException;
use App\Behavioral\Visitor\Role;
use App\Behavioral\Visitor\User;
use App\Behavioral\Visitor\Group;
use App\Behavioral\Visitor\RolePrintVisitor;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * VisitorTest : 访问者模式测试.
 *
 * @category VisitorTest
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class VisitorTest extends TestCase
{
    /**
     * 访问者.
     * @var RolePrintVisitor
     */
    protected $visitor;

    protected function setUp(): void
    {
        $this->visitor = new RolePrintVisitor();
    }

    public function getRole()
    {
        return [
            [
                new User('Dominik'),
                'Role: User Dominik',
            ],
            [
                new Group('Administrators'),
                'Role: Group: Administrators',
            ],
        ];
    }

    /**
     * @dataProvider getRole
     *
     * @param Role $role
     * @param      $expect
     *
     * @group visitor
     */
    public function testVisitSomeRole(Role $role, $expect)
    {
        $this->assertEquals($expect, $role->accept($this->visitor));
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Mock
     * @throws ReflectionException
     *
     * @group visitor
     */
    public function testUnknownObject()
    {
        $mock = $this->getMockForAbstractClass(Role::class);
        $mock->accept($this->visitor);
    }
}
