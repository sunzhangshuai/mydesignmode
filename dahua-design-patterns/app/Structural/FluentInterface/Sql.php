<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace App\Structural\FluentInterface;

class Sql
{
    private $from = [];

    private $where = [];

    private $fields = [];

    public function select(array $fields): self
    {
        $this->fields = $fields;

        return $this;
    }

    public function where(string $condition): self
    {
        $this->where[] = $condition;

        return $this;
    }

    public function from(string $table, string $alias): self
    {
        $this->from[] = $table.' AS '.$alias;

        return $this;
    }

    public function __toString(): string
    {
        return 'SELECT '.implode(', ', $this->fields)
            .' FROM '.implode(', ', $this->from)
            .' WHERE '.implode(' AND ', $this->where);
    }
}
