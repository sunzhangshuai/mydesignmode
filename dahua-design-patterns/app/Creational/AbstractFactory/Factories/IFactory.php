<?php

namespace App\Creational\AbstractFactory\Factories;

interface IFactory
{
    public function createUser();

    public function createDepartment();
}
