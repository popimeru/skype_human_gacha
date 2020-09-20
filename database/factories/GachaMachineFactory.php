<?php

namespace Database\Factories;

use App\Models\GachaMachine;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class GachaMachineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GachaMachine::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => Str::random(5),
            'description' => Str::random(30),
            'enable_flag' => TRUE,
        ];
    }
}
