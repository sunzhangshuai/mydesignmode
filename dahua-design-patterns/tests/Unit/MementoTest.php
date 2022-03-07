<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Behavioral\Memento\Role;
use App\Behavioral\Memento\Caretaker;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * MementoTest : 备忘录模式测试类.
 *
 * @category MementoTest
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class MementoTest extends TestCase
{
    /**
     * @group memento
     *
     * @return void
     */
    public function testMemento()
    {
        // 打BOSS之前：血、蓝全部满值
        $role = new Role(100, 100);
        $this->assertContains($role->display(), '用户当前状态：血量：100，蓝量：100');

        // 保持进度
        $newMemento = $role->saveMemento();
        $caretaker = new Caretaker($newMemento);

        // 大战boss，快 GAME OVER 了
        $role->bloodFlow = 20;
        $role->magicPoint = 0;
        $this->assertContains($role->display(), '用户当前状态：血量：20，蓝量：0');

        // 恢复存档
        $role->restoreMemento($caretaker->memento);
        $this->assertContains($role->display(), '用户当前状态：血量：100，蓝量：100');
    }
}
