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

use App\ActualCombat\Behavioral\Iterator\ArrayList;

include __DIR__ . '/' . 'IteratorInterface.php';
include __DIR__ . '/' . 'ListInterface.php';
include __DIR__ . '/' . 'ArrayIterator.php';
include __DIR__ . '/' . 'ArrayList.php';

$array = new ArrayList();
$array->add(3);
$array->add(8);
$array->add(2);
$iter1 = $array->iterator();
$array->remove(2);
$iter2 = $array->iterator();
$array->remove(3);
$iter3 = $array->iterator();

while ($iter1->hasNext()) {
    echo $iter1->next() . " ";
}
echo $array->get(0) . PHP_EOL;
echo PHP_EOL;

while ($iter2->hasNext()) {
    echo $iter2->next() . " ";
}
echo $array->get(0) . PHP_EOL;
echo PHP_EOL;

while ($iter3->hasNext()) {
    echo $iter3->next() . " ";
}
echo $array->get(0) . PHP_EOL;
echo PHP_EOL;
