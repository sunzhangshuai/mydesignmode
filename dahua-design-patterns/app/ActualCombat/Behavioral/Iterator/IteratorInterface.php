<?php
/**
 * IteratorInterface.php :
 *
 * PHP version 7.1
 *
 * @category IteratorInterface
 * @package  App\ActualCombat\Behavioral\Iterator
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Behavioral\Iterator;


interface IteratorInterface
{
    public function hasNext();

    public function next();
}
