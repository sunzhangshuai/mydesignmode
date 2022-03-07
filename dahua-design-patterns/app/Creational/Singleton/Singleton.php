<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace App\Creational\Singleton;

/**
 * 单例模式.
 *
 * Class Singleton
 */
final class Singleton
{
    // 实例
    private static $instance;

    /**
     * 不允许从外部调用以防止创建多个实例.
     *
     * Singleton constructor.
     */
    private function __construct()
    {
    }

    /**
     * 通过懒加载获得实例（在第一次使用的时候创建）.
     *
     * @return Singleton
     */
    public static function getInstance()
    {
        if (null == self::$instance) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    /**
     * 防止实例被克隆（这会创建实例的副本）.
     */
    private function __clone()
    {
    }

    /**
     * 防止反序列化（这将创建它的副本）.
     */
    private function __wakeup()
    {
    }
}
