<?php
/**
 * File.php :
 *
 * PHP version 7.1
 *
 * @category File
 * @package  App\ActualCombat\Structural\Composite
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Structural\Composite;


use App\ActualCombat\Structural\Composite\Interfaces\Content;

class File extends FileSystemNode implements Content
{
    public $content = '';

    public $count = 1;

    public function updateContent($content)
    {
        $this->content = $content;
        $node          = $this->parent;
        while ($node) {
            $node->size += (strlen($content) - $this->size);
            $node       = $node->parent;
        }
        $this->size = strlen($this->content);
    }

    public function __toString()
    {
        return '文件路径' . $this->getPath() . PHP_EOL
            . '文件名' . $this->name . PHP_EOL
            . '文件数量' . $this->count . PHP_EOL
            . '文件大小' . $this->size . PHP_EOL
            . '文件内容' . $this->content . PHP_EOL;
    }
}
