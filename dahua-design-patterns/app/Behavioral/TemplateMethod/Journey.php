<?php

namespace App\Behavioral\TemplateMethod;

/**
 * 旅行类.
 *
 * Class Journey
 */
abstract class Journey
{
    // 要做的事
    private $thingsToDo = [];

    /**
     * 这是当前类及其子类提供的公共服务
     * 注意，它「冻结」了全局的算法行为
     * 如果你想重写这个契约，只需要实现一个包含 takeATrip() 方法的接口.
     */
    final public function takeATrip()
    {
        $this->thingsToDo[] = $this->buyAFlight();
        $this->thingsToDo[] = $this->takePlane();
        $this->thingsToDo[] = $this->enjoyVacation();
        $buyGift = $this->buyGift();

        if (null !== $buyGift) {
            $this->thingsToDo[] = $buyGift;
        }

        $this->thingsToDo[] = $this->takePlane();
    }

    /**
     * 这个方法必须要实现，它是这个模式的关键点.
     */
    abstract protected function enjoyVacation(): string;

    /**
     * 买礼物
     * 这个方法是可选的，也可能作为算法的一部分
     * 如果需要的话你可以重写它.
     *
     * @return null|string
     */
    protected function buyGift()
    {
    }

    /**
     * 购买航班.
     *
     * @return string
     */
    private function buyAFlight(): string
    {
        return 'Buy a flight ticket';
    }

    /**
     * 坐飞机.
     *
     * @return string
     */
    private function takePlane(): string
    {
        return 'Taking the plane';
    }

    /**
     * 把事情做好.
     *
     * @return string[]
     */
    public function getThingsToDo(): array
    {
        return $this->thingsToDo;
    }
}
