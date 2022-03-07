<?php
/**
 * UserService.php :
 *
 * PHP version 7.1
 *
 * @category UserService
 * @package  App\Behavioral\Observer\Database
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Observer\Database;

use App\Behavioral\Observer\Database\Obervers\Created;
use App\Behavioral\Observer\Database\Obervers\Deleted;
use App\Behavioral\Observer\Database\Obervers\Saved;
use App\Behavioral\Observer\Database\Obervers\Selected;
use App\Behavioral\Observer\Database\Obervers\Updated;
use Illuminate\Contracts\Foundation\Application;

/**
 * UserService :
 *
 * @category UserService
 * @author   zhangshuai <zhangshuai1134@gmail.com>
 */
class UserService
{
    /**
     * @var Event 事件
     */
    protected $event;

    /**
     * @var Application|mixed
     */
    protected $redis;

    /**
     * @var string 表名
     */
    protected $table_name = 'Users:';

    /**
     * UserService constructor.
     */
    public function __construct()
    {
        $this->event = new Event();
        $this->redis = app('redis');
    }

    /**
     * 查找
     *
     * @param $id
     *
     * @return array
     */
    public function query($id)
    {
        $model = $this->redis->hget($this->table_name, $id);
        $model = json_decode($model, true);
        $this->event->clearObserver()->setModel($model)->addObserver(new Selected())->action();

        return $model;
    }

    /**
     * 插入
     *
     * @param $id
     * @param $name
     *
     * @return bool
     */
    public function insert($id, $name)
    {
        if ($this->query($id)) return false;
        $model = ['id' => $id, 'name' => $name];
        $this->redis->hset($this->table_name, $id, json_encode($model));
        $this->event->clearObserver()->setModel($model)->addObserver(new Created())->addObserver(new Saved())->action();
        return true;
    }

    /**
     * 修改
     *
     * @param $id
     * @param $name
     *
     * @return bool
     */
    public function update($id, $name)
    {
        $model = $this->query($id);
        if (!$model || $model['name'] == $name) return false;
        $model['name'] = $name;
        $this->redis->hset($this->table_name, $id, json_encode($model));
        $this->event->clearObserver()->setModel($model)->addObserver(new Updated())->addObserver(new Saved())->action();
        return true;
    }

    public function delete($id)
    {
        $model = $this->query($id);
        if (!$model) return false;
        $this->redis->hdel($this->table_name, $id);
        $this->event->clearObserver()->setModel($model)->addObserver(new Deleted())->action();
        return true;
    }
}
