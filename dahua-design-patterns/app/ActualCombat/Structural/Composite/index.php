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

use App\ActualCombat\Structural\Composite\File;

include __DIR__ . '/' . 'Interfaces/Content.php';
include __DIR__ . '/' . 'Interfaces/UpdateDir.php';
include __DIR__ . '/' . 'FileSystemNode.php';
include __DIR__ . '/' . 'Directory.php';
include __DIR__ . '/' . 'File.php';

$maomao = new File('maomao');
$maomao->updateContent('maomao');
$sunchen = new File('sunchen');
$sunchen->updateContent('sunchen');
$zhangshuai = new File('zhangshuai');
$zhangshuai->updateContent('zhangshuai');
$jia1 = new \App\ActualCombat\Structural\Composite\Directory('jia1');
$jia2 = new \App\ActualCombat\Structural\Composite\Directory('jia2');

$jia2->addSubNode($maomao);

$jia2->addSubNode($sunchen);
$jia1->addSubNode($jia2);
$jia1->addSubNode($zhangshuai);

$jia2->moveNode($sunchen, $jia1);

$maomao->updateContent('mm');

echo $jia1;
echo '========================' . PHP_EOL;
echo $zhangshuai;
echo '========================' . PHP_EOL;
echo $jia2;
echo '========================' . PHP_EOL;
echo $sunchen;
echo '========================' . PHP_EOL;
echo $maomao;
echo '========================' . PHP_EOL;






