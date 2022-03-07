<?php
/**
 * ServiceLocator.php :.
 *
 * PHP version 7.1
 *
 * @category ServiceLocator
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\OtherPatterns\ServiceLocator;

/**
 * ServiceLocator : 服务提供者.
 *
 * @category ServiceLocator
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */
class ServiceLocator implements ServiceLocatorInterface
{
    /**
     * @var array 全部服务
     */
    private $services;

    /**
     * @var array 已经实例化的的服务
     */
    private $instantiated;

    /**
     * @var array 服务是否可共享
     */
    private $shared;

    /**
     * ServiceLocator constructor.
     */
    public function __construct()
    {
        $this->services = [];
        $this->instantiated = [];
        $this->shared = [];
    }

    /**
     * 使用特定接口注册服务.
     * 添加服务时，应注册它的接口或字符串，以便于将来更改服务实现.
     *
     * @param string        $interface
     * @param string|object $service
     * @param bool          $share
     */
    public function add($interface, $service, $share = true)
    {
        if (is_object($service) && $share) {
            $this->instantiated[$interface] = $service;
        }
        $this->services[$interface] = (is_object($service) ? get_class($service) : $service);
        $this->shared[$interface] = $share;
    }

    /**
     * 判断服务是否被注册.
     *
     * @param $interface
     *
     * @return bool
     */
    public function has($interface): bool
    {
        return isset($this->services[$interface]) || isset($this->instantiated[$interface]);
    }

    /**
     * 通过接口名获取服务
     *
     * @param $interface
     *
     * @return mixed
     */
    public function get($interface)
    {
        // 如果实例存在并且共享，则提供该实例
        if (isset($this->instantiated[$interface]) && $this->shared[$interface]) {
            return $this->instantiated[$interface];
        }

        // otherwise gets the service registered.
        $service = $this->services[$interface];

        // You should check if the service class exists and
        // the class is instantiable.

        // This example is a simple implementation, but
        // when you create a service, you can decide
        // if $service is a factory or a class.
        // By registering a factory you can create your services
        // using the DependencyInjection pattern.

        // ...

        // Creates the service object
        $object = new $service();

        // and saves it if the service must be shared.
        if ($this->shared[$interface]) {
            $this->instantiated[$interface] = $object;
        }

        return $object;
    }
}
