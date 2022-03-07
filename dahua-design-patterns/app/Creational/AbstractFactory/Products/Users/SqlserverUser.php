<?php

namespace App\Creational\AbstractFactory\Products\Users;

class SqlserverUser implements IUser
{
    public function insert()
    {
        return '往SQL Server中的User表添加一条记录\n';
    }

    public function getUser()
    {
        return '根据id得到SQL Server中User表一条记录\n';
    }
}
