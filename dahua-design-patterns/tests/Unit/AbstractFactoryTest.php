<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace Tests\Unit;

use Tests\TestCase;
use App\Creational\AbstractFactory\Factories\AccessFactory;
use App\Creational\AbstractFactory\Factories\SqlserverFactory;

// phpunit --filter=testCanCreateDigitalProduct
// phpunit --group=abstractFactory

/**
 * 抽象工厂模式测试.
 *
 * Class AbstractFactoryTest
 */
class AbstractFactoryTest extends TestCase
{
    /**
     * @group abstractFactory
     */
    public function testSqlserverInsertUser()
    {
        $factory = new SqlserverFactory();
        $product = $factory->createUser();
        $this->assertStringContainsString('往SQL Server中的User表添加一条记录', $product->insert());
    }

    /**
     * @group abstractFactory
     */
    public function testSqlserverGetUser()
    {
        $factory = new SqlserverFactory();
        $product = $factory->createUser();
        $this->assertStringContainsString('根据id得到SQL Server中User表一条记录', $product->getUser());
    }

    /**
     * @group abstractFactory
     */
    public function testAccessInsertUser()
    {
        $factory = new AccessFactory();
        $product = $factory->createUser();
        $this->assertStringContainsString('往Access Server中的User表添加一条记录', $product->insert());
    }

    /**
     * @group abstractFactory
     */
    public function testAccessGetUser()
    {
        $factory = new AccessFactory();
        $product = $factory->createUser();
        $this->assertStringContainsString('根据id得到Access Server中User表一条记录', $product->getUser());
    }

    /**
     * @group abstractFactory
     */
    public function testSqlserverInsertDepartment()
    {
        $factory = new SqlserverFactory();
        $product = $factory->createDepartment();
        $this->assertStringContainsString('往SQL Server中的Department表添加一条记录', $product->insert());
    }

    /**
     * @group abstractFactory
     */
    public function testSqlserverGetDepartment()
    {
        $factory = new SqlserverFactory();
        $product = $factory->createDepartment();
        $this->assertStringContainsString('根据id得到SQL Server中Department表一条记录', $product->getDepartment());
    }

    /**
     * @group abstractFactory
     */
    public function testAccessInsertDepartment()
    {
        $factory = new AccessFactory();
        $product = $factory->createDepartment();
        $this->assertStringContainsString('往Access Server中的Department表添加一条记录', $product->insert());
    }

    /**
     * @group abstractFactory
     */
    public function testAccessGetDepartment()
    {
        $factory = new AccessFactory();
        $product = $factory->createDepartment();
        $this->assertStringContainsString('根据id得到Access Server中Department表一条记录', $product->getDepartment());
    }

