<?php

namespace Database\Factories;

use App\Models\GachaCapsule;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use App\Models\GachaMachine;

class GachaCapsuleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GachaCapsule::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'gacha_machine_id' => GachaMachine::factory(),
            'skype_id' => Str::random(10),
            'name' => $this->faker->name,
            'bio' => Str::random(30),
            'password' => 'test',
        ];
    }
}
