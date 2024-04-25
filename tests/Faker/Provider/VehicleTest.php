<?php

namespace CarlWhittick\Tests\Faker\Provider;

use Faker\Factory;
use CarlWhittick\Faker\Provider\Vehicle;

class VehicleTest extends \PHPUnit\Framework\TestCase
{
    protected $faker;

    protected function setUp(): void
    {
        $this->faker = Factory::create();
        $this->faker->addProvider(new Vehicle($this->faker));
    }

    public function testRegistration(): void
    {
        $this->assertMatchesRegularExpression('#^[A-Z0-9]*$#i', $this->faker->registration());
    }
}
