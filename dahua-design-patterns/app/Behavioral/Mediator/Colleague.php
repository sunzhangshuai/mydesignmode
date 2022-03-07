<?php
/**
 * Colleague.php :.
 *
 * PHP version 7.1
 *
 * @category Colleague
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Mediator;

/**
 * Colleague : 一个抽象的同事类，但是它只知道中介者Mediator，而不知道其他同事。
 *
 * @category Colleague
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
abstract class Colleague
{
    /**
     * this ensures no change in subclasses.
     *
     * @var MediatorInterface
     */
    private $mediator;

    /**
     * @param MediatorInterface $medium
     */
    public function __construct(MediatorInterface $medium)
    {
        $this->mediator = $medium;
    }

    // for subclasses
    protected function getMediator()
    {
        return $this->mediator;
    }
}
