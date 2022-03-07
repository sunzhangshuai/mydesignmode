<?php

namespace App\Creational\AbstractFactory\Products\Departments;

class SqlserverDepartment implements IDepartment
{
    public function insert()
    {
        return "往SQL Server中的Department表添加一条记录\n";
    }

    public function getDepartment()
    {
        return "根据id得到SQL Server中Department表一条记录\n";
    }
}
