<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Academia>
 */
class AcademiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>User::all()->random()->id,
            'dono' => $this->faker->boolean ? true : false,
            'investimento'=>$this->faker->numberBetween(1000, 10000),
            'nome'=>$this->faker->name,
            'endereco'=>$this->faker->sentence(),
            'data_cadastro'=>$this->faker->randomElement([$this->faker->dateTimeThisMonth])
            
        ];
    }
}
