<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::Factory(),
            'title' => fake()->JobTitle,
            'salary' => fake()->randomElement(['$50,000 USD','$90,000 USD','$150,000 USD']),
            'location' => 'Remote',
            'schedule' => 'Full Time',
            'url' => fake()->url,
            'featured' => false,
        ];
    }
}
