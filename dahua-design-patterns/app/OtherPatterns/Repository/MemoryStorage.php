<?php
/**
 * MemoryStorage.php :.
 *
 * PHP version 7.1
 *
 * @category MemoryStorage
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\OtherPatterns\Repository;

class MemoryStorage implements Storage
{
    private $data;
    private $lastId;

    /**
     * MemoryStorage constructor.
     */
    public function __construct()
    {
        $this->data = [];
        $this->lastId = 0;
    }

    /**
     * 持久化数据方法
     * 返回新创建的对象ID.
     *
     * @param array() $data
     *
     * @return int
     */
    public function persist($data)
    {
        $this->data[++$this->lastId] = $data;

        return $this->lastId;
    }

    /**
     * 通过指定id返回数据
     * 如果为空返回null.
     *
     * @param int $id
     *
     * @return array|null
     */
    public function retrieve($id)
    {
        return isset($this->data[$id]) ? $this->data[$id] : null;
    }

    /**
     * 通过指定id删除数据
     * 如果数据不存在返回false，否则如果删除成功返回true.
     *
     * @param int $id
     *
     * @return bool
     */
    public function delete($id)
    {
        if (! isset($this->data[$id])) {
            return false;
        }

        $this->data[$id] = null;
        unset($this->data[$id]);

        return true;
    }
}
