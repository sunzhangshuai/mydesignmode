<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace Tests\Unit;

use Tests\TestCase;
use App\Structural\FluentInterface\Sql;

class FluentInterfaceTest extends TestCase
{
    /**
     * @group fluentInterface
     */
    public function testBuildSQL()
    {
        $query = (new Sql())
            ->select(['id', 'type'])
            ->from('clean_after', 'f')
            ->where('f.id = ?');
        $this->assertEquals('SELECT id, type FROM clean_after AS f WHERE f.id = ?', (string) $query);
    }
}
