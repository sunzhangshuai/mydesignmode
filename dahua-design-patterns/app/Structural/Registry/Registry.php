<?php
/**
 * Registry.php :.
 *
 * PHP version 7.1
 *
 * @category Registry
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Structural\Registry;

/**
 * Registry : 注册树.
 *
 * @category Registry
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */
abstract class Registry
{
    const LOGGER = 'logger';

    /**
     * @var array
     */
    protected static $storedValues = [];

    /**
     * sets a value.
     *
     * @param string $key
     * @param mixed  $value
     *
     * @static
     * @return void
     */
    public static function set($key, $value)
    {
        self::$storedValues[$key] = $value;
    }

    /**
     * gets a value from the registry.
     *
     * @param string $key
     *
     * @static
     * @return mixed
     */
    public static function get($key)
    {
        return self::$storedValues[$key];
    }
}
