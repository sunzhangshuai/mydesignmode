<?php

namespace Tests\Unit;

use App\Behavioral\Observer\Database\UserService;
use Tests\TestCase;
use App\Behavioral\Observer\Subject\Subject;
use App\Behavioral\Observer\Observer\ObserverA;
use App\Behavioral\Observer\Observer\ObserverB;

/**
 * 观察者模式测试方法.
 *
 * Class ObserverTest
 */
class ObserverTest extends TestCase
{
    /**
     * @group observer
     */
    public function testObserver()
    {
        // 初始化主题
        $subject = new Subject();
        // 初始化观察者一
        $observer1 = new ObserverA();
        // 初始化观察者二
        $observer2 = new ObserverB();
        // 添加观察者一
        $subject->attach($observer1);
        // 添加观察者二
        $subject->attach($observer2);
        // 消息提示
        $subject->notify(); //输出：积分量加10\n数据量加10\n

        // 移除观察者一
        $subject->detach($observer1);
        // 消息提示
        $subject->notify(); //输出：数据量加10\n
        $this->expectOutputString("积分量加10\n数据量加10\n数据量加10\n");
    }

    /**
     * @group observer
     */
    public function testDatabaseUser()
    {
        $user = new UserService();
        $user->insert(1, '张帅');
        $user->insert(2, '孙晨');
        $user->insert(2, '孙大傻');
        $user->update(2, '孙大炮');
        $user->delete(1);
        $user->delete(2);
    }
}
