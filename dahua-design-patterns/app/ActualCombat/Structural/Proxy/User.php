<?php
/**
 * User.php :
 *
 * PHP version 7.1
 *
 * @category User
 * @package  App\ActualCombat\Structural\Proxy
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Structural\Proxy;


class User
{
    public $count;

    public function insert($id) {
        echo "{$id}插入成功" . PHP_EOL;
        $this->count++;
    }

    public function update($id) {
        echo "{$id}修改成功" . PHP_EOL;
        $this->count++;
    }

    public function delete($id) {
        echo "{$id}删除成功" . PHP_EOL;
        $this->count++;
    }

    public function search($id) {
        echo "{$id}查询成功" . PHP_EOL;
        $this->count++;
    }

    public function __toString()
    {
        return $this->count;
    }
}
