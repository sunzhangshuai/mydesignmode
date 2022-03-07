<?php
/**
 * index.php :
 *
 * PHP version 7.1
 *
 *
 * @package  ${NAMESPACE}
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @category ${NAME}
 */

define('CUR_PATH', __DIR__);


function includeAllFile($path)
{
    $handle = opendir($path);
    while (($file = readdir($handle)) !== false) {
        if ($file == '.' || $file == '..' || CUR_PATH . '/' . $file ==  __FILE__ || $file == 'readme.md') {
            continue;
        }
        if (is_dir($path . '/' . $file)) {
            includeAllFile($path . '/' . $file);
        } else {
            include $path . '/' . $file;
        }
    }
}

includeAllFile(__DIR__ . '/' . 'Interfaces');
includeAllFile(__DIR__ . '/' . 'Impl');
includeAllFile(__DIR__ . '/' . 'IocConfig');

include __DIR__ . '/' . 'Factory.php';


use App\ActualCombat\Creational\Factory\ProxyFactory;
use App\ActualCombat\Creational\Factory\Impl\RateLimiter;
use App\ActualCombat\Creational\Factory\Interfaces\CounterInterface;

$rate = ProxyFactory::getInstance()->create(RateLimiter::class);
echo $rate . PHP_EOL;
echo '========================' . PHP_EOL;
$rate = ProxyFactory::getInstance()->create(RateLimiter::class);
echo $rate . PHP_EOL;
echo '========================' . PHP_EOL;
$rate = ProxyFactory::getInstance()->create(CounterInterface::class);
echo $rate . PHP_EOL;
echo '========================' . PHP_EOL;
