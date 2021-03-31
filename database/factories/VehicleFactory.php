<?php

namespace Database\Factories;

use App\Models\Owner;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehicle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $owner = Owner::factory()->create();
        
        $this->faker->addProvider(new \Faker\Provider\Fakecar($this->faker));

        return [
            'brand_vehicle' => $this->faker->vehicleArray()['brand'],
            'year'              => $this->faker->biasedNumberBetween(1998, 2021, 'sqrt'),
            'type_vehicle' => $this->faker->randomElement(['truck', 'motorcycle', 'car', 'van']),
            'license_plate' => $this->faker->vehicleRegistration(),
            'owner_id' => $owner->id
        ];
    }
}
