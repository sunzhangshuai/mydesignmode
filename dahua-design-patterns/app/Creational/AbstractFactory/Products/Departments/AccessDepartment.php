<?php

namespace App\Creational\AbstractFactory\Products\Departments;

class AccessDepartment implements IDepartment
{
    public function insert()
    {
        return "往Access Server中的Department表添加一条记录\n";
    }

    public function getDepartment()
    {
        return "根据id得到Access Server中Department表一条记录\n";
    }
}
