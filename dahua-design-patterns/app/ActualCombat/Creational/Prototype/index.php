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

include __DIR__ . '/' . 'Object/ZhangShuai.php';
include __DIR__ . '/' . 'Object/SunChen.php';
include __DIR__ . '/' . 'Object/MaoMao.php';
include __DIR__ . '/' . 'DeepCopy.php';
include __DIR__ . '/' . 'ShallowCopy.php';

$maomao = new \App\ActualCombat\Creational\Prototype\Object\MaoMao();
$sunchen = new \App\ActualCombat\Creational\Prototype\Object\SunChen($maomao);
$zhangshuai = new \App\ActualCombat\Creational\Prototype\Object\ZhangShuai();

$shallow1 = new \App\ActualCombat\Creational\Prototype\ShallowCopy($zhangshuai, $sunchen);
$shallow2 = clone $shallow1;
$shallow2->laopo->maomao->name = '毛毛2';
$shallow2->laogong->name = '老张';

echo $shallow1 . PHP_EOL;
echo $shallow2 . PHP_EOL;

echo '========================' . PHP_EOL;

$maomao = new \App\ActualCombat\Creational\Prototype\Object\MaoMao();
$sunchen = new \App\ActualCombat\Creational\Prototype\Object\SunChen($maomao);
$zhangshuai = new \App\ActualCombat\Creational\Prototype\Object\ZhangShuai();

$deep1 = new \App\ActualCombat\Creational\Prototype\DeepCopy($zhangshuai, $sunchen);
$deep2 = clone $deep1;
$deep3 = $deep1->copy2();
$deep2->laopo->maomao->name = '毛毛2';
$deep2->laogong->name = '老张';
$deep3->laopo->maomao->name = '毛毛3';
$deep3->laogong->name = '老公';
echo $deep1 . PHP_EOL;
echo $deep2 . PHP_EOL;
echo $deep3 . PHP_EOL;



