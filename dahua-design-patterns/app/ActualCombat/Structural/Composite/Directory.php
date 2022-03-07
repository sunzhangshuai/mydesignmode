<?php
/**
 * Directory.php :
 *
 * PHP version 7.1
 *
 * @category Directory
 * @package  App\ActualCombat\Structural\Composite
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Structural\Composite;

use App\ActualCombat\Structural\Composite\Interfaces\UpdateDir;

class Directory extends FileSystemNode implements UpdateDir
{
    public $fileNodes = [];

    public $count = 0;

    public function moveNode(FileSystemNode $node, Directory $directory)
    {
        $this->removeSubNode($node);
        $directory->addSubNode($node);
    }

    public function addSubNode(FileSystemNode $node)
    {
        if (in_array($node, $this->fileNodes)) {
            return;
        }
        $this->fileNodes[] = $node;
        $node->parent      = $this;
        $this->count       += $node->count;
        $this->size        += $node->size;
        $f_node            = $this->parent;
        while ($f_node) {
            $f_node->count += $node->count;
            $f_node->size  += $node->size;
            $f_node        = $f_node->parent;
        }
    }

    public function removeSubNode(FileSystemNode $node)
    {
        if (!in_array($node, $this->fileNodes)) {
            return;
        }
        unset($this->fileNodes[array_search($node, $this->fileNodes)]);
        $this->fileNodes = array_values($this->fileNodes);
        $this->count     -= $node->count;
        $this->size      -= $node->size;
        $f_node          = $this->parent;
        while ($f_node) {
            $f_node->count -= $node->count;
            $f_node->size  -= $node->size;
            $f_node        = $f_node->parent;
        }
    }

    public function __toString()
    {
        return '文件路径' . $this->getPath() . PHP_EOL
            . '文件名' . $this->name . PHP_EOL
            . '文件数量' . $this->count . PHP_EOL
            . '文件大小' . $this->size . PHP_EOL;
    }
}
