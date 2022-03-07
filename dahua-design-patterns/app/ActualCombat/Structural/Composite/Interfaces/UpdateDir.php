<?php
/**
 * UpdateDir.php :
 *
 * PHP version 7.1
 *
 * @category UpdateDir
 * @package  App\ActualCombat\Structural\Composite\Interfaces
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Structural\Composite\Interfaces;


use App\ActualCombat\Structural\Composite\Directory;
use App\ActualCombat\Structural\Composite\FileSystemNode;

interface UpdateDir
{
    public function moveNode(FileSystemNode $node, Directory $directory);

    public function addSubNode(FileSystemNode $node);

    public function removeSubNode(FileSystemNode $node);
}
