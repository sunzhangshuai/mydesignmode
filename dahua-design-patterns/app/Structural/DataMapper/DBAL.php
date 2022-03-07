<?php
/**
 * DBAL.php :.
 *
 * PHP version 7.1
 *
 * @category DBAL
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Structural\DataMapper;

class DBAL
{
    /**
     * 增.
     *
     * @param $data
     *
     * @return mixed
     */
    public function insert($data)
    {
        return $data;
    }

    /**
     * 改.
     *
     * @param $data
     * @param $query
     *
     * @return mixed
     */
    public function update($data, $query)
    {
        return $data;
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function find($id)
    {
        return $id;
    }

    /**
     * @return array
     */
    public function findAll()
    {
        return [];
    }
}