    public function testBaa() {
        $a = '[{"error_type":3,"log":"\u5b66\u5458UID:510611698\n\u5e74\u7ea7:\u521d\u4e09\n\u79d1\u76ee:\u82f1\u8bed\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6"}]';
        $b = '[{"error_type":3,"log":"\u5b66\u5458UID:150534556\n\u5e74\u7ea7:\u9ad8\u4e8c\n\u79d1\u76ee:\u6570\u5b66\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6"},{"error_type":3,"log":"\u5b66\u5458UID:150534556\n\u5e74\u7ea7:\u9ad8\u4e8c\n\u79d1\u76ee:\u82f1\u8bed\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a4\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a4\u8bfe\u65f6"},{"error_type":3,"log":"\u5b66\u5458UID:150534556\n\u5e74\u7ea7:\u9ad8\u4e8c\n\u79d1\u76ee:\u7269\u7406\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a4\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a4\u8bfe\u65f6"}]';
        $c = '[{"error_type":3,"log":"\u5b66\u5458UID:560007598\n\u5e74\u7ea7:\u9ad8\u4e00\n\u79d1\u76ee:\u5316\u5b66\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a2048\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a2048\u8bfe\u65f6"}]';
        $d = '[{"error_type":3,"log":"\u5b66\u5458UID:230966149\n\u5e74\u7ea7:\u9ad8\u4e00\n\u79d1\u76ee:\u7269\u7406\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a3\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a3\u8bfe\u65f6"}]';
        $e = '[{"error_type":3,"log":"\u5b66\u5458UID:190702019\n\u5e74\u7ea7:\u9ad8\u4e00\n\u79d1\u76ee:\u5316\u5b66\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6"}]';
        $f = '[{"error_type":3,"log":"\u5b66\u5458UID:550535109\n\u5e74\u7ea7:\u4e94\u5e74\u7ea7\n\u79d1\u76ee:\u8bed\u6587\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a2\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a2\u8bfe\u65f6"}]';
        $g = '[{"error_type":3,"log":"\u5b66\u5458UID:16319159\n\u5e74\u7ea7:\u9ad8\u4e00\n\u79d1\u76ee:\u5316\u5b66\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6"}]';
        $j = '[{"error_type":3,"log":"\u5b66\u5458UID:530738198\n\u5e74\u7ea7:\u521d\u4e8c\n\u79d1\u76ee:\u6570\u5b66\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6"}]';
        $h = '[{"error_type":3,"log":"\u5b66\u5458UID:170900190\n\u5e74\u7ea7:\u521d\u4e00\n\u79d1\u76ee:\u6570\u5b66\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6"}]';
        $i = '[{"error_type":3,"log":"\u5b66\u5458UID:270697040\n\u5e74\u7ea7:\u56db\u5e74\u7ea7\n\u79d1\u76ee:\u8bed\u6587\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6"}]';
        $o = '[{"error_type":3,"log":"\u5b66\u5458UID:370391598\n\u5e74\u7ea7:\u56db\u5e74\u7ea7\n\u79d1\u76ee:\u6570\u5b66\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6"}]';
        $k = '[{"error_type":3,"log":"\u5b66\u5458UID:470837614\n\u5e74\u7ea7:\u521d\u4e8c\n\u79d1\u76ee:\u6570\u5b66\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6"}]';
        $l = '[{"error_type":3,"log":"\u5b66\u5458UID:110747261\n\u5e74\u7ea7:\u521d\u4e8c\n\u79d1\u76ee:\u82f1\u8bed\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a2\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a2\u8bfe\u65f6"}]';
        $m = '[{"error_type":3,"log":"\u5b66\u5458UID:70517529\n\u5e74\u7ea7:\u521d\u4e8c\n\u79d1\u76ee:\u8bed\u6587\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6"}]';
        $n = '[{"error_type":3,"log":"\u5b66\u5458UID:3703229\n\u5e74\u7ea7:\u9ad8\u4e8c\n\u79d1\u76ee:\u7269\u7406\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6"}]';
        $p = '[{"error_type":3,"log":"\u5b66\u5458UID:390567595\n\u5e74\u7ea7:\u9ad8\u4e00\n\u79d1\u76ee:\u6570\u5b66\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6"}]';
        $q = '[{"error_type":9,"log":"\u5b66\u5458UID:370165331\n\u5e74\u7ea7:\u9ad8\u4e09\n\u79d1\u76ee:\u6570\u5b66\n\u8bfe\u65f6\u8bfe\u8017\u5f02\u5e38:fudao_student_course\u5b58\u5728\u8001\u8bfe\u65f6,\u9700\u8981\u4eba\u5de5\u5904\u7406!","repair_info":"\u8001\u8bfe\u65f6\u6570\u91cf\u4e3a1\u8bfe\u65f6"}]';
        $r = '[{"error_type":3,"log":"\u5b66\u5458UID:290835223\n\u5e74\u7ea7:\u9ad8\u4e8c\n\u79d1\u76ee:\u7269\u7406\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6"}]';
        $s = '[{"error_type":3,"log":"\u5b66\u5458UID:80174345\n\u5e74\u7ea7:\u56db\u5e74\u7ea7\n\u79d1\u76ee:\u6570\u5b66\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a2\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a2\u8bfe\u65f6"}]';
        $t = '[{"error_type":3,"log":"\u5b66\u5458UID:260222331\n\u5e74\u7ea7:\u56db\u5e74\u7ea7\n\u79d1\u76ee:\u82f1\u8bed\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6"}]';
        $u = '[{"error_type":3,"log":"\u5b66\u5458UID:590902958\n\u5e74\u7ea7:\u9ad8\u4e8c\n\u79d1\u76ee:\u751f\u7269\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6"}]';
        $v = '[{"error_type":3,"log":"\u5b66\u5458UID:80154652\n\u5e74\u7ea7:\u521d\u4e00\n\u79d1\u76ee:\u6570\u5b66\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6"}]';
        $w = '[{"error_type":3,"log":"\u5b66\u5458UID:80154652\n\u5e74\u7ea7:\u521d\u4e00\n\u79d1\u76ee:\u6570\u5b66\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6"}]';
        $x = '[{"error_type":3,"log":"\u5b66\u5458UID:90378649\n\u5e74\u7ea7:\u9ad8\u4e00\n\u79d1\u76ee:\u5316\u5b66\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6"}]';
        $y = '[{"error_type":3,"log":"\u5b66\u5458UID:591128419\n\u5e74\u7ea7:\u521d\u4e09\n\u79d1\u76ee:\u82f1\u8bed\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6"}]';
        $z = '[{"error_type":3,"log":"\u5b66\u5458UID:310585077\n\u5e74\u7ea7:\u516d\u5e74\u7ea7\n\u79d1\u76ee:\u8bed\u6587\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6"},{"error_type":3,"log":"\u5b66\u5458UID:420089580\n\u5e74\u7ea7:\u521d\u4e00\n\u79d1\u76ee:\u6570\u5b66\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6"},{"error_type":3,"log":"\u5b66\u5458UID:420089580\n\u5e74\u7ea7:\u4e8c\u5e74\u7ea7\n\u79d1\u76ee:\u8bed\u6587\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6"}]';
        $aa = '[{"error_type":3,"log":"\u5b66\u5458UID:410748972\n\u5e74\u7ea7:\u521d\u4e00\n\u79d1\u76ee:\u6570\u5b66\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a2\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a2\u8bfe\u65f6"}]';
        $bb = '[{"error_type":3,"log":"\u5b66\u5458UID:170846787\n\u5e74\u7ea7:\u521d\u4e8c\n\u79d1\u76ee:\u5730\u7406\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6"}]';
        $cc = '[{"error_type":3,"log":"\u5b66\u5458UID:630548870\n\u5e74\u7ea7:\u9ad8\u4e8c\n\u79d1\u76ee:\u5316\u5b66\n\u8bfe\u7a0b\u8d85\u4e0a,\u8bf7\u5c3d\u5feb\u5904\u7406!\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6","repair_info":"\u8d85\u4e0a\u6570\u91cf\u4e3a1\u8bfe\u65f6"}]';
        $arr = [$a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n, $o, $p, $q, $r, $s, $t, $u, $v, $w, $x, $y, $z, $aa, $bb, $cc];
        $result = [];
        foreach ($arr as $value) {
            $result = array_merge($result, json_decode($value, true));
        }
        dd($result);
    }
}
