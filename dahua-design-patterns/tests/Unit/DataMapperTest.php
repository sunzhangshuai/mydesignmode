<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Structural\DataMapper\DBAL;
use App\Structural\DataMapper\User;
use App\Structural\DataMapper\UserMapper;

class DataMapperTest extends TestCase
{
    /**
     * @var UserMapper
     */
    protected $mapper;

    /**
     * @var DBAL
     */
    protected $dbal;

    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->dbal = new DBAL();

        $this->mapper = new UserMapper($this->dbal);
    }

    /**
     * @return array
     */
    public function getNewUser()
    {
        return [
            [
                new User(null, 'Odysseus', 'Odysseus@ithaca.gr'),
            ],
        ];
    }

    /**
     * @return array
     */
    public function getExistingUser()
    {
        return [
            [
                new User(1, 'Odysseus', 'Odysseus@ithaca.gr'),
            ],
        ];
    }
}
