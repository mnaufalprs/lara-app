<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InputLivetest>
 */
class InputLivetestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'server_address' => fake()->domainName(),
            'request_count' => fake()->randomFloat(2, 50, 500),
            'connection_count' => fake()->randomFloat(2, 500, 1000),
            'status_connect' => 1
        ];
    }
}
