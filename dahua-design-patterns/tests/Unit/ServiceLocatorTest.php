<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Behavioral\Mediator\MediatorInterface;
use App\OtherPatterns\ServiceLocator\LogService;
use App\OtherPatterns\ServiceLocator\ServiceLocator;
use App\OtherPatterns\ServiceLocator\DatabaseService;
use App\OtherPatterns\ServiceLocator\LogServiceInterface;
use App\OtherPatterns\ServiceLocator\DatabaseServiceInterface;

/**
 * ServiceLocatorTest : 服务定位器模式测试类.
 *
 * @category ServiceLocatorTest
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */
class ServiceLocatorTest extends TestCase
{
    /**
     * @var LogService
     */
    private $logService;

    /**
     * @var DatabaseService
     */
    private $databaseService;

    /**
     * @var ServiceLocator
     */
    private $serviceLocator;

    public function setUp(): void
    {
        $this->serviceLocator = new ServiceLocator();
        $this->logService = new LogService();
        $this->databaseService = new DatabaseService();
    }

    /**
     * @group serviceLocator
     */
    public function testHasServices()
    {
        $this->serviceLocator->add(
            LogServiceInterface::class,
            $this->logService
        );

        $this->serviceLocator->add(
            DatabaseServiceInterface::class,
            $this->databaseService
        );

        $this->assertTrue($this->serviceLocator->has(LogServiceInterface::class));
        $this->assertTrue($this->serviceLocator->has(DatabaseServiceInterface::class));

        $this->assertFalse($this->serviceLocator->has(MediatorInterface::class));
    }

    /**
     * @group serviceLocator
     */
    public function testServicesWithObject()
    {
        $this->serviceLocator->add(
            LogServiceInterface::class,
            $this->logService
        );

        $this->serviceLocator->add(
            DatabaseServiceInterface::class,
            $this->databaseService
        );

        $this->assertSame(
            $this->logService,
            $this->serviceLocator->get(LogServiceInterface::class)
        );

        $this->assertSame(
            $this->databaseService,
            $this->serviceLocator->get(DatabaseServiceInterface::class)
        );
    }

    /**
     * @group serviceLocator
     */
    public function testServicesWithClass()
    {
        $this->serviceLocator->add(
            LogServiceInterface::class,
            get_class($this->logService)
        );

        $this->serviceLocator->add(
            DatabaseServiceInterface::class,
            get_class($this->databaseService)
        );

        $this->assertNotSame(
            $this->logService,
            $this->serviceLocator->get(LogServiceInterface::class)
        );

        $this->assertInstanceOf(
            LogServiceInterface::class,
            $this->serviceLocator->get(LogServiceInterface::class)
        );

        $this->assertNotSame(
            $this->databaseService,
            $this->serviceLocator->get(DatabaseServiceInterface::class)
        );

        $this->assertInstanceOf(
            DatabaseServiceInterface::class,
            $this->serviceLocator->get(DatabaseServiceInterface::class)
        );
    }

    /**
     * @group serviceLocator
     */
    public function testServicesNotShared()
    {
        $this->serviceLocator->add(
            LogServiceInterface::class,
            $this->logService,
            false
        );

        $this->serviceLocator->add(
            DatabaseServiceInterface::class,
            $this->databaseService,
            false
        );

        $this->assertNotSame(
            $this->logService,
            $this->serviceLocator->get(LogServiceInterface::class)
        );

        $this->assertInstanceOf(
            LogServiceInterface::class,
            $this->serviceLocator->get(LogServiceInterface::class)
        );

        $this->assertNotSame(
            $this->databaseService,
            $this->serviceLocator->get(DatabaseServiceInterface::class)
        );

        $this->assertInstanceOf(
            DatabaseServiceInterface::class,
            $this->serviceLocator->get(DatabaseServiceInterface::class)
        );
    }
}
