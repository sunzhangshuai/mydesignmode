<?php

namespace App\Creational\AbstractFactory\Products\Users;

class AccessUser implements IUser
{
    public function insert()
    {
        return '往Access Server中的User表添加一条记录\n';
    }

    public function getUser()
    {
        return '根据id得到Access Server中User表一条记录\n';
    }
}
