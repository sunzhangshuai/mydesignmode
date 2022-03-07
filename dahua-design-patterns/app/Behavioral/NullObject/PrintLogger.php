<?php
/**
 * PrintLogger.php :.
 *
 * PHP version 7.1
 *
 * @category PrintLogger
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\NullObject;

/**
 * PrintLogger : PrintLogger是用于打印Logger实体到标准输出的Logger.
 *
 * @category PrintLogger
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */
class PrintLogger implements LoggerInterface
{
    /**
     * @param string $str
     *
     * @return void
     */
    public function log($str)
    {
        echo $str;
    }
}
