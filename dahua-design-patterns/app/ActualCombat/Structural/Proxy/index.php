<?php
/**
 * index.php :
 *
 * PHP version 7.1
 *
 * @category ${NAME}
 * @package  ${NAMESPACE}
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

use App\ActualCombat\Structural\Proxy\User;

include __DIR__ . '/' . 'User.php';
include __DIR__ . '/' . 'Proxy.php';
include __DIR__ . '/' . 'DynamicProxy.php';

$proxy = \App\ActualCombat\Structural\Proxy\DynamicProxy::getInstance();
/** @var User $user */
$user = $proxy->proxy(User::class);
$user->insert(1);
echo '========================' . PHP_EOL;

$user->update(1);
echo '========================' . PHP_EOL;

$user->search(1);
echo '========================' . PHP_EOL;

$user->delete(1);
echo '========================' . PHP_EOL;

echo $user->count . PHP_EOL;
