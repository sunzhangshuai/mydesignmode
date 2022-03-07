<?php

namespace Tests\Unit;

use App\Behavioral\ChainOfResponsibilities\Route\Response;
use App\Behavioral\ChainOfResponsibilities\Route\RouteValidator;
use App\Behavioral\ChainOfResponsibilities\Route\Validator\DnsValidator;
use App\Behavioral\ChainOfResponsibilities\Route\Validator\NetworkValidator;
use App\Behavioral\ChainOfResponsibilities\Route\Validator\ParamValidator;
use Tests\TestCase;
use App\Behavioral\ChainOfResponsibilities\Request;
use App\Behavioral\ChainOfResponsibilities\Responsible\FastStorage;
use App\Behavioral\ChainOfResponsibilities\Responsible\SlowStorage;

/**
 * ChainOfResponsibilitiesTest : 责任链模式单元测试.
 *
 * @category ChainOfResponsibilitiesTest
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class ChainOfResponsibilitiesTest extends TestCase
{
    /**
     * @var FastStorage
     */
    protected $chain;

    protected function setUp(): void
    {
        $this->chain = new FastStorage(['bar' => 'baz']);
        $this->chain->append(new SlowStorage(['bar' => 'baz', 'foo' => 'bar']));
    }

    public function makeRequest()
    {
        $request       = new Request();
        $request->verb = 'get';

        return [
            [$request],
        ];
    }

    /**
     * @group        chainOfResponsibilities
     *
     * @dataProvider makeRequest
     *
     * @param Request $request
     */
    public function testFastStorage($request)
    {
        $request->key = 'bar';
        $ret          = $this->chain->handle($request);

        $this->assertTrue($ret);
        $this->assertObjectHasAttribute('response', $request);
        $this->assertEquals('baz', $request->response);
        // despite both handle owns the 'bar' key, the FastStorage is responding first
        $className = FastStorage::class;
        $this->assertEquals($className, $request->forDebugOnly);
    }

    /**
     * @group        chainOfResponsibilities
     *
     * @dataProvider makeRequest
     *
     * @param Request $request
     */
    public function testSlowStorage($request)
    {
        $request->key = 'foo';
        $ret          = $this->chain->handle($request);

        $this->assertTrue($ret);
        $this->assertObjectHasAttribute('response', $request);
        $this->assertEquals('bar', $request->response);
        // FastStorage has no 'foo' key, the SlowStorage is responding
        $className = SlowStorage::class;
        $this->assertEquals($className, $request->forDebugOnly);
    }

    /**
     * @group        chainOfResponsibilities
     *
     * @dataProvider makeRequest
     *
     * @param Request $request
     */
    public function testFailure($request)
    {
        $request->key = 'kurukuku';
        $ret          = $this->chain->handle($request);

        $this->assertFalse($ret);
        // the last responsible :
        $className = SlowStorage::class;
        $this->assertEquals($className, $request->forDebugOnly);
    }

    public function testRoute()
    {
        $network_validator = new NetworkValidator();
        $dns_validator     = new DnsValidator();
        $param_validator   = new ParamValidator();
        $route_validator   = new RouteValidator();
        $route_validator->addValidator($network_validator)
            ->addValidator($dns_validator)
            ->addValidator($param_validator);

        $request           = new \App\Behavioral\ChainOfResponsibilities\Route\Request();
        $response          = new Response();
        $request->dns = 'localhost';
        $request->network = '非常顺';
        $request->param = '老婆在哪里';
        $route_validator->handle($request, $response);

        $request           = new \App\Behavioral\ChainOfResponsibilities\Route\Request();
        $response          = new Response();
        $request->dns = 'localhost';
        $request->network = '非常顺';
        $route_validator->handle($request, $response);
    }
}
