<?php

namespace CarlWhittick\Tests\Faker\Provider;

use Faker\Factory;
use CarlWhittick\Faker\Provider\Vehicle;
use PHPUnit\Framework\Attributes\CoversMethod;

#[CoversMethod(Vehicle::class, 'registration')]
class VehicleTest extends \PHPUnit\Framework\TestCase
{
    protected $faker;

    protected function setUp(): void
    {
        $this->faker = Factory::create();
        $this->faker->addProvider(new Vehicle($this->faker));
    }

    public function testRegistrationCurrent(): void
    {
        $this->assertMatchesRegularExpression(
            '#[A-Z]{2}[0-9]{2}\s[A-Z]{3}#i',
            $this->faker->registration('current')
        );
    }

    public function testRegistrationMilitary(): void
    {
        $this->assertMatchesRegularExpression(
            '#[A-Z]{2}[0-9]{2}[A-Z]{2}#i',
            $this->faker->registration('military')
        );
        $this->assertMatchesRegularExpression(
            '#[0-9]{2}[A-Z]{2}[0-9]{2}#i',
            $this->faker->registration('military_inverse')
        );
    }

    public function testRegistrationDiplomatic(): void
    {
        $this->assertMatchesRegularExpression(
            '#[0-9]{3}[XD][0-9]{3}#i',
            $this->faker->registration('diplomatic')
        );
    }

    public function testRegistrationPrefix(): void
    {
        $this->assertMatchesRegularExpression(
            '#[A-Z][0-9]{2,3}\s[A-Z]{3}#i',
            $this->faker->registration('prefix')
        );
    }
}
