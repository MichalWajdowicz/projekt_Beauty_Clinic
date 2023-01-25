<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Surgery>
 */
class SurgeryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Breast enlargement','Belly plasty','Blepharoplasty','Rhinoplasty','Buttock liposuction','Face lifting']),
            'cost' => $this->faker->numberBetween(1000,4000),
            'description' => $this ->faker->text(200),
            'doctor_id' => $this -> faker ->numberBetween(1,5)
        ];
    }
}
